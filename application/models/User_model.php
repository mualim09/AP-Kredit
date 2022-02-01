<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "users";

    public $id;
    public $username;
    public $email;
	public $password;
	public $jenis_kelamin;
    public $alamat;
	public $ktp;
	public $kota;
    public $name;
/* 	public $foto_pengguna; */

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

			['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
		
			['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

			['field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
            'rules' => 'required'],

			['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'ktp',
            'label' => 'ktp',
            'rules' => 'numeric'],
            
            ['field' => 'kota',
            'label' => 'kota',
            'rules' => 'required'],

			['field' => 'name',
            'label' => 'name',
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
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->alamat= $post["alamat"];
		$this->ktp= $post["ktp"];
		$this->kota= $post["kota"];
		$this->name= $post["name"];
		return $this->db->insert($this->_table, $this);
		/* 	$this->foto_pengguna= "default.jpg"; */
    }


	public function update($where, $data)
	{
		$this->db->where($where);
		$this->db->update($this->_table, $data);
	}


  /*   public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    } */
}
