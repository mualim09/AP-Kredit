<?php defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model
{
    private $_table = "history_kredit";

    public $id;
    public $cicilan_ke;
	public $nominal_bayar;
	public $tanggal;
   /*  public $kredit_id; */

	
/* 	public $foto_pengguna; */

    public function rules()
    {
        return [
          
		
			['field' => 'cicilan_ke',
            'label' => 'cicilan_ke',
            'rules' => 'required'],

			['field' => 'nominal_bayar',
            'label' => 'nominal_bayar',
            'rules' => 'required'],

			['field' => 'tanggal',
            'label' => 'tanggal',
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

    public function save($id)
    {
        $post = $this->input->post();
        /* $this->user_id  = $post["user_id "]; */
        $this->cicilan_ke = $post["cicilan_ke"];
        $this->nominal_bayar= md5($post["nominal_bayar"]);
		$this->tanggal = $post["tanggal"];
		$this->kredit_id= $id;
		$this->status= $post["status"];
		return $this->db->insert($this->_table, $this);
		/* 	$this->foto_pengguna= "default.jpg"; */
    }


	public function update($where, $data)
	{
		$this->db->where($where);
		$this->db->update($this->_table, $data);
	}

	// ENDI ONOK FUNGSi hapus kok awakmu ngomong iso

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    } 
}
