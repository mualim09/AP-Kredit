<?php defined('BASEPATH') OR die('No direct script access allowed');
 
class export_excel_model extends CI_Model {
 
     public function getAll()
     {
		  $history_kredit= $this->db->get('siswa')->result();
          return $history;
     }
 
}
