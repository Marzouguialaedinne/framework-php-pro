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

	public function getPath(): string
	{
		return strtok($this->servers['REQUEST_URI'], '?');
	}

	public function getHttpMethod(): string
	{
		return $this->servers['REQUEST_METHOD'];
	}

}