<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    private $_table = "users";

    public $id;
    public $username;
    public $email;
	public $password;
	public $jenis_kelamin;
    public $alamat;
	public $ktp;
	public $foto_pengguna;
	public $kota;
    public $name;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'name',
    //         'label' => 'Name',
    //         'rules' => 'required'],

    //         ['field' => 'price',
    //         'label' => 'Price',
    //         'rules' => 'numeric'],
            
    //         ['field' => 'description',
    //         'label' => 'Description',
    //         'rules' => 'required']
    //     ];
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
		// print_r($post);
		// exit();

        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->alamat= $post["alamat"];
		$this->ktp= $post["ktp"];
		$this->foto_pengguna= "default.jpg";
		$this->kota= $post["city"];
		$this->name= $post["name"];
        return $this->db->insert($this->_table, $this);
    }


    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
