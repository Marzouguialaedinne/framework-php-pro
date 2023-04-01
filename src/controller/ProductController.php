<?php

namespace App\controller;

use App\framework\http\Response;

final class ProductController
{
	public function show(int $id): Response
	{
		$content = "this is posts is $id";

		return new Response($content, 200, []);
	}

}