<?php
namespace Statamic\Addons\APIAddon;
use Illuminate\Support\Facades\Log;
use Statamic\Events\Data\EntrySaved;
use Statamic\Extend\Listener;
class APIAddonListener extends Listener {
    public $events = [
	    EntrySaved::class => 'saved'
    ];
	public function saved(EntrySaved $event) {
		$context = $event->contextualData();
		if ($context['collection'] === 'press'){
			Log::info(print_r($context['id'],true));
		}
	}
}