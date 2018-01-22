<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Liker extends CI_Model {

	public function start($headers, $recResults)
	{
		foreach($recResults as $result) 
		{
			like_user($headers, $result.$id);
		}
	}
	
	private like_user($headers, $userId) 
	{
		// likes a provided Tinder user, with some random sleep interval
		// e.g. curl https://api.gotinder.com/{like|pass}/{_id}
	}
}
