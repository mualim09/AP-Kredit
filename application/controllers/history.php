<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("history_model");
        $this->load->library('form_validation');
    }

    public function index($id)
    {
		$data = array();
		$data['history'] = $this->db->where('kredit_id', $id)->get('history_kredit')->result_array(); 
      /*   $data["history"] = $this->history_model->getAll(); */
      /*   $this->load->view("content", $data); */
	  	$data['content'] = 'admin/history';
		$data['form_action'] = 'history/simpan/'.$id;
	/* 	print_r($data['history']);
		print_r($id);
		exit(); */

		$this->load->view('layout/content',$data);
		
	 
    }
	
	/* public function tambah()
	{
		$data['content'] = 'admin/history';

		$data['form_action'] = 'history/simpan';
		$this->load->view('layout/content',$data);
	} */


	public function simpan($id)
	{
        $history = $this->history_model;
		$validation = $this->form_validation;
        $validation->set_rules($history->rules());
	
		if ($validation->run() == FALSE) {
			$this->index($id);
		}
		else {
			$history->save($id);
			$this->session->set_flashdata('message', 'Data User berhasil disimpan.');

            redirect("history/index/".$id);
		}
		/* function hapus($id) {
			$this->history_model->hapus($id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
			redirect(site_url('history'));
		} */
	}
}
