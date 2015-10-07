<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}
	
	public function index()	{
		$this->loginview();
	}
	
	public function loginview() {
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|trim');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login');
		}
		else {
			redirect('home');
		}
	}
}