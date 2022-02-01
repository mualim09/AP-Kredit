<?php

class Auth_model extends CI_Model
{
	private $_table = "users";
	const SESSION_KEY = 'id';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$user = $this->db->where('email', $email)->where('password', md5($password))->get('users')->row_array();
		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}
	
		// bikin session
		$this->session->set_userdata($user);
		return true;
		// $this->_update_last_login($user->id);
		// return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
		
	}
	
	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Auth_model");
        $this->load->library('form_validation');
		
    }
	public function index()
	{
		$this->load->view('dashboard/halamantest');
		
	}


	
	function hapusdata($id){
		
		$this->db->where('id',$id);
		$this->db->delete('users');// nama table
		return true; 
	}
	public function update()
    {
        $data = array(
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "Jenis_Kelamin" => $this->input->post('JenisKelamin'),
            "name" => $this->input->post('name'),

        );
        return $this->db->update($this->table, $data, array('IdMhsw' => $this->input->post('IdMhsw')));
    }
	public function edit()
    {
        $data = array(
            "nomor_kredit" => $this->input->post('nomor_kredit'),
            "nama_nasabah" => $this->input->post('nama_nasabah'),
            "alamat" => $this->input->post('alamat'),
            "ktp" => $this->input->post('ktp'),
			"nominal" => $this->input->post('nominal'),
			"dp" => $this->input->post('dp'),
			"lama_cicilan" => $this->input->post('lama_cicilan'),
			

        );
        return $this->db->update($this->table, $data, array('IdMhsw' => $this->input->post('IdMhsw')));
	}
}
