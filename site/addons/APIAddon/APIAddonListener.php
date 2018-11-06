<?php
namespace Statamic\Addons\APIAddon;
use Illuminate\Support\Facades\Log;
use Statamic\Events\Data\EntryDeleted;
use Statamic\Events\Data\EntrySaved;
use Statamic\Extend\Listener;
class APIAddonListener extends Listener {
    public $events = [
	    EntrySaved::class => 'saved',
	    EntryDeleted::class => 'deleted',
    ];
	public function saved(EntrySaved $event) {
		$context = $event->contextualData();
		if ($context['collection'] === 'careers'){
			$context['posting_id'] = $context['slug'];
			$context['entry_id'] = $context['id'];
			$response = $this->api_save($context);
			//Log::info(print_r($response,true));
		}
		return $event;
	}
	public function deleted(EntryDeleted $event) {
		$context = $event->contextualData();
		$this->api_delete($context['id']);
		return $event;
	}

	private function api_save($career){
		$url = env('API_URL') . env('API_VERSION') . '/jobs?api_token='.env('API_TOKEN');
		$method = "PUT";
		return $this->sync($url,$method,json_encode($career));
	}
	private function api_delete($entry_id){
		$url = env('API_URL') . env('API_VERSION') . '/jobs/' . $entry_id . '?api_token='.env('API_TOKEN');
		$method = "DELETE";
		return $this->sync($url,$method,$entry_id);
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