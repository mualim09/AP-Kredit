<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Auth_model');
		$this->load->model('User_model');
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
	
		$data['user'] = $this->db->get('users')->result_array(); // cara mengambil semua data di table database ci3
		// result_array pengambil data di jadikan array
		// resul pengambilan di jadikan object
		

		// echo "<pre>";
		// print_r($data['user'][0]->username); // cara menampilkan data berbasis object
		// print_r($data['user'][1]['username']);
		// print_r($data['user']);
		// exit();


		$data['content'] = 'admin/user/view';
		$this->load->view('layout/content',$data);
	}


	public function tambah()
	{
		$data['content'] = 'admin/user/form';
		
		$data['form_action'] = 'user/simpan';
		$this->load->view('layout/content',$data);
	}


	public function simpan()
	{
        $user = $this->User_model;
		$validation = $this->form_validation;
        $validation->set_rules($user->rules());
	
		if ($validation->run() == FALSE) {
			$this->tambah();
		}
		else {
			$user->save();
			$this->session->set_flashdata('message', 'Data User berhasil disimpan.');

            redirect("user");
		}

	}

	public function update($id)
	{
		$where['id'] = $id;
		$post = $this->input->post();
		$user = $this->User_model;

        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update($where,$post);
            $this->session->set_flashdata('message', 'Data user berhasil di update');
            redirect("user");
        }
		else{
			$this->edit($id);
		}

	}

	public function edit($id)
	{

		if (!isset($id)) redirect('user');

		$post = $this->input->post();
		$user = $this->User_model;
		 
        $data["title"] = "Edit Data";
        $data["user"] = $user->getById($id); // cara mengambil data menggunakan fungsi yang ada di user model

        if (empty($data["user"])) show_404();

		// print_r($data['user']);
		// exit();


		$data['form_action'] = 'user/update/'.$id;
        
		$data['content'] = 'admin/user/form';
		$this->load->view('layout/content',$data);

	}

	function hapus($id) {
		$this->Auth_model->hapusdata($id);
	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
	    redirect(site_url('user'));
	}
	
}
