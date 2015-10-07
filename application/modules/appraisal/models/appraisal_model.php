<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Appraisal_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get_appraisal_nasabah() {
		$arr = $this->db->get_where('elos_nasabah_konsumen', array('status' => 'Diajukan'));
		
		if ($arr->num_rows() > 0) {
			return $arr->result();
		}
		return FALSE;
	}
	
	function get_detail_nasabah($id) {
		$arr = $this->db->get_where('elos_nasabah_konsumen', array('id' => $id));
		
		if ($arr->num_rows() > 0) {
			return $arr->row();
		}
		
		return FALSE;
	}
}