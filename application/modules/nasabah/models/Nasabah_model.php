<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Nasabah_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function get_persetujuan_kredit_nasabah($param) {
		
		if ($param == 'ao') {
			$status = 'Dianalisis';
		}
		
		if ($param == 'spv') {
			$status = 'Diajukan ke spv';
		}
		
		if ($param == 'bm') {
			$status = 'Diajukan ke bm';
		}
		
		$arr = $this->db->get_where('elos_nasabah_konsumen', array('status' => $status));
		
		if ($arr->num_rows() > 0) {
			return $arr->result();
		}
		return FALSE;
	}
	
	function get_nasabah_lama() {
		$arr = $this->db->get_where('elos_nasabah_konsumen', array('status' => 'Disetujui'));
		
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
	
	function get_data_persetujuan_ao($id) {
		$arr = $this->db->get_where('elos_ao_konsumen', array('id_pengajuan' => $id));
		
		if ($arr->num_rows() > 0) {
			return $arr->row();
		}
		
		return FALSE;
	}
	
	function get_data_persetujuan_analis($id) {
		$arr = $this->db->get_where('elos_analisis_konsumen', array('id_pengajuan' => $id));
		
		if ($arr->num_rows() > 0) {
			return $arr->row();
		}
		
		return FALSE;
	}
	
	function get_data_persetujuan_spv($id) {
		$arr = $this->db->get_where('elos_spv_konsumen', array('id_pengajuan' => $id));
		
		if ($arr->num_rows() > 0) {
			return $arr->row();
		}
		
		return FALSE;
	}
	
	function get_data_persetujuan_bm($id) {
		$arr = $this->db->get_where('elos_bm_konsumen', array('id_pengajuan' => $id));
		
		if ($arr->num_rows() > 0) {
			return $arr->row();
		}
		
		return FALSE;
	}
}