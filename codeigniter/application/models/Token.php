<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	public function get_facebook_id()
	{
		$facebookId = file_get_contents(__DIR__ . '/../blackwidow/facebookId.txt');
		return $facebookId;
	}

	public function get_facebook_token)
	{
		$facebookToken = file_get_contents(__DIR__ . '/../blackwidow/facebookToken.txt');
		return $facebookToken;
	}

	public function get_tinder_token()
	{
		$tinderToken = file_get_contents(__DIR__ . '/../blackwidow/tinderToken.txt');
		return $tinderToken;
	}
?>
