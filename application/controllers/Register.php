<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Register_model");
        $this->load->library('form_validation');
		
    }
	public function index()
	{
		$this->load->view('template/halaman-register');
	}


	public function registration()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('ktp', 'KTP', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passwordconfirm', 'Password Confirmation', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else
		{
		  $Register = $this->Register_model;
		  $Register->save();
		  $this->session->set_flashdata('success', 'Registrasi data anda berhasil, silahkan login untuk mengakses akun anda');
		  redirect("register");
		}
		// echo "fungsi pemrosesan login";
	}
}
