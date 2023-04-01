<?php
declare(strict_types=1);

use App\framework\http\Request;
use \App\framework\http\Kernel;

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

$request = Request::createFromGlobals();

// create kernel and some login dispatcher route
$kernel = new Kernel();

$response = $kernel->handle($request);

return $response->send();

