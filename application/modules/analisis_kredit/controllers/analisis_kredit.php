<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analisis_kredit extends MX_Controller {

	var $data;
	
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
		$this->load->model('Analisis_kredit_model', 'analisis_kredit');
	}
	
	public function index()	{
		$this->lists();
	}
	
	public function lists() {
		$this->data['hasil'] = $this->analisis_kredit->get_analisis_kredit_nasabah();
		
		$this->template->load('index', 'list_analisis_kredit', $this->data);
	}
	
	function detail($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			$this->data['p'] = $this->analisis_kredit->get_detail_nasabah($id);			
			$this->template->load('index', 'detail_analisis_kredit', $this->data);							
		}
		else
			redirect('analisis_kredit');
	}
	
	function proses_analisis($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
			if ($this->input->post('j_action') == 'usulkan') {
				
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Dianalisis'), array('id' => $this->input->post('id')));
				$this->db->insert('elos_analisis_konsumen', array('id_pengajuan' => $this->input->post('id'), 'status_analisis' => $this->input->post('status_pengajuan'), 'komentar' => $this->input->post('komentar'), 'tgl' => date('Y-m-d')));
				redirect('analisis_kredit');
			}
			else {
				$this->data['p'] = $this->analisis_kredit->get_detail_nasabah($id);
			
				$this->template->load('index', 'proses_analisis_kredit', $this->data);				
			}
		}
	}
}