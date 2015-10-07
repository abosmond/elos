<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appraisal extends MX_Controller {

	var $data;
	
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
		$this->load->model('Appraisal_model', 'appraisal');
	}
	
	public function index()	{
		$this->lists();
	}
	
	public function lists() {
		$this->data['hasil'] = $this->appraisal->get_appraisal_nasabah();
		
		$this->template->load('index', 'list_appraisal', $this->data);
	}
	
	function detail($id) {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			if ($this->input->post('j_action') == 'appraise') {
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Ditaksir'), array('id' => $this->input->post('id')));
				redirect('appraisal');
			}
			else {
				$this->data['p'] = $this->appraisal->get_detail_nasabah($id);
			
				$this->template->load('index', 'detail_appraisal', $this->data);
			}
		}
	}
}