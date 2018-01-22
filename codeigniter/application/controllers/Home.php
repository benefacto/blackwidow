<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('token');
		$authData = get_auth_data();
		$this->load->model('headers');
		$headers = get_tinder_headers($authData['tinderToken']);
		$recs = get_recommendations($headers);
		start_liker($headers, $recs);
	}
	
	private function get_auth_data()
	{
		log_message("Reading auth data from files...");
		$data['facebookId'] = $this->token->get_facebook_id();
		$data['facebookToken'] = $this->token->get_facebook_token();
		$data['tinderToken'] = $this->token->get_tinder_token();
		$this->load->view('home', $data);
		return $data;
	}
	
	private function get_tinder_headers($tinderToken)
	{
		log_message("Obtaining Tinder headers...");
		return $headers = $this->headers->get_json($tinderToken);
	}
	
	private function get_recommendations($headers)
	{
		// gets Tinder recommendations after a random sleep interval
		// e.g. curl https://api.gotinder.com/user/recs
		log_message("Obtaining Tinder recommendations...");
		return $recs;
	}
	
	private function start_liker($headers, $recs)
	{
		$this->load->model('liker');
		log_message("Starting Tinder Liker...");
		$this->liker->start($headers, $recs);
	}
}
