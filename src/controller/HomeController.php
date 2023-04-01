<?php

namespace App\controller;
use App\framework\http\Response;

final class HomeController
{
	public function index(): Response
	{
		$content = "Hello mon amour yassine";

		return new Response($content, 200, []);
	}

}