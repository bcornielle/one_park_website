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
			$context['posting_id'] = $context['slug'];
			$context['entry_id'] = $context['id'];
			$this->api_job_save($context);
		}
		return $event;
	}
	public function deleted(EntryDeleted $event) {
		$context = $event->contextualData();
		$this->api_job_delete($context['id']);
		return $event;
	}
	public function submissionCreated(Submission $submission) {
		$form_name = $submission->formset()->name();
		if ($form_name === 'careers'){
			$this->api_submission_created($submission->data());
		}
		return $submission;
	}

	private function api_job_save($career){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/jobs?api_token='.env('API_TOKEN');
			$method = "PUT";
			return $this->sync($url,$method,json_encode($career));
		}
		return false;
	}
	private function api_job_delete($entry_id){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/jobs/' . $entry_id . '?api_token='.env('API_TOKEN');
			$method = "DELETE";
			return $this->sync($url,$method,$entry_id);
		}
		return false;
	}
	private function api_submission_created($submission){
		if (env('API_URL') && env('API_VERSION') && env('API_TOKEN')){
			$url = env('API_URL') . env('API_VERSION') . '/submissions?api_token='.env('API_TOKEN');
			$method = "PUT";
			$submission['posting_id'] = $submission['job_id'];
			return $this->sync($url,$method,json_encode($submission));
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