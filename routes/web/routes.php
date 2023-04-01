<?php


return [
	['GET', '/', [\App\controller\HomeController::class, 'index']],
	['GET', '/post/{id:\d+}', [\App\controller\ProductController::class, 'show']]
];