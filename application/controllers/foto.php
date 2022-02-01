<?php defined('BASEPATH') OR exit('No direct script access allowed');

class foto extends CI_Controller {

	function __construct(){

		parent:: __construct();
		$this->load->model('foto_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
		
	}
}
