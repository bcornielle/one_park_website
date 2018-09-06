<?php
$statamic = '../statamic';
$site_root = '/es/';
$rewrite_urls = true;
$control_panel = 'cp';
$locale = 'es';
$resources = '_resources';
define('STATAMIC_ROOT', __DIR__);
define('RELATIVE_APP', $statamic);
define('APP', realpath(STATAMIC_ROOT . '/' . rtrim($statamic, '/')));
$bootstrap = APP . '/bootstrap/start.php';
if (! is_file($bootstrap)) {
	if (function_exists('http_response_code')) {
		http_response_code(503);
	}

	$msg = "<style>body{font:normal 16px/2 arial, sans-serif;}code{font:bold 14px/2 consolas,monospace;
            background:#eee;padding:3px 5px;}</style>";
	$msg .= "Uh oh. We couldn't find your <code>statamic</code> folder.<br>
            Check that it's set correctly in <code>" . __FILE__ . "</code>";

	exit($msg);
}
require APP . '/bootstrap/autoload.php';
$app = require_once $bootstrap;
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');
$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);