<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 5/22/17
 * Time: 10:08 AM
 */

namespace GoogleCapcay;


use Throwable;

class CapcayException extends \Exception
{
	public function __construct($message = "", $code = 0, Throwable $previous = null)
	{
		echo $message;
	}

}