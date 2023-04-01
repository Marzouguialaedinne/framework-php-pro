<?php
declare(strict_types=1);

use App\framework\http\Request;
define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

// create Request

$request = Request::createFromGlobals();

// create kernel  and some login dispatcher route


// return simple response

echo "Hello word";
