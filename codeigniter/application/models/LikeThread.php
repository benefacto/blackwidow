<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Liker extends CI_Model {

	public Liker($tinderToken) {}
	
	public function start($recResults)
	{
		foreach($recResults as $result) 
		{
			like_user($result.$id);
		}
	}
	
	private like_user($userId) 
	{
		// likes a provided Tinder user
	}
}
