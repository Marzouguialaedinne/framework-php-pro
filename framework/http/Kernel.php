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
			$routeCollector->addRoute('GET', '/', function () {
				$content = "Hello Yassine";
				return new Response($content, 200, []);
			});
		});

		$routeInfo = $dispatcher->dispatch($request->getHttpMethod(), $request->getPath());

		[$status, $handler, $vars] = $routeInfo;


		if($status != $dispatcher::FOUND) {
			throw new \HttpException();
		}
		return $handler($vars);
	}

}