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
		$names = preg_split('/\s+/',$name);
		$firtname = (isset($names[0])) ? $names[0] : 'First Name';
		unset($names[0]);
		$lastnames = implode('',$names);
		if (strlen($lastnames)===0){
			$lastnames = 'Lastname';
		}
		$params['first_name'] = $firtname;
		$params['last_name'] = $lastnames;
		$params['contact_phone'] = $submission->get('phone');
		$params['company_phone_number'] = $submission->get('phone');
		$month = $submission->get('time_in_business_month');
		$year = $submission->get('time_in_business_year');
		$params['when_was_your_business_started'] = $month.'/1/'.$year;
		$params['email'] = $submission->get('email');
		$params['business'] = $submission->get('business_name');
		$params['has_business_bank_account'] = $submission->get('has_business_bank_account');
		$params['active_bankruptcy'] = $submission->get('active_bankruptcy');
		$params['how_much_are_your_estimated_gross_monthly_sales'] = $submission->get('monthly_revenue');
		$params['campaign_source'] = (isset($_COOKIE['Visitor_Source__c'])) ? $_COOKIE['Visitor_Source__c'] : null;
		$params['campaign_medium'] = (isset($_COOKIE['Visitor_Medium__c'])) ? $_COOKIE['Visitor_Medium__c'] : null;
		$params['campaign_term'] = (isset($_COOKIE['Visitor_Term__c'])) ? $_COOKIE['Visitor_Term__c'] : null;
		$params['campaign_content'] = (isset($_COOKIE['Visitor_Content__c'])) ? $_COOKIE['Visitor_Content__c'] : null;
		$params['campaign_name'] = (isset($_COOKIE['Visitor_Campaign__c'])) ? $_COOKIE['Visitor_Campaign__c'] : null;
		$params['gclid_google_click_identifier'] = (isset($_COOKIE['GA_Client_ID'])) ? $_COOKIE['GA_Client_ID'] : null;
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
		$params['first_name'] = $submission->get('firstname');
		$params['last_name'] = $submission->get('lastname');
		$params['business_name'] = $submission->get('business_name');
		$params['contact_phone'] = $submission->get('phone');
		$params['email'] = $submission->get('email');
		$params['campaign_source'] = (isset($_COOKIE['Visitor_Source__c'])) ? $_COOKIE['Visitor_Source__c'] : null;
		$params['campaign_medium'] = (isset($_COOKIE['Visitor_Medium__c'])) ? $_COOKIE['Visitor_Medium__c'] : null;
		$params['campaign_term'] = (isset($_COOKIE['Visitor_Term__c'])) ? $_COOKIE['Visitor_Term__c'] : null;
		$params['campaign_content'] = (isset($_COOKIE['Visitor_Content__c'])) ? $_COOKIE['Visitor_Content__c'] : null;
		$params['campaign_name'] = (isset($_COOKIE['Visitor_Campaign__c'])) ? $_COOKIE['Visitor_Campaign__c'] : null;
		$params['gclid_google_click_identifier'] = (isset($_COOKIE['GA_Client_ID'])) ? $_COOKIE['GA_Client_ID'] : null;
		$response = $this->pushToFormStack($form_id,$params);
		if (isset($response['id'])){
			return $response['id'];
		}else{
			return false;
		}
	}
	private function pushToFormStack($form_id,$params){
		$idleRequest = null;
		$oauth_token = env('FORM_STACK_API_TOKEN');
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
		//\Log::info(print_r($idleRequest,true));
		$result = curl_exec($ch);
		return $result = json_decode($result, true);
	}
}