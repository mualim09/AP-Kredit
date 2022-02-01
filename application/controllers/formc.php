<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model("formm_model");
        $this->load->library('form_validation');
		
    }
	public function index()
	{
		$this->load->view('user/form');
	}


	public function registration()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('gmail', 'gmail', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('ktp', 'ktp', 'required');
		$this->form_validation->set_rules('kota', 'kota', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
	/* 	$this->form_validation->set_rules('passwordconfirm', 'Password Confirmation', 'required'); */

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} 
		else
		{
		  $Register = $this->Register_model;
		  $Register->save();
		  $this->session->set_flashdata('success', 'Registrasi data anda berhasil, silahkan login untuk mengakses akun anda');
		  redirect("user");
		}
		// echo "fungsi pemrosesan login";
	}
}
