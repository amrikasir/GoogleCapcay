<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 5/22/17
 * Time: 9:54 AM
 */

namespace GoogleCapcay;

use Throwable;

class GoogleCapcayRuntimeException extends \RuntimeException
{

	public function __construct($message = "", $code = 0, Throwable $previous = null)
	{
		echo $message . " : " . $code;

		return parent::__construct($message, $code, $previous);
	}

}