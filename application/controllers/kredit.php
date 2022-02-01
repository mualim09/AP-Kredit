<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Auth_model');
		$this->load->model('kredit_model');
		$session = $this->session->userdata();
		// if(!empty($session['id'])) {
		// 	redirect("view");
		// }
		
	}
	public function index()
	{
		$data = array();
		// $data['user'] =	array(
		// 	array('nama' => 'gembot','jenis_kelamin' => 'Laki-laki','alamat' => 'Bangil'),
		// 	array('nama' => 'anjas','jenis_kelamin' => 'laki setengah dewa','alamat' => 'Pandean'),
		// );
		
		$data['user'] = $this->db->get('users')->result_array();
		$data['kredit'] = $this->db->get('kredit')->result_array(); // cara mengambil semua data di table database ci3
		// result_array pengambil data di jadikan array
		// resul pengambilan di jadikan object
		

		// echo "<pre>";
		// print_r($data['user'][0]->username); // cara menampilkan data berbasis object
		// print_r($data['user'][1]['username']);
		// print_r($data['user']);
		// exit();


		$data['content'] = 'admin/kredit/view';
		
		$this->load->view('layout/content',$data);
	}


	public function tambah()
	{
	

		$data['content'] = 'admin/kredit/form';
		$data['form_action'] = 'kredit/simpan';
		$data['user'] = $this->db->get('users')->result_array();
		
		$this->load->view('layout/content',$data);
	}


	public function simpan()
	{
        $user = $this->kredit_model;
		$validation = $this->form_validation;
        $validation->set_rules($user->rules());
		$validation->set_error_delimiters('<div class="text-danger">','</div>');
	
		if ($validation->run() == FALSE) {
			$this->tambah();
		}
		else {
			$user->save();
			$this->session->set_flashdata('message', 'Data User berhasil disimpan.');

            redirect("kredit");
		}

	}

	public function update($id)
	{
		$where['id'] = $id;
		$post = $this->input->post();
		$kredit = $this->kredit_model;

        $validation = $this->form_validation;
        $validation->set_rules($kredit->rules());
		$validation->set_error_delimiters('<div class="text-danger">','</div>');

        if ($validation->run()) {
            $kredit->update($where,$post);
            $this->session->set_flashdata('message', 'Data user berhasil di update');
            redirect("kredit");
        }
		else{
			$this->edit($id);
		}

	}

	public function edit($id)
	{ 
	/* 	$data = array();
		$data['kredit'] = $this->db->get('kredit')->result_array(); */

		if (!isset($id)) redirect('kredit');

		$post = $this->input->post();
		$kredit = $this->kredit_model;
		 
        $data["title"] = "Edit Data";
        $data["kredit"] = $kredit->getById($id);  // cara mengambil data menggunakan fungsi yang ada di user model
		$data['user'] = $this->db->get('users')->result_array();

        if (empty($data["kredit"])) show_404();

		//  print_r($data['kredit']);
		//  exit();


		$data['form_action'] = 'kredit/edit/'.$id;
        
		$data['content'] = 'admin/kredit/form';
		$this->load->view('layout/content',$data);

	}

/* 	function hapus($id) {
		$this->Auth_model->hapusdata($id);
	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
	    redirect(site_url('kredit'));
	} */
	 function hapus($id) {
		$this->kredit_model->hapusdata($id);
	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
	    redirect(site_url('kredit'));
    } 
	
}
