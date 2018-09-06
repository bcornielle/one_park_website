<?php
namespace Statamic\Addons\FormSubmission;
use Statamic\Extend\Listener;
use Statamic\Forms\Submission;
class FormSubmissionListener extends Listener {
    public $events = [
	    'Form.submission.creating' => 'creating'
	];
	public function creating(Submission $submission) {
		$errors = array();
		$form_name = $submission->formset()->name();
		if ($form_name === 'landing-page'){
			$response = $this->pushToFormStack($submission);
			if ($response) {
				session()->flash('form_stack_redirect', $response);
			}else{
				return array('errors' => array('API Submission Error'));
			}
		}
		return [
			'submission' => $submission,
			'errors' => $errors
		];
	}
	private function pushToFormStack($submission) {
		$form_id = '2925351';
		$oauth_token = '6c8b7a6f01a6de69169d8fa627d5dd41';
		$get_api_url = 'https://www.formstack.com/api/v2/form/'.$form_id.'/field.json';
		$json_url = $get_api_url .'?oauth_token='.$oauth_token;
		$json = file_get_contents($json_url);
		$data = json_decode($json, true);
		$idleRequest = null;
		$params = array();
		$name = $submission->get('name');
		$names = explode(' ', $name);
		$params['first_name'] = (isset($names[0])) ? $names[0] : null;
		$params['last_name'] = (isset($names[1])) ? $names[1] : null;
		$params['contact_phone'] = $submission->get('phone');
		$params['email'] = $submission->get('email');
		$params['business'] = $submission->get('business_name');
		$params['how_much_are_your_estimated_gross_monthly_sales'] = $submission->get('monthly_revenue');
		foreach($data as $key=>$val){
			if(isset($params[$val['name']]) && $params[$val['name']]){
				$idleRequest .= "&field_".$val['id']."=".$params[$val['name']];
			}
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.formstack.com/api/v2/form/".$form_id."/submission.json?oauth_token=".$oauth_token);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $idleRequest);
		$result = curl_exec($ch);
		$result = json_decode($result, true);
		if (isset($result['id']) && isset($result['redirect_url'])){
			return $result['redirect_url'];
		}else{
			return false;
		}
	}
}