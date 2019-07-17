<?php
namespace Statamic\Addons\FormStackAddon;
use Statamic\Events\Data\EntryDeleted;
use Statamic\Events\Data\EntrySaved;
use Statamic\Extend\Listener;
use Statamic\Forms\Submission;
use Log;
class FormStackAddonListener extends Listener {
	public $events = [
		EntrySaved::class => 'EntrySaved',
		EntryDeleted::class => 'EntryDeleted',
		'Form.submission.creating' => 'submissionCreating',
		'Form.submission.created' => 'submissionCreated',
	];
	public function EntrySaved(EntrySaved $event) {
		$context = $event->contextualData();
		if ($context['collection'] === 'careers'){
			$context['entry_id'] = $context['id'];
			$context['status_id'] = $context['status'];
			$context['office_id'] = $context['office'];
			$url = env('API_URL') . env('API_VERSION') . '/careers?api_token='.env('API_TOKEN');
			$this->curl_api($url,"PUT",json_encode($context));
		}
		return $event;
	}
	public function EntryDeleted(EntryDeleted $event) {
		$context = $event->contextualData();
		$url = env('API_URL') . env('API_VERSION') . '/careers/' . $context['id'] . '?api_token='.env('API_TOKEN');
		$this->curl_api($url,"DELETE",$context['id']);
		return $event;
	}
	public function submissionCreating(Submission $submission) {
		$errors = array();
		$form_name = $submission->formset()->name();
		if ($form_name === 'lead'){
			if ($submission->get('fullname')){
				$name = $submission->get('fullname');
				$names = explode(' ', $name);
				$fname = (isset($names[0])) ? $names[0] : null;
				$lname = (isset($names[1])) ? $names[1] : 'lastname';
				$submission->set('fname',$fname);
				$submission->set('lname',$lname);
			}
			if ($submission->get('company_started_month') && $submission->get('company_started_year')) {
				$submission->set('company_started',$submission->get('company_started_month').'/01/'.$submission->get('company_started_year'));
			}
			if ($submission->get('company_revenue') == 1) {
				$submission->set('company_revenue',2500);
			}
			if ($submission->get('submission_id')){
				$previous = $submission->form->submission($submission->get('submission_id'));
				if ($submission->get('fullname')){
					$previous->set('fullname',$submission->get('fullname'));
				}
				if ($submission->get('fname')){
					$previous->set('fname',$submission->get('fname'));
				}
				if ($submission->get('lname')){
					$previous->set('lname',$submission->get('lname'));
				}
				if ($submission->get('phone')){
					$previous->set('phone',$submission->get('phone'));
				}
				if ($submission->get('email')){
					$previous->set('email',$submission->get('email'));
				}
				if ($submission->get('rent_or_own')){
					$previous->set('rent_or_own',$submission->get('rent_or_own'));
				}
				if ($submission->get('utm_source')){
					$previous->set('utm_source',$submission->get('utm_source'));
				}
				if ($submission->get('utm_campaign')){
					$previous->set('utm_campaign',$submission->get('utm_campaign'));
				}
				if ($submission->get('utm_medium')){
					$previous->set('utm_medium',$submission->get('utm_medium'));
				}
				if ($submission->get('utm_term')){
					$previous->set('utm_term',$submission->get('utm_term'));
				}
				if ($submission->get('utm_content')){
					$previous->set('utm_content',$submission->get('utm_content'));
				}
				if ($submission->get('transaction_id')){
					$previous->set('transaction_id',$submission->get('transaction_id'));
				}
				if ($submission->get('api_id')){
					$previous->set('api_id',$submission->get('api_id'));
				}
				if ($submission->get('step')){
					$previous->set('step', intval($submission->get('step')));
				}
				if ($submission->get('ip')){
					$previous->set('ip', $submission->get('ip'));
				}
				if ($submission->get('language')){
					$previous->set('language', $submission->get('language'));
				}
				if ($submission->get('company_name')){
					$previous->set('company_name',$submission->get('company_name'));
				}
				if ($submission->get('company_phone')){
					$previous->set('company_phone',$submission->get('company_phone'));
				}
				if ($submission->get('company_revenue')){
					$previous->set('company_revenue',$submission->get('company_revenue'));
				}
				if ($submission->get('company_has_banking')){
					$previous->set('company_has_banking',$submission->get('company_has_banking'));
				}
				if ($submission->get('company_active_bankruptcy')){
					$previous->set('company_active_bankruptcy',$submission->get('company_active_bankruptcy'));
				}
				if ($submission->get('company_started')){
					$previous->set('company_started',$submission->get('company_started'));
				}
				if ($submission->get('company_started_month')){
					$previous->set('company_started_month',$submission->get('company_started_month'));
				}
				if ($submission->get('company_started_year')){
					$previous->set('company_started_year',$submission->get('company_started_year'));
				}
				if ($submission->get('company_name_legal')){
					$previous->set('company_name_legal',$submission->get('company_name_legal'));
				}
				if ($submission->get('company_name_fake')){
					$previous->set('company_name_fake',$submission->get('company_name_fake'));
				}
				if ($submission->get('company_state')){
					$previous->set('company_state',$submission->get('company_state'));
				}
				if ($submission->get('company_tax_id')){
				$previous->set('company_tax_id',$submission->get('company_tax_id'));
				}
				if ($submission->get('company_employees')){
					$previous->set('company_employees',$submission->get('company_employees'));
				}
				if ($submission->get('company_structure')){
					$previous->set('company_structure',$submission->get('company_structure'));
				}
				if ($submission->get('company_started_with_you')){
					$previous->set('company_started_with_you',$submission->get('company_started_with_you'));
				}
				if ($submission->get('company_industry')){
					$previous->set('company_industry',$submission->get('company_industry'));
				}
				if ($submission->get('company_type')){
					$previous->set('company_type',$submission->get('company_type'));
				}
				if ($submission->get('company_has_loan')){
					$previous->set('company_has_loan',$submission->get('company_has_loan'));
				}
				if ($submission->get('company_work_with_credit_card')){
					$previous->set('company_work_with_credit_card',$submission->get('company_work_with_credit_card'));
				}
				if ($submission->get('company_cc_processor')){
					$previous->set('company_cc_processor',$submission->get('company_cc_processor'));
				}
				if ($submission->get('company_rent_or_own')){
					$previous->set('company_rent_or_own',$submission->get('company_rent_or_own'));
				}
				if ($submission->get('company_mortgage')){
					$previous->set('company_mortgage',$submission->get('company_mortgage'));
				}
				if ($submission->get('company_years_in_business')){
					$previous->set('company_years_in_business',$submission->get('company_years_in_business'));
				}
				if ($submission->get('company_land_lord_name')){
					$previous->set('company_land_lord_name',$submission->get('company_land_lord_name'));
				}
				if ($submission->get('company_land_lord_phone')){
					$previous->set('company_land_lord_phone',$submission->get('company_land_lord_phone'));
				}
				if ($submission->get('company_land_lord_expiration')){
					$previous->set('company_land_lord_expiration',$submission->get('company_land_lord_expiration'));
				}
				if ($submission->get('company_address_line1')){
					$previous->set('company_address_line1',$submission->get('company_address_line1'));
				}
				if ($submission->get('company_address_line2')){
					$previous->set('company_address_line2',$submission->get('company_address_line2'));
				}
				if ($submission->get('company_address_city')){
					$previous->set('company_address_city',$submission->get('company_address_city'));
				}
				if ($submission->get('company_address_state')){
					$previous->set('company_address_state',$submission->get('company_address_state'));
				}
				if ($submission->get('company_address_zip')){
					$previous->set('company_address_zip',$submission->get('company_address_zip'));
				}
				if ($submission->get('company_owners_total')){
					$previous->set('company_owners_total',$submission->get('company_owners_total'));
				}
				if ($submission->get('company_owner1_fname')){
					$previous->set('company_owner1_fname',$submission->get('company_owner1_fname'));
				}
				if ($submission->get('company_owner1_lname')){
					$previous->set('company_owner1_lname',$submission->get('company_owner1_lname'));
				}
				if ($submission->get('company_owner1_phone')){
					$previous->set('company_owner1_phone',$submission->get('company_owner1_phone'));
				}
				if ($submission->get('company_owner1_email')){
					$previous->set('company_owner1_email',$submission->get('company_owner1_email'));
				}
				if ($submission->get('company_owner1_dob')){
					$previous->set('company_owner1_dob',$submission->get('company_owner1_dob'));
				}
				if ($submission->get('company_owner1_ssn')){
					$previous->set('company_owner1_ssn',$submission->get('company_owner1_ssn'));
				}
				if ($submission->get('company_owner1_title')){
					$previous->set('company_owner1_title',$submission->get('company_owner1_title'));
				}
				if ($submission->get('company_owner1_address_line1')){
					$previous->set('company_owner1_address_line1',$submission->get('company_owner1_address_line1'));
				}
				if ($submission->get('company_owner1_address_city')){
					$previous->set('company_owner1_address_city',$submission->get('company_owner1_address_city'));
				}
				if ($submission->get('company_owner1_address_state')){
					$previous->set('company_owner1_address_state',$submission->get('company_owner1_address_state'));
				}
				if ($submission->get('company_owner1_address_zip')){
					$previous->set('company_owner1_address_zip',$submission->get('company_owner1_address_zip'));
				}
				if ($submission->get('company_owner2_fname')){
					$previous->set('company_owner2_fname',$submission->get('company_owner2_fname'));
				}
				if ($submission->get('company_owner2_lname')){
					$previous->set('company_owner2_lname',$submission->get('company_owner2_lname'));
				}
				if ($submission->get('company_owner2_phone')){
					$previous->set('company_owner2_phone',$submission->get('company_owner2_phone'));
				}
				if ($submission->get('company_owner2_email')){
					$previous->set('company_owner2_email',$submission->get('company_owner2_email'));
				}
				if ($submission->get('company_owner2_dob')){
					$previous->set('company_owner2_dob',$submission->get('company_owner2_dob'));
				}
				if ($submission->get('company_owner2_ssn')){
					$previous->set('company_owner2_ssn',$submission->get('company_owner2_ssn'));
				}
				if ($submission->get('company_owner2_title')){
					$previous->set('company_owner2_title',$submission->get('company_owner2_title'));
				}
				if ($submission->get('company_owner2_address_line1')){
					$previous->set('company_owner2_address_line1',$submission->get('company_owner2_address_line1'));
				}
				if ($submission->get('company_owner2_address_city')){
					$previous->set('company_owner2_address_city',$submission->get('company_owner2_address_city'));
				}
				if ($submission->get('company_owner2_address_state')){
					$previous->set('company_owner2_address_state',$submission->get('company_owner2_address_state'));
				}
				if ($submission->get('company_owner2_address_zip')){
					$previous->set('company_owner2_address_zip',$submission->get('company_owner2_address_zip'));
				}
				$previous->set('submission_id',$submission->get('submission_id'));
				$submission = $previous;
			}
		}
		if ($form_name === 'landing-page'){
			$ip = $submission->get('ip');
			$ips = explode('.',$ip);
			if (count($ips)>2){
				$mask = $ips[0] . $ips[1] . $ips[2];
				if ($mask == '193.37.252' || $mask == '76.217.95'){
					return array('errors' => array('Submission Blocked'));
				}
			}
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
	public function submissionCreated(Submission $submission) {
		$form_name = $submission->formset()->name();
		if ($form_name === 'lead'){
			$params = array();
			if ($submission->id()){
				$submission->set('submission_id',$submission->id());
				$submission->save();
			}
			if ($submission->get('fullname')){
				$params['fullname'] = $submission->get('fullname');
			}
			if ($submission->get('fname')){
				$params['fname'] = $submission->get('fname');
			}
			if ($submission->get('lname')){
				$params['lname'] = $submission->get('lname');
			}
			if ($submission->get('phone')){
				$params['phone'] = $submission->get('phone');
			}
			if ($submission->get('email')){
				$params['email'] = $submission->get('email');
			}
			if ($submission->get('rent_or_own')){
				$params['rent_or_own'] = $submission->get('rent_or_own');
			}
			if ($submission->get('company_name')){
				$params['company_name'] = $submission->get('company_name');
			}
			if ($submission->get('company_phone')){
				$params['company_phone'] = $submission->get('company_phone');
			}
			if ($submission->get('company_has_banking')){
				$params['company_has_banking'] = $submission->get('company_has_banking');
			}
			if ($submission->get('company_active_bankruptcy')){
				$params['company_active_bankruptcy'] = $submission->get('company_active_bankruptcy');

			}
			if ($submission->get('company_started_month')){
				$params['company_started_month'] = $submission->get('company_started_month');

			}
			if ($submission->get('company_started_year')){
				$params['company_started_year'] = $submission->get('company_started_year');
			}
			if ($submission->get('company_started')){
				$params['company_started'] = $submission->get('company_started');
			}
			if ($submission->get('company_revenue')){
				$params['company_revenue'] = $submission->get('company_revenue');
			}
			if ($submission->get('company_name_legal')){
				$params['company_name_legal'] = $submission->get('company_name_legal');
			}
			if ($submission->get('company_name_fake')){
				$params['company_name_fake'] = $submission->get('company_name_fake');
			}
			if ($submission->get('company_state')){
				$params['company_state'] = $submission->get('company_state');
			}
			if ($submission->get('company_tax_id')){
				$params['company_tax_id'] = $submission->get('company_tax_id');
			}
			if ($submission->get('company_employees')){
				$params['company_employees'] = $submission->get('company_employees');
			}
			if ($submission->get('company_structure')){
				$params['company_structure'] = $submission->get('company_structure');
			}
			if ($submission->get('company_started_with_you')){
				$params['company_started_with_you'] = $submission->get('company_started_with_you');
			}
			if ($submission->get('company_industry')){
				$params['company_industry'] = $submission->get('company_industry');
			}
			if ($submission->get('company_type')){
				$params['company_type'] = $submission->get('company_type');
			}
			if ($submission->get('company_has_loan')){
				$params['company_has_loan'] = $submission->get('company_has_loan');
			}
			if ($submission->get('company_work_with_credit_card')){
				$params['company_work_with_credit_card'] = $submission->get('company_work_with_credit_card');
			}
			if ($submission->get('company_cc_processor')){
				$params['company_cc_processor'] = $submission->get('company_cc_processor');
			}
			if ($submission->get('company_rent_or_own')){
				$params['company_rent_or_own'] = $submission->get('company_rent_or_own');
			}
			if ($submission->get('company_mortgage')){
				$params['company_mortgage'] = $submission->get('company_mortgage');
			}
			if ($submission->get('company_years_in_business')){
				$params['company_years_in_business'] = $submission->get('company_years_in_business');
			}
			if ($submission->get('company_land_lord_name')){
				$params['company_land_lord_name'] = $submission->get('company_land_lord_name');
			}
			if ($submission->get('company_land_lord_phone')){
				$params['company_land_lord_phone'] = $submission->get('company_land_lord_phone');
			}
			if ($submission->get('company_land_lord_expiration')){
				$params['company_land_lord_expiration'] = $submission->get('company_land_lord_expiration');
			}
			if ($submission->get('company_address_line1')){
				$params['company_address_line1'] = $submission->get('company_address_line1');
			}
			if ($submission->get('company_address_line2')){
				$params['company_address_line2'] = $submission->get('company_address_line2');
			}
			if ($submission->get('company_address_city')){
				$params['company_address_city'] = $submission->get('company_address_city');
			}
			if ($submission->get('company_address_state')){
				$params['company_address_state'] = $submission->get('company_address_state');
			}
			if ($submission->get('company_address_zip')){
				$params['company_address_zip'] = $submission->get('company_address_zip');
			}
			if ($submission->get('company_owners_total')){
				$params['company_owners_total'] = $submission->get('company_owners_total');
			}
			if ($submission->get('company_owner1_fname')){
				$params['company_owner1_fname'] = $submission->get('company_owner1_fname');
			}
			if ($submission->get('company_owner1_lname')){
				$params['company_owner1_lname'] = $submission->get('company_owner1_lname');
			}
			if ($submission->get('company_owner1_phone')){
				$params['company_owner1_phone'] = $submission->get('company_owner1_phone');
			}
			if ($submission->get('company_owner1_email')){
				$params['company_owner1_email'] = $submission->get('company_owner1_email');
			}
			if ($submission->get('company_owner1_dob')){
				$params['company_owner1_dob'] = $submission->get('company_owner1_dob');
			}
			if ($submission->get('company_owner1_ssn')){
				$params['company_owner1_ssn'] = $submission->get('company_owner1_ssn');
			}
			if ($submission->get('company_owner1_title')){
				$params['company_owner1_title'] = $submission->get('company_owner1_title');
			}
			if ($submission->get('company_owner1_address_line1')){
				$params['company_owner1_address_line1'] = $submission->get('company_owner1_address_line1');
			}
			if ($submission->get('company_owner1_address_city')){
				$params['company_owner1_address_city'] = $submission->get('company_owner1_address_city');
			}
			if ($submission->get('company_owner1_address_state')){
				$params['company_owner1_address_state'] = $submission->get('company_owner1_address_state');
			}
			if ($submission->get('company_owner1_address_zip')){
				$params['company_owner1_address_zip'] = $submission->get('company_owner1_address_zip');
			}
			if ($submission->get('company_owner2_fname')){
				$params['company_owner2_fname'] = $submission->get('company_owner2_fname');
			}
			if ($submission->get('company_owner2_lname')){
				$params['company_owner2_lname'] = $submission->get('company_owner2_lname');
			}
			if ($submission->get('company_owner2_phone')){
				$params['company_owner2_phone'] = $submission->get('company_owner2_phone');
			}
			if ($submission->get('company_owner2_email')){
				$params['company_owner2_email'] = $submission->get('company_owner2_email');
			}
			if ($submission->get('company_owner2_dob')){
				$params['company_owner2_dob'] = $submission->get('company_owner2_dob');
			}
			if ($submission->get('company_owner2_ssn')){
				$params['company_owner2_ssn'] = $submission->get('company_owner2_ssn');
			}
			if ($submission->get('company_owner2_title')){
				$params['company_owner2_title'] = $submission->get('company_owner2_title');
			}
			if ($submission->get('company_owner2_address_line1')){
				$params['company_owner2_address_line1'] = $submission->get('company_owner2_address_line1');
			}
			if ($submission->get('company_owner2_address_city')){
				$params['company_owner2_address_city'] = $submission->get('company_owner2_address_city');
			}
			if ($submission->get('company_owner2_address_state')){
				$params['company_owner2_address_state'] = $submission->get('company_owner2_address_state');
			}
			if ($submission->get('company_owner2_address_zip')){
				$params['company_owner2_address_zip'] = $submission->get('company_owner2_address_zip');
			}
			if ($submission->get('submission_id')){
				$params['submission_id'] = $submission->get('submission_id');
			}
			if ($submission->get('step')){
				$params['step'] = $submission->get('step');
			}
			if ($submission->get('source')){
				$params['source'] = $submission->get('source');
				$campaign = null;
				if (isset($_COOKIE['Visitor_Campaign__c'])) {
					$campaign = $_COOKIE['Visitor_Campaign__c'] ;
				} else {
					if ($submission->get('utm_campaign')){
						$campaign = $submission->get('utm_campaign');
					}
				}
				$params['utm_campaign'] = $campaign;
			}
			if ($submission->get('ip')){
				$params['ip'] = $submission->get('ip');
			}
			if ($submission->get('language')){
				$params['language'] = $submission->get('language');
			}
			$source = null;
			if (isset($_COOKIE['Source__c'])) {
				$source = $_COOKIE['Source__c'] ;
			}else{
				if ($submission->get('utm_source')){
					$source = $submission->get('utm_source');
				}
			}
			$params['utm_source'] = $source;
			$medium = null;
			if (isset($_COOKIE['Visitor_Medium__c'])) {
				$medium = $_COOKIE['Visitor_Medium__c'] ;
			}else{
				if ($submission->get('utm_medium')){
					$medium = $submission->get('utm_medium');
				}
			}
			$params['utm_medium'] = $medium;
			$term = null;
			if (isset($_COOKIE['Visitor_Term__c'])) {
				$term = $_COOKIE['Visitor_Term__c'] ;
			}else{
				if ($submission->get('utm_term')){
					$term = $submission->get('utm_term');
				}
			}
			$params['utm_term'] = $term;
			$content = null;
			if (isset($_COOKIE['Visitor_Content__c'])) {
				$content = $_COOKIE['Visitor_Content__c'] ;
			}else{
				if ($submission->get('utm_content')){
					$content = $submission->get('utm_content');
				}
			}
			$params['utm_content'] = $content;
			$aff_id = null;
			if (isset($_COOKIE['Visitor_ID__c'])) {
				$aff_id = $_COOKIE['Visitor_ID__c'] ;
			}else{
				if ($submission->get('transaction_id')){
					$aff_id = $submission->get('transaction_id');
				}
			}
			$params['transaction_id'] = $aff_id;
			$api_response = null;
			if (!$submission->get('api_id')){
				$url = env('API_URL') . env('API_VERSION') . '/leads?api_token='.env('API_TOKEN');
				$api_response = $this->curl_api($url,"PUT",json_encode($params));
			}else{
				$params['lead_id'] = $submission->get('api_id');
				$url = env('API_URL') . env('API_VERSION') . '/leads/'.$submission->get('api_id').'?api_token='.env('API_TOKEN');
				$api_response = $this->curl_api($url,"POST",json_encode($params));
			}
			$api_response = json_decode($api_response,true);
			if (isset($api_response['id'])){
				$submission->set('api_id',$api_response['id']);
				$submission->save();
			}
			$query_string = http_build_query($params);
			$url = '/router?api_id='.$api_response['id'].'&'.$query_string;
			session()->flash('redirect',$url);
		}
		if ($form_name === 'landing-page'){
			$params = array();
			$name = $submission->get('name');
			$names = explode(' ', $name);
			$params['fname'] = (isset($names[0])) ? $names[0] : null;
			$params['lname'] = (isset($names[1])) ? $names[1] : 'lastname';
			$params['phone'] = $submission->get('phone');
			$params['company_phone'] = $submission->get('phone');
			$params['email'] = $submission->get('email');
			$params['company_name'] = $submission->get('business_name');
			$params['company_has_banking'] = $submission->get('has_business_bank_account');
			$params['company_active_bankruptcy'] = $submission->get('active_bankruptcy');
			$revenue = $submission->get('monthly_revenue');
			if ($revenue == 1) $revenue = 2500;
			$params['company_revenue'] = $revenue;
			$params['ip'] = $submission->get('ip');
			//tracking
			$params['source'] = $submission->get('source');
			$campaign = null;
			if (isset($_COOKIE['Visitor_Campaign__c'])) {
				$campaign = $_COOKIE['Visitor_Campaign__c'] ;
			} else {
				if ($submission->get('utm_campaign')){
					$campaign = $submission->get('utm_campaign');
				}
			}
			$params['utm_campaign'] = $campaign;
			$source = null;
			if (isset($_COOKIE['Source__c'])) {
				$source = $_COOKIE['Source__c'] ;
			}else{
				if ($submission->get('utm_source')){
					$source = $submission->get('utm_source');
				}
			}
			$params['utm_source'] = $source;
			$medium = null;
			if (isset($_COOKIE['Visitor_Medium__c'])) {
				$medium = $_COOKIE['Visitor_Medium__c'] ;
			}else{
				if ($submission->get('utm_medium')){
					$medium = $submission->get('utm_medium');
				}
			}
			$params['utm_medium'] = $medium;
			$term = null;
			if (isset($_COOKIE['Visitor_Term__c'])) {
				$term = $_COOKIE['Visitor_Term__c'] ;
			}else{
				if ($submission->get('utm_term')){
					$term = $submission->get('utm_term');
				}
			}
			$params['utm_term'] = $term;
			$content = null;
			if (isset($_COOKIE['Visitor_Content__c'])) {
				$content = $_COOKIE['Visitor_Content__c'] ;
			}else{
				if ($submission->get('utm_content')){
					$content = $submission->get('utm_content');
				}
			}
			$params['utm_content'] = $content;
			$aff_id = null;
			if (isset($_COOKIE['Visitor_ID__c'])) {
				$aff_id = $_COOKIE['Visitor_ID__c'] ;
			}else{
				if ($submission->get('transaction_id')){
					$aff_id = $submission->get('transaction_id');
				}
			}
			$params['transaction_id'] = $aff_id;
			//month & Year
			$month = $submission->get('time_in_business_month');
			$year = $submission->get('time_in_business_year');
			if ($month && $year) {
				$params['company_started'] = $month.'/01/'.$year;
			}
			//push to api
			$url = env('API_URL') . env('API_VERSION') . '/leads?api_token='.env('API_TOKEN');
			$api_response = $this->curl_api($url,"PUT",json_encode($params));
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
			$params['ip'] = $submission->get('ip');
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
			//aff_id
			$aff_id = null;
			if (isset($_COOKIE['Visitor_ID__c'])) {
				$aff_id = $_COOKIE['Visitor_ID__c'] ;
			}else{
				if ($submission->get('transaction_id')){
					$aff_id = $submission->get('transaction_id');
				}
			}
			$params['transaction_id'] = $aff_id;
			//push to api
			$url = env('API_URL') . env('API_VERSION') . '/leads?api_token='.env('API_TOKEN');
			$api_response = $this->curl_api($url,"PUT",json_encode($params));
			$api_response = json_decode($api_response,true);
			if (isset($api_response['id'])){
				$submission->set('lead_id',$api_response['id']);
				$submission->save();
			}
		}
		if ($form_name === 'careers'){
			$url = env('API_URL') . env('API_VERSION') . '/submissions?api_token='.env('API_TOKEN');
			$this->curl_api($url,"PUT",json_encode($submission->data()));
		}
		return $submission;
	}
	private function curl_api($url,$method,$post_fields){
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
		//aff_id
		$aff_id = null;
		if (isset($_COOKIE['Visitor_ID__c'])) {
			$aff_id = $_COOKIE['Visitor_ID__c'];
		}else{
			if ($submission->get('transaction_id')){
				$aff_id = $submission->get('transaction_id');
			}
		}
		$params['gclid_google_click_identifier'] = $aff_id;
		//month & Year
		$month = $submission->get('time_in_business_month');
		$year = $submission->get('time_in_business_year');
		if ($month && $year) {
			$params['when_was_your_business_started'] = $month.'/01/'.$year;
		}
		//push to formstack
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
		//aff_id
		$aff_id = null;
		if (isset($_COOKIE['Visitor_ID__c'])) {
			$aff_id = $_COOKIE['Visitor_ID__c'];
		}else{
			if ($submission->get('transaction_id')){
				$aff_id = $submission->get('transaction_id');
			}
		}
		$params['gclid_google_click_identifier'] = $aff_id;
		//push to formstack
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
		$result = null;
		if (!$this->api_formstack_if_exists($form_id,$oauth_token,$params['email'])) {
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
		}
		return json_decode($result,true);
	}
	private function api_formstack_if_exists($form_id,$oauth_token,$email){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.formstack.com/api/v2/form/".$form_id."/submission.json?oauth_token=".$oauth_token);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, '&page=1&per_page=50&sort=DESC&data=false');
		$result = curl_exec($ch);
		$result = json_decode($result, true);
		if (isset($result['submissions'])){
			foreach ($result['submissions'] as $index=>$submission ) {
				foreach ($submission['data'] as $key=>$field ) {
					if ($key == "59894897" || $key == "44903891") {
						if ($field['value'] == trim($email)){
							return true;
						}
					}
				}
			}
		}
		return false;
	}
}