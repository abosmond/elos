<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	var $data;
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {		
		$this->template->load('index', 'home', $this->data);
	}
	
	function menu_analisis_kredit() {
		$this->template->load('index', 'analisis_kredit', $this->data);
	}
	
	function menu_persetujuan_kredit() {
		$this->template->load('index', 'persetujuan_kredit', $this->data);
	}
	
	function menu_nasabah_lama() {
		$this->template->load('index', 'nasabah_lama', $this->data);
	}
	
	function menu_analisis_kredit_ao() {
		$this->template->load('index', 'analisis_kredit_ao', $this->data);
	}
	
	function menu_persetujuan_kredit_ao() {
		$this->template->load('index', 'persetujuan_kredit_ao', $this->data);
	}
	
	function menu_persetujuan_kredit_spv() {
		$this->template->load('index', 'persetujuan_kredit_spv', $this->data);
	}
	
	function menu_persetujuan_kredit_bm() {
		$this->template->load('index', 'persetujuan_kredit_bm', $this->data);
	}
}