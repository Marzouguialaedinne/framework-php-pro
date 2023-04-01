<?php
declare(strict_types=1);

use App\framework\http\Request;
use App\framework\http\Response;

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

$request = Request::createFromGlobals();

// create kernel  and some login dispatcher route
$content = "hello Yassine";


// return simple response

$response = new Response(content: $content, status: 200, headers: []);

return $response->send();

