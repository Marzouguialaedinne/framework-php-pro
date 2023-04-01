<?php

namespace App\framework\http;

final class Kernel
{
	public function handle(Request $request): Response
	{
		$content = "Hello yassine Marzougui";

		return new Response($content, 200, []);
	}

}