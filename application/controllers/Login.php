<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$session = $this->session->userdata();
		if(!empty($session['id'])) {
			redirect("Dashboard");
		}
		
	}

	public function index()
	{
		// echo "halaman login";
		$this->load->view('template/halaman-login');
	}


	public function auth()
	{
		$this->load->model('Auth_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} 
		else {

			if($this->Auth_model->login($email, $password)){
				redirect('Dashboard');
			} else {
				$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
				$this->index();
			}

		}

		// echo "fungsi pemrosesan login";
	}
}
