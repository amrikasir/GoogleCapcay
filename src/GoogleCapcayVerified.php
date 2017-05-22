<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 5/21/17
 * Time: 6:58 PM
 */

namespace GoogleCapcay;


	class GoogleCapcayVerified
{
	/*
	|------------------------------------------------------------------------------
	| Storage for Site Key
	|------------------------------------------------------------------------------
	*/
	private $site_key;

	/*
	|------------------------------------------------------------------------------
	| Storage for Secret Key
	|------------------------------------------------------------------------------
	*/
	private $secret_key;

	/*
	|------------------------------------------------------------------------------
	| Storage for Response Code
	|------------------------------------------------------------------------------
	*/
	private $ResponseCode;

	/*
	|------------------------------------------------------------------------------
	| Save Secret Key
	|------------------------------------------------------------------------------
	*/
	public function SecretKey($key)
	{
		$this->secret_key = $key;

		return $this;
	}

	/*
	|------------------------------------------------------------------------------
	| Save Site Key
	|------------------------------------------------------------------------------
	*/
	public function SiteKey($key)
	{
		$this->site_key = $key;

		return $this;
	}

	/*
	|------------------------------------------------------------------------------
	| Save Response Code to Property
	|------------------------------------------------------------------------------
	*/
	public function RespondCode($GoogleRecaptchaResponse)
	{
		/*
		|------------------------------------------------------------------------------
		| Validate @param
		|------------------------------------------------------------------------------
		| IF NULL, then get from $_POST param
		*/
		$this->ResponseCode = ($GoogleRecaptchaResponse != null)
			? $GoogleRecaptchaResponse
			: $_POST["g-recaptcha-response"];


		return $this;
	}

	/*
	|------------------------------------------------------------------------------
	| Verification Function
	|------------------------------------------------------------------------------
	| @return: mixed
	*/
	public function Verified()
	{
		return (new TransferResponseToGoogle())
			->FieldPost(
				[
					"secret"    => $this->secret_key,
					"response"  => $this->ResponseCode
				]
			)
			->Transfer();
	}
}