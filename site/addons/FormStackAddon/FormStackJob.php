<?php
namespace Statamic\Addons\FormStackAddon;
use Statamic\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
class FormStackJob extends Job implements SelfHandling, ShouldQueue {
	use InteractsWithQueue;
	protected $form_id;
	protected $auth_token;
	protected $email;
	protected $data;
	public function __construct($form_id,$auth_token,$email,$data) {
		$this->form_id = $form_id;
		$this->auth_token = $auth_token;
		$this->email = $email;
		$this->data = $data;
	}
	public function handle() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.formstack.com/api/v2/form/".$this->form_id."/submission.json?oauth_token=".$this->auth_token);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, '&page=1&per_page=50&sort=DESC&data=false');
		$result = curl_exec($ch);
		$result = json_decode($result, true);
		$found = false;
		if (isset($result['submissions'])){
			foreach ($result['submissions'] as $index=>$submission ) {
				foreach ($submission['data'] as $key=>$field ) {
					if ($key == "59876046" || $key == "60594128") {
						if ($field['value'] == trim($this->email)){
							$found = true;
							break;
						}
					}
				}
			}
		}
		if (!$found) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://www.formstack.com/api/v2/form/".$this->form_id."/submission.json?oauth_token=".$this->auth_token);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
			$result = curl_exec($ch);
		}
	}
}