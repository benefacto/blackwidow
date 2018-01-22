<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('token');
		$this->load->model('headers');
		$authData = get_auth_data();
		$headers = get_tinder_headers($authData['tinderToken']);
		$recs = get_recommendations($headers);
		start_liker($headers, $recs);
	}
	
	private function get_auth_data()
	{
		$data['facebookId'] = $this->token->get_facebook_id();
		$data['facebookToken'] = $this->token->get_facebook_token();
		$data['tinderToken'] = $this->token->get_tinder_token();
		$this->load->view('home', $data);
		return $data;
	}
	
	private function get_tinder_headers($tinderToken)
	{
		return $headers = $this->headers->get_json($tinderToken);
	}
	
	private function get_recommendations($headers)
	{
		// e.g. curl https://api.gotinder.com/user/recs
		return $recs;
	}
	
	private function start_liker($headers, $recs)
	{
		$this->load->model('liker', $headers);
		$this->liker->start($recs);
	}
}
