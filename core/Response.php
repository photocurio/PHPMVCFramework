<?php

namespace app\core;

/**
 * class Request
 *
 * @package app\core
 */
class Response
{
	public function setStatusCode(int $code)
	{
		\http_response_code($code);
	}
}
