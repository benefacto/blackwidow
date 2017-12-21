<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends CI_Model {

	public function get_facebook_id()
	{
		$facebookId = file_get_contents($this->get_token_dir() . '/../blackwidow/facebookId.txt');
		return $facebookId;
	}

	public function get_facebook_token()
	{
		$facebookToken = file_get_contents($this->get_token_dir() . '/../blackwidow/facebookToken.txt');
		return $facebookToken;
	}

	public function get_tinder_token()
	{
		$tinderToken = file_get_contents($this->get_token_dir() . '/../blackwidow/tinderToken.txt');
		return $tinderToken;
	}
	
	/* convert origin directory /../blackwidow/codeigniter/application/models/
    ** to target directory /../blackwidow/ to find token files
	*/
	private function get_token_dir()
	{
		$tokenDir = dirname(__DIR__, 3);
		return $tokenDir;
	}
}
