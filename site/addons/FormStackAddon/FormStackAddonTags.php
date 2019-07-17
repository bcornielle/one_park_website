<?php
namespace Statamic\Addons\FormStackAddon;
use Statamic\Extend\Tags;
use Log;
class FormStackAddonTags extends Tags {
	private $cookie_name = 'krodox';
	public $forms_en = [
		[
			'id'=>'2925351',
			'name'=>'prequal_1',
		],
		[
			'id'=>'2924610',
			'name'=>'prequal_2',
		]
	];
	public $forms_es = [
		[
			'id'=>'2935093',
			'name'=>'prequal_es_1',
		],
		[
			'id'=>'2948923',
			'name'=>'prequal_es_2',
		]
	];
	private $oauth_token = '5a07bf17f343ddbfc5c3a6f6e005d6c0';
	public function qualification() {
		return array(
			'status'=>true,
			'url'=> null,
			'form'=> $this->forms_en[0]['name'],
		);
	}
	public function congrats() {
		$cookie_time = time() + 15;
		$form_id = $this->forms_en[1]['id'];
		if(isset($_REQUEST['how_much_are_your_estimated_gross_monthly_sales']) && !isset($_COOKIE[$this->cookie_name])){
			$params = array();
			foreach($_REQUEST as $key=>$value){
				if ($key == "how_much_are_your_estimated_gross_monthly_sales"){
					$value =  html_entity_decode($value);
					$params['original'] = $value;
					$parts = explode("|",$value);
					$params['revenue'] = trim($parts[0]);
					if ($params['revenue'] == 1) {
						$params['amount'] = 2500;
					}else{
						$params['amount'] = number_format($params['revenue']);
					}
					$value = $params['revenue'];
				}
				$params[$key] = $value;
			}
			setcookie($this->cookie_name,serialize($params),$cookie_time, "/");
			$response = [
				'status' => false,
				'url' => 'https://'.$_SERVER['SERVER_NAME'] . '/congrats',
				'form' => $this->forms_en[1]['name'],
			];
		}else{
			if(isset($_COOKIE[$this->cookie_name])) {
				$params = unserialize($_COOKIE[$this->cookie_name]);
				$get_api_url = 'https://www.formstack.com/api/v2/form/'.$form_id.'/field.json';
				$json_url = $get_api_url .'?oauth_token='.$this->oauth_token;
				if (isset($params['amount'])) {
					$json = file_get_contents($json_url);
					$data = json_decode($json, true);
					$restRequest = null;
					$idleRequest = null;
					$idleString  =  null;
					if (is_array($data)){
						foreach($data as $key=>$val){
							if($val['hidden'] == 1){
								if($val['name'] == 'company_address'){
									if (isset($params['company_address-address'])){
										$restRequest .= "&field".$val['id']."-address=".$params['company_address-address'];
										$idleString .= "&field_".$val['id']."[address]=".$params['company_address-address'];
									}
									if (isset($params['company_address-address2'])){
										$restRequest .= "&field".$val['id']."-address2=".$params['company_address-address2'];
										$idleString .= "&field_".$val['id']."[address2]=".$params['company_address-address2'];
									}
									if (isset($params['company_address-state'])){
										$restRequest .= "&field".$val['id']."-state=".$params['company_address-state'];
										$idleString .= "&field_".$val['id']."[state]=".$params['company_address-state'];
									}
									if (isset($params['company_address-city'])){
										$restRequest .= "&field".$val['id']."-city=".$params['company_address-city'];
										$idleString .= "&field_".$val['id']."[city]=".$params['company_address-city'];
									}
									if (isset($params['company_address-zip'])){
										$restRequest .= "&field".$val['id']."-zip=".$params['company_address-zip'];
										$idleString .= "&field_".$val['id']."[zip]=".$params['company_address-zip'];
									}
								}
								if(isset($params[$val['name']]) && $params[$val['name']]){
									$restRequest .= "&field".$val['id']."=".$params[$val['name']];
									$idleRequest .= "&field_".$val['id']."=".$params[$val['name']];
								}
							}
						}
						$job = (new FormStackJob($form_id,$this->oauth_token,$params['email'],$idleRequest . $idleString))->delay(360);
						dispatch($job);
					}
					$response = [
						'status'=> true,
						'first_name' => (isset($params['first_name'])) ? $params['first_name'] : null,
						'last_name' => (isset($params['last_name'])) ? $params['last_name'] : null,
						'email' => (isset($params['email'])) ? $params['email'] : null,
						'phone' => (isset($params['contact_phone'])) ? $params['contact_phone'] : null,
						'credit' => (isset($params['what_is_your_estimated_credit_score'])) ? $params['what_is_your_estimated_credit_score'] : null,
						'business' => [
							'name'=> (isset($params['business'])) ? $params['business'] : null,
							'started' => (isset($params['when_was_your_business_started'])) ? $params['when_was_your_business_started'] : null,
							'funding_needed' => (isset($params['how_much_funding_do_you_need'])) ? $params['how_much_funding_do_you_need'] : null,
							'revenue' => (isset($params['revenue'])) ? $params['revenue'] : null,
							'industry' => (isset($params['what_industry_are_you_in'])) ? $params['what_industry_are_you_in'] : null,
							'phone' => (isset($params['company_phone_number'])) ? $params['company_phone_number'] : null,
							'address'=> [
								'line1'=> (isset($params['company_address-address'])) ? $params['company_address-address'] : null,
								'city'=> (isset($params['company_address-city'])) ? $params['company_address-city'] : null,
								'state'=> (isset($params['company_address-state'])) ? $params['company_address-state'] : null,
								'zip'=> (isset($params['company_address-zip'])) ? $params['company_address-zip'] : null,
							]
						],
						'qualified' => (isset($params['amount'])) ? $params['amount'] : 2500,
						'data'=> $data,
						'rest_request' => $restRequest,
						'form' => $this->forms_en[1]['name'],
					];
				} else {
					$response = [
						'status' => false,
						'url' => 'https://'.$_SERVER['SERVER_NAME'].'/pre-qualification',
						'form' => $this->forms_en[1]['name'],
					];
				}
			}
			else{
				$response = [
					'status'=>false,
					'url'=> 'https://'.$_SERVER['SERVER_NAME'].'/pre-qualification',
					'form' => $this->forms_en[1]['name'],
				];
			}
		}
		return $response;
	}
	public function complete() {
		if (isset($_REQUEST['status']) && $_REQUEST['status'] == 'ok'){
			return array('status'=>true,'url'=> null);
		}else{
			return array(
				'status'=>false,
				'url' => 'https://'.$_SERVER['SERVER_NAME'] . '/congrats',
			);
		}
	}
	public function preaprob() {
		return array(
			'status'=>true,
			'url'=> null,
			'form'=> $this->forms_es[0]['name'],
		);
	}
	public function feliz() {
		$cookie_time = time() + 15;
		$form_id = $this->forms_es[1]['id'];
		if(isset($_REQUEST['a_cuánto_ascienden_sus_ventas_mensuales_brutas']) && !isset($_COOKIE[$this->cookie_name])){
			$params = array();
			foreach($_REQUEST as $key=>$value){
				if ($key == "a_cuánto_ascienden_sus_ventas_mensuales_brutas"){
					$value =  html_entity_decode($value);
					$params['original'] = $value;
					$parts = explode("|",$value);
					$params['revenue'] = trim($parts[0]);
					if ($params['revenue'] == 1) {
						$params['amount'] = 2500;
					}else{
						$params['amount'] = $params['revenue'];
					}
					$value = $params['revenue'];
				}
				$params[$key] = $value;
			}
			setcookie($this->cookie_name,serialize($params),$cookie_time, "/");
			$response = [
				'status' => false,
				'url' => 'https://'.$_SERVER['SERVER_NAME'] . '/es/feliz',
				'form' => $this->forms_es[1]['name'],
			];
		}else{
			if(isset($_COOKIE[$this->cookie_name])) {
				$params = unserialize($_COOKIE[$this->cookie_name]);
				$get_api_url = 'https://www.formstack.com/api/v2/form/'.$form_id.'/field.json';
				$json_url = $get_api_url .'?oauth_token='.$this->oauth_token;
				if (isset($params['amount'])) {
					$json = file_get_contents($json_url);
					$data = json_decode($json, true);
					$restRequest = null;
					$idleRequest = null;
					$idleString  =  null;
					foreach($data as $key=>$val){
						if($val['hidden'] == 1){
							if($val['name'] == 'company_address'){
								if (isset($params['company_address-address'])){
									$restRequest .= "&field".$val['id']."-address=".$params['company_address-address'];
									$idleString .= "&field_".$val['id']."[address]=".$params['company_address-address'];
								}
								if (isset($params['company_address-address2'])){
									$restRequest .= "&field".$val['id']."-address2=".$params['company_address-address2'];
									$idleString .= "&field_".$val['id']."[address2]=".$params['company_address-address2'];
								}
								if (isset($params['company_address-state'])){
									$restRequest .= "&field".$val['id']."-state=".$params['company_address-state'];
									$idleString .= "&field_".$val['id']."[state]=".$params['company_address-state'];
								}
								if (isset($params['company_address-city'])){
									$restRequest .= "&field".$val['id']."-city=".$params['company_address-city'];
									$idleString .= "&field_".$val['id']."[city]=".$params['company_address-city'];
								}
								if (isset($params['company_address-zip'])){
									$restRequest .= "&field".$val['id']."-zip=".$params['company_address-zip'];
									$idleString .= "&field_".$val['id']."[zip]=".$params['company_address-zip'];
								}
							}
							if(isset($params[$val['name']]) && $params[$val['name']]){
								$restRequest .= "&field".$val['id']."=".$params[$val['name']];
								$idleRequest .= "&field_".$val['id']."=".$params[$val['name']];
							}
						}
					}
					$job = (new FormStackJob($form_id,$this->oauth_token,$params['correo_electrónico'],$idleRequest . $idleString))->delay(360);
					dispatch($job);
					$response = [
						'status'=> true,
						'first_name' => (isset($params['primer_nombre'])) ? $params['primer_nombre'] : null,
						'last_name' => (isset($params['apellido'])) ? $params['apellido'] : null,
						'email' => (isset($params['correo_electrónico'])) ? $params['correo_electrónico'] : null,
						'phone' => (isset($params['teléfono'])) ? $params['teléfono'] : null,
						'credit' => (isset($params['what_is_your_estimated_credit_score'])) ? $params['what_is_your_estimated_credit_score'] : null,
						'business' => [
							'name'=> (isset($params['nombre_de_su_negocio'])) ? $params['nombre_de_su_negocio'] : null,
						],
						'qualified' => (isset($params['amount'])) ? $params['amount'] : 2500,
						'data'=> $data,
						'rest_request' => $restRequest,
						'form' => $this->forms_es[1]['name'],
					];
				} else {
					$response = [
						'status' => false,
						'url' => 'https://'.$_SERVER['SERVER_NAME'].'/es/preaprob',
						'form' => $this->forms_es[1]['name'],
					];
				}
			}
			else{
				$response = [
					'status'=>false,
					'url'=> 'https://'.$_SERVER['SERVER_NAME'].'/es/preaprob',
					'form' => $this->forms_es[1]['name'],
				];
			}
		}
		return $response;
	}
	public function gracias() {
		if (isset($_REQUEST['status']) && $_REQUEST['status'] == 'ok'){
			return array('status'=>true,'url'=> null);
		}else{
			return array(
				'status'=>false,
				'url' => 'https://'.$_SERVER['SERVER_NAME'] . '/es/feliz',
			);
		}
	}
	public function router() {
		$next_step = 1;
		if (isset($_REQUEST['clear'])){
			unset($_COOKIE[$this->cookie_name]);
			setcookie($this->cookie_name, '', time() - 3600, '/');
		}
		if (isset($_REQUEST['api_id'])){
			$params = [];
			foreach ($_REQUEST as $key=>$value ) {
				$params[$key] = $value;
				if ($key == 'step'){
					$next_step = intval($value) + 1;
				}
			}
			$cookie_time = time() + (60*60*24*365);
			setcookie($this->cookie_name,serialize($params),$cookie_time, "/");
			$response = $params;
		}else{
			if(isset($_COOKIE[$this->cookie_name])){
				$cookie = unserialize($_COOKIE[$this->cookie_name]);
				$next_step = intval($cookie['step']) + 1;
				$response = $cookie;
			}
		}
		$endpoint = null;
		switch ($next_step) {
			case 2:
				$endpoint = "congrats-2";
				break;
			case 3:
				$endpoint = "congrats-3";
				break;
			case 4:
				$endpoint = "congrats-4";
				break;
			case 5:
				$endpoint = "thanks-2";
				break;
			default:
				$endpoint = "pre-qualification-2";
				break;
		}
		$response['redirect_to'] = 'https://'.$_SERVER['SERVER_NAME'].'/'.$endpoint;
		return $response;
	}
	public function steps() {
		if(isset($_COOKIE[$this->cookie_name])) {
			$cookie = unserialize($_COOKIE[$this->cookie_name]);
			if (intval($cookie['step']) === 4){
				unset($_COOKIE[$this->cookie_name]);
				setcookie($this->cookie_name, '', time() - 3600, '/');
			}
			$response = $cookie;
		}
		$response['redirect_to'] = 'https://'.$_SERVER['SERVER_NAME'].'/router';
		return $response;
	}
	public function ip(){
		$ip = null;
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else {
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}