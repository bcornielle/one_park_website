<?php
namespace Statamic\Addons\APIAddon;
use Statamic\Events\Data\EntryDeleted;
use Statamic\Events\Data\EntrySaved;
use Statamic\Extend\Listener;
use Statamic\Forms\Submission;
class APIAddonListener extends Listener {
    public $events = [
	    EntrySaved::class => 'EntrySaved',
	    EntryDeleted::class => 'EntryDeleted',
	    'Form.submission.creating' => 'creating',
	    'Form.submission.created' => 'submissionCreated',
    ];
	//FormStack API
	public function creating(Submission $submission) {
		$errors = array();
		$form_name = $submission->formset()->name();
		if ($form_name === 'landing-page'){
			$response = $this->api_formstack_form1($submission);
			if ($response) {
				session()->flash('form_stack_redirect', $response);
			}else{
				return array('errors' => array('Submission Error'));
			}
		}
		if ($form_name === 'contact'){
			$response = $this->api_forstack_contact_form($submission);
			if (!$response) {
				return array('errors' => array('Submission Error'));
			}
		}
		return [
			'submission' => $submission,
			'errors' => $errors
		];
	}
	private function api_formstack_form1($submission) {
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
		$params['email'] = $submission->get('email');
		$params['business'] = $submission->get('business_name');
		$params['has_business_bank_account'] = $submission->get('has_business_bank_account');
		$params['active_bankruptcy'] = $submission->get('active_bankruptcy');
		$params['how_much_are_your_estimated_gross_monthly_sales'] = $submission->get('monthly_revenue');
		//campaign
		$campaign = null;
		if (isset($_COOKIE['Visitor_Campaign__c'])) {
		   $campaign = $_COOKIE['Visitor_Campaign__c'] ;
		} else {
		   if ($submission->get('utm_campaign')){
			   $campaign = $submission->get('utm_campaign');
		   }
		}
		$params['campaign_name'] = $campaign;
		//source
		$source = null;
		if (isset($_COOKIE['Source__c'])) {
			$source = $_COOKIE['Source__c'] ;
		}else{
			if ($submission->get('utm_source')){
				$source = $submission->get('utm_source');
			}
		}
		$params['utm_campaign'] = $source;
		//medium
		$medium = null;
		if (isset($_COOKIE['Visitor_Medium__c'])) {
			$medium = $_COOKIE['Visitor_Medium__c'] ;
		}else{
			if ($submission->get('utm_medium')){
				$medium = $submission->get('utm_medium');
			}
		}
		$params['campaign_medium'] = $medium;
		//Aff ID
		if (isset($_COOKIE['Visitor_ID__c'])) {
			$params['gclid_google_click_identifier'] = $_COOKIE['Visitor_ID__c'];
		}else{
			if ($submission->get('transaction_id')){
				$params['Has_offer_transaction_id__c'] = $submission->get('transaction_id');
			}
		}
		//term
		$term = null;
		if (isset($_COOKIE['Visitor_Term__c'])) {
			$term = $_COOKIE['Visitor_Term__c'] ;
		}else{
			if ($submission->get('utm_term')){
				$term = $submission->get('utm_term');
			}
		}
		$params['campaign_term'] = $term;
		//content
		$content = null;
		if (isset($_COOKIE['Visitor_Content__c'])) {
			$content = $_COOKIE['Visitor_Content__c'] ;
		}else{
			if ($submission->get('utm_content')){
				$content = $submission->get('utm_content');
			}
		}
		$params['campaign_content'] = $content;
		//month & Year
		$month = $submission->get('time_in_business_month');
		$year = $submission->get('time_in_business_year');
		if ($month && $year) {
			$params['when_was_your_business_started'] = $month.'/01/'.$year;
		}
		$response = $this->api_formstack_push($form_id,$params);
		if (isset($response['id']) && isset($response['redirect_url'])){
			return $response['redirect_url'];
		}else{
			return false;
		}
	}
	private function api_forstack_contact_form($submission) {
		$form_id = '2446707';
		$params = array();
		$params['first_name'] = $submission->get('firstname');
		$params['last_name'] = $submission->get('lastname');
		$params['contact_phone'] = $submission->get('phone');
		$params['business_name'] = $submission->get('business_name');
		$params['email'] = $submission->get('email');
		//campaign
		$campaign = null;
		if (isset($_COOKIE['Visitor_Campaign__c'])) {
			$campaign = $_COOKIE['Visitor_Campaign__c'] ;
		} else {
			if ($submission->get('utm_campaign')){
				$campaign = $submission->get('utm_campaign');
			}
		}
		$params['campaign_name'] = $campaign;
		//source
		$source = null;
		if (isset($_COOKIE['Source__c'])) {
			$source = $_COOKIE['Source__c'] ;
		}else{
			if ($submission->get('utm_source')){
				$source = $submission->get('utm_source');
			}
		}
		$params['campaign_source'] = $source;
		//medium
		$medium = null;
		if (isset($_COOKIE['Visitor_Medium__c'])) {
			$medium = $_COOKIE['Visitor_Medium__c'] ;
		}else{
			if ($submission->get('utm_medium')){
				$medium = $submission->get('utm_medium');
			}
		}
		$params['campaign_medium'] = $medium;
		//Aff ID
		if (isset($_COOKIE['Visitor_ID__c'])) {
			$params['gclid_google_click_identifier'] = $_COOKIE['Visitor_ID__c'];
		}else{
			if ($submission->get('transaction_id')){
				$params['Has_offer_transaction_id__c'] = $submission->get('transaction_id');
			}
		}
		//term
		$term = null;
		if (isset($_COOKIE['Visitor_Term__c'])) {
			$term = $_COOKIE['Visitor_Term__c'] ;
		}else{
			if ($submission->get('utm_term')){
				$term = $submission->get('utm_term');
			}
		}
		$params['campaign_term'] = $term;
		//content
		$content = null;
		if (isset($_COOKIE['Visitor_Content__c'])) {
			$content = $_COOKIE['Visitor_Content__c'] ;
		}else{
			if ($submission->get('utm_content')){
				$content = $submission->get('utm_content');
			}
		}
		$params['campaign_content'] = $content;
		$response = $this->api_formstack_push($form_id,$params);
		if (isset($response['id'])){
			return $response['id'];
		}else{
			return false;
		}
	}
	private function api_formstack_push($form_id,$params){
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
		$result = curl_exec($ch);
		return $result = json_decode($result, true);
	}
	//OPF API
	public function EntrySaved(EntrySaved $event) {
		$context = $event->contextualData();
		if ($context['collection'] === 'careers'){
			$context['entry_id'] = $context['id'];
			$context['status_id'] = $context['status'];
			$context['office_id'] = $context['office'];
			$response = $this->api_career_save($context);
		}
		return $event;
	}
	public function EntryDeleted(EntryDeleted $event) {
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
			$params['company_phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['company_name'] = $submission->get('business_name');
			$params['company_has_banking'] = $submission->get('has_business_bank_account');
			$params['company_active_bankruptcy'] = $submission->get('active_bankruptcy');
			$params['company_revenue'] = $revenue;
			$params['source'] = $submission->get('source');
			//campaign
			$campaign = null;
			if (isset($_COOKIE['Visitor_Campaign__c'])) {
				$campaign = $_COOKIE['Visitor_Campaign__c'] ;
			} else {
				if ($submission->get('utm_campaign')){
					$campaign = $submission->get('utm_campaign');
				}
			}
			$params['utm_campaign'] = $campaign;
			//source
			$source = null;
			if (isset($_COOKIE['Source__c'])) {
				$source = $_COOKIE['Source__c'] ;
			}else{
				if ($submission->get('utm_source')){
					$source = $submission->get('utm_source');
				}
			}
			$params['utm_source'] = $source;
			//medium
			$medium = null;
			if (isset($_COOKIE['Visitor_Medium__c'])) {
				$medium = $_COOKIE['Visitor_Medium__c'] ;
			}else{
				if ($submission->get('utm_medium')){
					$medium = $submission->get('utm_medium');
				}
			}
			$params['utm_medium'] = $medium;
			//Aff ID
			$aff_id = null;
			if (isset($_COOKIE['Visitor_ID__c'])) {
				$aff_id = $_COOKIE['Visitor_ID__c'] ;
			}else{
				if ($submission->get('transaction_id')){
					$aff_id = $submission->get('transaction_id');
				}
			}
			$params['transaction_id'] = $aff_id;
			//term
			$term = null;
			if (isset($_COOKIE['Visitor_Term__c'])) {
				$term = $_COOKIE['Visitor_Term__c'] ;
			}else{
				if ($submission->get('utm_term')){
					$term = $submission->get('utm_term');
				}
			}
			$params['utm_term'] = $term;
			//content
			$content = null;
			if (isset($_COOKIE['Visitor_Content__c'])) {
				$content = $_COOKIE['Visitor_Content__c'] ;
			}else{
				if ($submission->get('utm_content')){
					$content = $submission->get('utm_content');
				}
			}
			$params['utm_content'] = $content;
			//month & Year
			$month = $submission->get('time_in_business_month');
			$year = $submission->get('time_in_business_year');
			if ($month && $year) {
				$params['company_started'] = $month.'/01/'.$year;
			}
			$api_response = $this->api_lead_created($params);
			$api_response = json_decode($api_response,true);
			if (isset($api_response['id'])){
				$submission->set('lead_id',$api_response['id']);
				$submission->save();
			}
		}
		if ($form_name === 'contact'){
			$params = array();
			$params['fname'] = $submission->get('firstname');
			$params['lname'] = $submission->get('lastname');
			$params['phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['company_name'] = $submission->get('business_name');
			$params['source'] = $submission->get('source');
			//campaign
			$campaign = null;
			if (isset($_COOKIE['Visitor_Campaign__c'])) {
				$campaign = $_COOKIE['Visitor_Campaign__c'] ;
			} else {
				if ($submission->get('utm_campaign')){
					$campaign = $submission->get('utm_campaign');
				}
			}
			$params['utm_campaign'] = $campaign;
			//source
			$source = null;
			if (isset($_COOKIE['Source__c'])) {
				$source = $_COOKIE['Source__c'] ;
			}else{
				if ($submission->get('utm_source')){
					$source = $submission->get('utm_source');
				}
			}
			$params['utm_source'] = $source;
			//medium
			$medium = null;
			if (isset($_COOKIE['Visitor_Medium__c'])) {
				$medium = $_COOKIE['Visitor_Medium__c'] ;
			}else{
				if ($submission->get('utm_medium')){
					$medium = $submission->get('utm_medium');
				}
			}
			$params['utm_medium'] = $medium;
			//Aff ID
			$aff_id = null;
			if (isset($_COOKIE['Visitor_ID__c'])) {
				$aff_id = $_COOKIE['Visitor_ID__c'] ;
			}else{
				if ($submission->get('transaction_id')){
					$aff_id = $submission->get('transaction_id');
				}
			}
			$params['transaction_id'] = $aff_id;
			//term
			$term = null;
			if (isset($_COOKIE['Visitor_Term__c'])) {
				$term = $_COOKIE['Visitor_Term__c'] ;
			}else{
				if ($submission->get('utm_term')){
					$term = $submission->get('utm_term');
				}
			}
			$params['utm_term'] = $term;
			//content
			$content = null;
			if (isset($_COOKIE['Visitor_Content__c'])) {
				$content = $_COOKIE['Visitor_Content__c'] ;
			}else{
				if ($submission->get('utm_content')){
					$content = $submission->get('utm_content');
				}
			}
			$params['utm_content'] = $content;
			//month & Year
			$api_response = $this->api_lead_created($params);
			$api_response = json_decode($api_response,true);
			if (isset($api_response['id'])){
				$submission->set('lead_id',$api_response['id']);
				$submission->save();
			}
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