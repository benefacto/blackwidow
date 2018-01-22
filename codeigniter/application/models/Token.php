<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends CI_Model {

	public function get_facebook_id()
	{
		$facebookId = file_get_contents($this->get_token_dir() . '/../blackwidow/facebookId.txt');
		log_message("Facebook Id: {$facebookId}");
		return $facebookId;
	}

	public function get_facebook_token()
	{
		$facebookToken = file_get_contents($this->get_token_dir() . '/../blackwidow/facebookToken.txt');
		log_message("Facebook Token: {$facebookToken}");
		return $facebookToken;
	}

	public function get_tinder_token()
	{
		$tinderToken = file_get_contents($this->get_token_dir() . '/../blackwidow/tinderToken.txt');
		log_message("Tinder Id: {$tinderToken}");
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
