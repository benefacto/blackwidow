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
		$data['facebookId'] = $this->token->get_facebook_id();
		$data['facebookToken'] = $this->token->get_facebook_token();
		$data['tinderToken'] = $this->token->get_tinder_token();
		$data['message'] = 'Starting bot...';
		$this->load->view('home', $data);
		// need to use Javascript to update page without refresh...
		$data['message'] += '\r\nStopping bot...';
	}
}
