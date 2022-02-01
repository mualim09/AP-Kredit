<?php defined('BASEPATH') OR exit('No direct script access allowed');

class kredit_model extends CI_Model
{
    private $_table = "kredit";

    public $id;
    public $nomor_kredit;
    public $nama_nasabah;
    public $alamat;
	public $ktp;
	public $nominal;
	public $dp;
	public $lama_cicilan;
  
/* 	public $foto_pengguna; */

    public function rules()
    {
        return [
            ['field' => 'nomor_kredit',
            'label' => 'nomor_kredit',
            'rules' => 'required'],

			['field' => 'nama_nasabah',
            'label' => 'nama_nasabah',
            'rules' => 'required'],
		
			['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

			['field' => 'ktp',
            'label' => 'ktp',
            'rules' => 'required'],

			['field' => 'nominal',
            'label' => 'nominal',
            'rules' => 'required'],

            ['field' => 'dp',
            'label' => 'dp',
            'rules' => 'numeric'],
            
            ['field' => 'lama_cicilan',
            'label' => 'lama_cicilan',
            'rules' => 'required'],

			/* print_r($data);
			exit(); */

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nomor_kredit = $post["nomor_kredit"];
        $this->nama_nasabah = $post["nama_nasabah"];
		$this->alamat = $post["alamat"];
		$this->ktp= $post["ktp"];
		$this->nominal= $post["nominal"];
		$this->dp= $post["dp"];
		$this->lama_cicilan= $post["lama_cicilan"];
		return $this->db->insert($this->_table, $this);
		/* 	$this->foto_pengguna= "default.jpg"; */
    }


	public function update($where, $data)
	{
		$this->db->where($where);
		$this->db->edit($this->_table, $data);
	}

	

    public function hapusdata($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));

    }


}
