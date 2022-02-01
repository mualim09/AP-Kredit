<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Auth_model');
		}
	
		// ... ada kode lain di sini ...
	
	public function index()
	{
		$data['content'] = 'dashboard/halamantest';
		$this->load->view('layout/content',$data);
	}

	

	public function logout(){
		$this->load->library('session');
		$session = $this->session->userdata();
		$this->session->unset_userdata($session);	
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		$this->session->sess_destroy();
		redirect('login');
	
	}


}
