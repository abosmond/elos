<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function get_data_login($user, $pass) {
		$arr = $this->db->get_where('tbl_admin', array('username' => $user, 'passwd' => $pass));
		
		if ($arr->num_rows() > 0) return $arr->row();
		return FALSE;
	}
}