<?php

namespace App\framework\http;

use Couchbase\PathNotFoundException;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

final class Kernel
{
	public function handle(Request $request): Response
	{
		$dispatcher = simpleDispatcher(function (RouteCollector $routeCollector){

			$routes = include BASE_PATH . '/routes/web/routes.php';

			foreach ($routes as $route) {
				$routeCollector->addRoute(...$route);
			}
		});

		$routeInfo = $dispatcher->dispatch($request->getHttpMethod(), $request->getPath());

		[$status, [$controller, $method], $vars] = $routeInfo;


		if($status != $dispatcher::FOUND) {
			throw new \HttpException();
		}

		$response = call_user_func_array([new $controller(), $method], $vars);

		return $response;
	}

}