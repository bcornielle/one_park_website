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
			$response = $this->pushLPSubmissionToFormStack($submission);
			if ($response) {
				session()->flash('form_stack_redirect', $response);
			}else{
				return array('errors' => array('API Submission Error'));
			}
		}
		if ($form_name === 'contact'){
			$response = $this->pushContactSubmissionToFormStack($submission);
			if (!$response) {
				return array('errors' => array('API Submission Error'));
			}
		}
		return [
			'submission' => $submission,
			'errors' => $errors
		];
	}
	private function pushLPSubmissionToFormStack($submission) {
		$form_id = '2925351';
		$params = array();
		$name = $submission->get('name');
		$names = explode(' ', $name);
		$params['first_name'] = (isset($names[0])) ? $names[0] : null;
		$params['last_name'] = (isset($names[1])) ? $names[1] : null;
		$params['contact_phone'] = $submission->get('phone');
		$params['email'] = $submission->get('email');
		$params['business'] = $submission->get('business_name');
		$params['how_much_are_your_estimated_gross_monthly_sales'] = $submission->get('monthly_revenue');
		$response = $this->pushToFormStack($form_id,$params);
		if (isset($response['id']) && isset($response['redirect_url'])){
			return $response['redirect_url'];
		}else{
			return false;
		}
	}
	private function pushContactSubmissionToFormStack($submission) {
		$form_id = '2446707';
		$params = array();
		$params['name'] = $submission->get('firstname') . ' ' . $submission->get('lastname');
		$params['business_name'] = $submission->get('business_name');
		$params['contact_phone'] = $submission->get('phone');
		$params['email'] = $submission->get('email');
		$params['visitor_source'] = null;
		$params['visitor_medium'] = null;
		$params['visitor_campaign'] = null;
		$params['visitor_term'] = null;
		$params['visitor_content'] = null;
		$params['ga_client_id'] = null;
		$response = $this->pushToFormStack($form_id,$params);
		\Log::info(print_r($response,true));
		if (isset($response['id'])){
			return $response['id'];
		}else{
			return false;
		}
	}
	private function pushToFormStack($form_id,$params){
		$idleRequest = null;
		$oauth_token = '6c8b7a6f01a6de69169d8fa627d5dd41';
		$get_api_url = 'https://www.formstack.com/api/v2/form/'.$form_id.'/field.json';
		$json_url = $get_api_url .'?oauth_token='.$oauth_token;
		$json = file_get_contents($json_url);
		$data = json_decode($json, true);
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
		return $result = json_decode($result, true);
	}
}