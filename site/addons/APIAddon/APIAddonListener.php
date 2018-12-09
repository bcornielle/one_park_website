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
			$params['fname'] = (isset($names[0])) ? $names[0] : null;
			$params['lname'] = (isset($names[1])) ? $names[1] : 'lastname';
			$params['phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['company_name'] = $submission->get('company_name');
			$params['company_revenue'] = $submission->get('monthly_revenue');
			$params['campaign_source'] = (isset($_COOKIE['Visitor_Source__c'])) ? $_COOKIE['Visitor_Source__c'] : null;
			$params['campaign_medium'] = (isset($_COOKIE['Visitor_Medium__c'])) ? $_COOKIE['Visitor_Medium__c'] : null;
			$params['campaign_term'] = (isset($_COOKIE['Visitor_Term__c'])) ? $_COOKIE['Visitor_Term__c'] : null;
			$params['campaign_content'] = (isset($_COOKIE['Visitor_Content__c'])) ? $_COOKIE['Visitor_Content__c'] : null;
			$params['campaign_name'] = (isset($_COOKIE['Visitor_Campaign__c'])) ? $_COOKIE['Visitor_Campaign__c'] : null;
			$params['gclid_google_click_identifier'] = (isset($_COOKIE['GA_Client_ID'])) ? $_COOKIE['GA_Client_ID'] : null;
			$response = $this->api_lead_created($params);
			Log::info(print_r($response,true));
		}
		return $submission;
	}

	private function api_career_save($career){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/careers?api_token='.env('API_TOKEN');
			$method = "PUT";
			return $this->sync($url,$method,json_encode($career));
		}
		return false;
	}
	private function api_career_delete($entry_id){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/careers/' . $entry_id . '?api_token='.env('API_TOKEN');
			$method = "DELETE";
			return $this->sync($url,$method,$entry_id);
		}
		return false;
	}
	private function api_submission_created($submission){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/submissions?api_token='.env('API_TOKEN');
			$method = "PUT";
			return $this->sync($url,$method,json_encode($submission));
		}
		return false;
	}
	private function api_lead_created($data){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/leads?api_token='.env('API_TOKEN');
			$method = "PUT";
			return $this->sync($url,$method,json_encode($data));
		}
		return false;
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
		return curl_exec($ch);
	}
}