<?php
namespace Statamic\Addons\APIAddon;
use Illuminate\Support\Facades\Log;
use Statamic\Events\Data\EntryDeleted;
use Statamic\Events\Data\EntrySaved;
use Statamic\Extend\Listener;
use Statamic\Forms\Submission;
class APIAddonListener extends Listener {
    public $events = [
	    EntrySaved::class => 'saved',
	    EntryDeleted::class => 'deleted',
	    'Form.submission.created' => 'submissionCreated'
    ];
	public function saved(EntrySaved $event) {
		$context = $event->contextualData();
		if ($context['collection'] === 'careers'){
			$context['entry_id'] = $context['id'];
			$context['status_id'] = $context['status'];
			$context['office_id'] = $context['office'];
			$response = $this->api_career_save($context);
		}
		return $event;
	}
	public function deleted(EntryDeleted $event) {
		$context = $event->contextualData();
		$this->api_career_delete($context['id']);
		return $event;
	}
	public function submissionCreated(Submission $submission) {
		$form_name = $submission->formset()->name();
		if ($form_name === 'careers'){
			$this->api_submission_created($submission->data());
		}
		if ($form_name === 'landing-page'){
			$params = array();
			$name = $submission->get('name');
			$names = explode(' ', $name);
			$revenue = $submission->get('monthly_revenue');
			if ($revenue == 1){
				$revenue = 2500;
			}
			$params['fname'] = (isset($names[0])) ? $names[0] : null;
			$params['lname'] = (isset($names[1])) ? $names[1] : 'lastname';
			$params['phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['source'] = $submission->get('source');
			$params['company_name'] = $submission->get('business_name');
			$params['company_revenue'] = $revenue;
			$month = $submission->get('time_in_business_month');
			$year = $submission->get('time_in_business_year');
			if ($month && $year) {
				$params['company_started'] = $month.'/01/'.$year;
			}
			$api_response = $this->api_lead_created($params);
			$submission->set('lead_id',1);
			$submission->save();
			Log::info($api_response);
		}
		if ($form_name === 'contact'){
			$params = array();
			$params['fname'] = $submission->get('firstname');
			$params['lname'] = $submission->get('lastname');
			$params['phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['company_name'] = $submission->get('business_name');
			$params['source'] = 'contact-form';
			$api_response = $this->api_lead_created($params);
			$submission->set('lead_id',2);
			$submission->save();
			Log::info($api_response);
		}
		return $submission;
	}

	private function api_career_save($career){
		$url = env('API_URL') . env('API_VERSION') . '/careers?api_token='.env('API_TOKEN');
		$method = "PUT";
		return $this->sync($url,$method,json_encode($career));
	}
	private function api_career_delete($entry_id){
		$url = env('API_URL') . env('API_VERSION') . '/careers/' . $entry_id . '?api_token='.env('API_TOKEN');
		$method = "DELETE";
		return $this->sync($url,$method,$entry_id);
	}
	private function api_submission_created($submission){
		$url = env('API_URL') . env('API_VERSION') . '/submissions?api_token='.env('API_TOKEN');
		$method = "PUT";
		return $this->sync($url,$method,json_encode($submission));
	}
	private function api_lead_created($data){
		$url = env('API_URL') . env('API_VERSION') . '/leads?api_token='.env('API_TOKEN');
		$method = "PUT";
		return $this->sync($url,$method,json_encode($data));
	}

	private function sync($url,$method,$post_fields){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST,$method);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json'
		));
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
}