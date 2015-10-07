<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nasabah extends MX_Controller {

	var $data;
	
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
		$this->load->model('Nasabah_model', 'nasabah');
	}
	
	public function index()	{
		$this->baru();
	}
	
	public function baru() {
		$this->form_validation->set_rules('db_nama_debitur', 'Nama Debitur', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_key_person', 'Key Person', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_alamat_usaha', 'Alamat Usaha', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_alamat_rumah', 'Alamat Rumah', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_nomor_ktp', 'Nomor KTP', 'required|max_length[255]');			
		// $this->form_validation->set_rules('masa_berlaku_ktp', 'Masa Berlaku KTP', '');			
		// $this->form_validation->set_rules('db_bidang_usaha', 'Bidang Usaha', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_sektor_ekonomi', 'Sektor Ekonomi', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_npwp', 'NPWP', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_akta_pendirian', 'Akta Pendirian', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_situ', 'SITU', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_siup', 'SIUP', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_siuug', 'SIUUG', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_tdp', 'TDP', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_maksimum_kredit', 'Maksimum Kredit', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_keperluan_kredit', 'Keperluan Kredit', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_jangka_waktu_kredit', 'Jangka Waktu Kredit', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_nomor_surat_permohonan_kredit', 'Nomor Surat Permohonan Kredit', 'required|max_length[255]');			
		// $this->form_validation->set_rules('tanggal_surat_permohonan_kredit', 'Tanggal Surat Permohonan Kredit', '');			
		// $this->form_validation->set_rules('db_produk_yang_dijual', 'Produk yang dijual', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_rata_rata_penjualan_perbulan', 'Rata - rata Penjualan Perbulan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_rata_pembelian_bahan_baku', 'Rata Pembelian Bahan Baku', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_laba_kotor_perbulan', 'Laba Kotor Perbulan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_biaya_operasional_per_bulan', 'Biaya Operasional Per Bulan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_biaya_hidup_per_bulan', 'Biaya Hidup Per Bulan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_biaya_lain_lain', 'Biaya Lain Lain', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_total_biaya', 'Total Biaya', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_laba_bersih_per_bulan', 'Laba Bersih Per Bulan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_rata_rata_laba_bersih', 'Rata - Rata Laba Bersih', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_lama_usaha', 'Lama Usaha', 'required|max_length[11]');			
		// $this->form_validation->set_rules('db_legalitas_usaha', 'Legalitas Usaha', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_legalitas_agunan', 'Legalitas Agunan', 'required|max_length[255]');			
		// $this->form_validation->set_rules('db_jenis_agunan', 'Jenis Agunan', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_luas_tanah', 'Luas Tanah', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_luas_bangunan', 'Luas Bangunan', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_shm', 'Nomor SHM', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_imb', 'Nomor IMB', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_alamat', '', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_harga_pasar_tanah', 'Harga Pasar Tanah (/m2)', 'required|max_length[255]');
		// $this->form_validation->set_rules('db_harga_pasar_bangunan', 'Harga Pasar Bangunan (/m2)', 'required|max_length[255]');
		
		if ($this->form_validation->run() === FALSE) {
			$this->template->load('index','nasabah_baru', $this->data);
		}
		else {			
			$q = explode('/', $this->input->post('masa_berlaku_ktp'));
			$w = explode('/', $this->input->post('tanggal_surat_permohonan_kredit'));
			
			$d = array();
			$d = parseForm($this->input->post());
			$d['masa_berlaku_ktp'] = @$q[2] . '-' . @$q[0] . '-' . @$q[1];
			$d['tanggal_surat_permohonan_kredit'] = @$w[2] . '-' . @$w[0] . '-' . @$w[1];
			$d['pendapatan_perbulan'] = str_replace('.', '', $this->input->post('pendapatan_perbulan'));
			$d['pendapatan_lain'] = str_replace('.', '', $this->input->post('pendapatan_lain'));
			$d['laba_kotor_perbulan'] = str_replace('.', '', $this->input->post('laba_kotor_perbulan'));			
			$d['biaya_hidup_per_bulan'] = str_replace('.', '', $this->input->post('biaya_hidup_per_bulan'));
			$d['biaya_lain_lain'] = str_replace('.', '', $this->input->post('biaya_lain_lain'));
			$d['total_pendapatan'] = str_replace('.', '', $this->input->post('total_pendapatan'));
			$d['pendapatan_bersih_per_bulan'] = str_replace('.', '', $this->input->post('pendapatan_bersih_per_bulan'));
			$d['rata_rata_pendapatan_bersih'] = str_replace('.', '', $this->input->post('rata_rata_pendapatan_bersih'));
			$d['harga_pasar_bangunan'] = str_replace('.', '', $this->input->post('harga_pasar_bangunan'));
			$d['harga_pasar_tanah'] = str_replace('.', '', $this->input->post('harga_pasar_tanah'));
			$d['maksimum_kredit'] = str_replace('.', '', $this->input->post('maksimum_kredit'));
						
			if ($this->db->insert('elos_nasabah_konsumen', $d)) {
				redirect('ak');
			}						
		}
	}
	
	function ao() {
		
		$this->data['hasil'] = $this->nasabah->get_persetujuan_kredit_nasabah('ao');
		
		$this->template->load('index', 'list_persetujuan_kredit', $this->data);
	}
	
	function spv() {
		
		$this->data['hasil'] = $this->nasabah->get_persetujuan_kredit_nasabah('spv');
		
		$this->template->load('index', 'list_persetujuan_kredit', $this->data);
	}
	
	function bm() {
		
		$this->data['hasil'] = $this->nasabah->get_persetujuan_kredit_nasabah('bm');
		
		$this->template->load('index', 'list_persetujuan_kredit', $this->data);
	}
	
	function persetujuan_ao($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			if ($this->input->post('j_action') == 'usulkan') {
				
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Diajukan ke spv'), array('id' => $this->input->post('id')));
				$this->db->insert('elos_ao_konsumen', array('id_pengajuan' => $this->input->post('id'), 'status_analisis' => $this->input->post('status_pengajuan'), 'komentar' => $this->input->post('komentar')));
				redirect('nasabah/ao');
			}
			else {
				$this->data['p'] = $this->nasabah->get_detail_nasabah($id);
				$this->data['z'] = $this->nasabah->get_data_persetujuan_analis($id);
				$this->template->load('index', 'detail_persetujuan_kredit', $this->data);				
			}
		}
		else
			redirect('nasabah/ao');
	}
	
	function persetujuan_spv($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			if ($this->input->post('j_action') == 'usulkan') {
				
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Diajukan ke bm'), array('id' => $this->input->post('id')));
				$this->db->insert('elos_spv_konsumen', array('id_pengajuan' => $this->input->post('id'), 'status_analisis' => $this->input->post('status_pengajuan'), 'komentar' => $this->input->post('komentar')));
				redirect('nasabah/spv');
			}
			else {
				$this->data['p'] = $this->nasabah->get_detail_nasabah($id);
				$this->data['r'] = $this->nasabah->get_data_persetujuan_ao($id);
				$this->data['z'] = $this->nasabah->get_data_persetujuan_analis($id);
							
				$this->template->load('index', 'detail_persetujuan_kredit', $this->data);				
			}
		}
		else
			redirect('nasabah/spv');
	}
	
	function persetujuan_bm($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			if ($this->input->post('j_action') == 'usulkan') {
				
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Disetujui'), array('id' => $this->input->post('id')));
				$this->db->insert('elos_bm_konsumen', array('id_pengajuan' => $this->input->post('id'), 'status_analisis' => $this->input->post('status_pengajuan'), 'komentar' => $this->input->post('komentar')));
				redirect('nasabah/bm');
			}
			else {
				$this->data['p'] = $this->nasabah->get_detail_nasabah($id);
				$this->data['r'] = $this->nasabah->get_data_persetujuan_ao($id);
				$this->data['s'] = $this->nasabah->get_data_persetujuan_spv($id);
				$this->data['z'] = $this->nasabah->get_data_persetujuan_analis($id);
				
				$this->template->load('index', 'detail_persetujuan_kredit', $this->data);				
			}
		}
		else
			redirect('nasabah/bm');
	}
	
	function lama($id = '') {
		$id = (int)$id;
		
		if ($id !== 0) {
		
			if ($this->input->post('j_action') == 'usulkan') {
				
				$this->db->update('elos_nasabah_konsumen', array('status' => 'Disetujui'), array('id' => $this->input->post('id')));
				$this->db->insert('elos_bm_konsumen', array('id_pengajuan' => $this->input->post('id'), 'status_analisis' => $this->input->post('status_pengajuan'), 'komentar' => $this->input->post('komentar')));
				redirect('nasabah/bm');
			}
			else {
				$this->data['p'] = $this->nasabah->get_detail_nasabah($id);
				$this->data['r'] = $this->nasabah->get_data_persetujuan_ao($id);
				$this->data['s'] = $this->nasabah->get_data_persetujuan_spv($id);
				$this->data['z'] = $this->nasabah->get_data_persetujuan_bm($id);
				
				$this->template->load('index', 'detail_nasabah_lama', $this->data);				
			}
		}
		else {
			$this->data['hasil'] = $this->nasabah->get_nasabah_lama();		
			$this->template->load('index', 'list_nasabah_lama', $this->data);
		}
	}
}