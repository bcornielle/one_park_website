<?php
namespace Statamic\Addons\FormSubmission;
use Statamic\Extend\Tags;
class FormSubmissionTags extends Tags {
	public function index(){
		if (session('form_stack_redirect')) {
			$e = new \Statamic\Exceptions\RedirectException;
			$e->setUrl(session('form_stack_redirect'));
			throw $e;
		}
		if (session('redirect')) {
			$e = new \Statamic\Exceptions\RedirectException;
			$e->setUrl(session('redirect'));
			throw $e;
		}
	}
}