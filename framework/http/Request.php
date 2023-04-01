<?php

namespace App\framework\http;
final class Request
{
	public function __construct(
		public readonly array $getParams,
		public readonly array $postParams,
		public readonly array $cookies,
		public readonly array $files,
		public readonly array $servers
	)
	{
	}

	public static function createFromGlobals(): self
	{
		return new self($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
	}

}