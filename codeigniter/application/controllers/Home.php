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
		$authData = get_auth_data();
		$this->load->view('home', $data);
	}
	
	public function get_auth_data()
	{
		$data['facebookId'] = $this->token->get_facebook_id();
		$data['facebookToken'] = $this->token->get_facebook_token();
		$data['tinderToken'] = $this->token->get_tinder_token();
		return $data;
	}
	
	public function start_liker() {}
	
	public function get_recommendations() {}
}
