<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("History_model");
        $this->load->library('form_validation');
		$this->load->library("session");
    }

    public function index($id)
    {
		$data = array();
		$data['history'] = $this->db->where('kredit_id', $id)->get('history_kredit')->result_array(); 
		$data['id'] = $id;
      /*   $data["history"] = $this->History_model->getAll(); */
      /*   $this->load->view("content", $data); */
	  	$data['content'] = 'admin/history';
		$data['form_action'] = 'history/simpan/'.$id;
	/* 	print_r($data['history']);
		print_r($id);
		exit(); */

		$this->load->view('layout/content',$data);
		
	 
    }
	public function export($id)
	{
		$data = array();
		$data['history'] = $this->db->where('kredit_id', $id)->get('history_kredit')->result_array(); 
		$this->load->view('admin/export_excel',$data);
	/* 	print_r($data['history']);
		print_r($id);
		exit();  */
	}
	
	/* public function tambah()
	{
		$data['content'] = 'admin/history';

		$data['form_action'] = 'history/simpan';
		$this->load->view('layout/content',$data);
	} */


	public function simpan($id)
	{
        $history = $this->History_model;
		$validation = $this->form_validation;
        $validation->set_rules($history->rules());
		$validation->set_error_delimiters('<div class="text-danger">','</div>');
	
		if ($validation->run() == FALSE) {
			$this->index($id);
		}
		else {
			$history->save($id);
			$this->session->set_flashdata('message', 'Data User berhasil disimpan.');

            redirect("history/index/".$id);
		}
	}
	function hapus($id) {

		$getKredit = $this->db->where("id",$id)->get('history_kredit')->row_array();

		$this->History_model->delete($id);
		$this->session->set_flashdata('message','Data Berhasil dihapus');
		redirect(site_url('history/index/'.$getKredit['kredit_id']));

	}
}
