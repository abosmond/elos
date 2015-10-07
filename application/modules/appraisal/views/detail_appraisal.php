<!-- content starts -->
			
			
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Detail Appraisal</a>
					</li>
				</ul>
			</div>
						
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Data Nasabah</h2>						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">	
							<input type="hidden" name="id" value="<?=$p->id;?>" />
							<input type="hidden" name="j_action" value="appraise" />
							<fieldset>						
							<div class="control-group">
								<label for="nama_debitur" class="control-label">Nama Debitur</label>
								<div class='controls'>
									<?=$p->nama_debitur?>
								</div>
							</div><div class="control-group">
								<label for="key_person" class="control-label">Key Person</label>
								<div class='controls'>
									<?=$p->key_person?>
								</div>
							</div><div class="control-group">
								<label for="alamat_usaha" class="control-label">Alamat Usaha</label>
								<div class='controls'>
									<?=$p->key_person?>
								</div>
							</div><div class="control-group">
								<label for="alamat_rumah" class="control-label">Alamat Rumah</label>
								<div class='controls'>
									<?=$p->alamat_rumah?>
								</div>
							</div><div class="control-group">
								<label for="nomor_ktp" class="control-label">Nomor KTP</label>
								<div class='controls'>
								   <?=$p->nomor_ktp?>
								</div>
							</div><div class="control-group">
								<label for="masa_berlaku_ktp" class="control-label">Masa Berlaku KTP</label>
								<div class='controls'>
									<?=$p->masa_berlaku_ktp?>
								</div>
							</div><div class="control-group">
								<label for="bidang_usaha" class="control-label">Bidang Usaha</label>
								<div class='controls'>
									<?=$p->bidang_usaha?>
								</div>
							</div><div class="control-group">
								<label for="sektor_ekonomi" class="control-label">Sektor Ekonomi</label>
								<div class='controls'>
								   <?=$p->sektor_ekonomi?>
								</div>
							</div>
							<div class="control-group">
								<label for="npwp" class="control-label">NPWP</label>
								<div class='controls'>
								   <?=$p->npwp?>
								</div>
							</div>							
							<div class="control-group">
								<label for="akta_pendirian" class="control-label">Akta Pendirian</label>
								<div class='controls'>
								    <?=$p->akta_pendirian;?>
								</div>
							</div><div class="control-group">
								<label for="situ" class="control-label">SITU</label>
								<div class='controls'>
								   <?=$p->situ;?>
								</div>
							</div><div class="control-group">
								<label for="siup" class="control-label">SIUP</label>
								<div class='controls'>
								   <?=$p->siup;?>
								</div>
							</div><div class="control-group">
								<label for="siuug" class="control-label">SIUUG</label>
								<div class='controls'>
								   <?=$p->siuug;?>
								</div>
							</div><div class="control-group">
								<label for="tdp" class="control-label">TDP</label>
								<div class='controls'>
								   <?=$p->tdp;?>
								</div>
							</div>
					
							<div class="control-group">
								<label for="maksimum_kredit" class="control-label">Maksimum Kredit</label>
								<div class='controls'>
								   Rp <?=number_format($p->maksimum_kredit, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="keperluan_kredit" class="control-label">Keperluan Kredit</label>
								<div class='controls'>
								   <?=$p->keperluan_kredit;?>
								</div>
							</div><div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Jangka Waktu Kredit
							</label>
							<div class="controls"><?=$p->jangka_waktu_kredit?> &nbsp; tahun
								</div>
							</div><div class="control-group">
								<label for="nomor_surat_permohonan_kredit" class="control-label">Nomor Surat Permohonan Kredit</label>
								<div class='controls'>
								   <?=$p->nomor_surat_permohonan_kredit;?>
								</div>
							</div><div class="control-group">
								<label for="tanggal_surat_permohonan_kredit" class="control-label">Tanggal Surat Permohonan Kredit</label>
								<div class='controls'>
								   <?=$p->tanggal_surat_permohonan_kredit;?>
								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Checklist Analisa</h2>						
					</div>
							<div class="control-group">
								<label for="produk_yang_dijual" class="control-label"><br/>Produk yang dijual</label>
								<div class='controls'>
								    <br/><?=$p->produk_yang_dijual;?>
								</div>
							</div><div class="control-group">
								<label for="rata_rata_penjualan_perbulan" class="control-label">Rata - rata Penjualan Perbulan</label>
								<div class='controls'>
								   Rp <?=number_format($p->rata_rata_penjualan_perbulan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="rata_pembelian_bahan_baku" class="control-label">Rata Pembelian Bahan Baku</label>
								<div class='controls'>
								   	Rp <?=number_format($p->rata_pembelian_bahan_baku, 0, '', ',');?>								 
								</div>
							</div>							
							<div class="control-group">
								<label for="laba_kotor_perbulan" class="control-label">Laba Kotor Perbulan</label>
								<div class='controls'>
								Rp <?=number_format($p->laba_kotor_perbulan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="biaya_operasional_per_bulan" class="control-label">Biaya Operasional Per Bulan</label>
								<div class='controls'>
								   Rp <?=number_format($p->biaya_operasional_per_bulan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="biaya_hidup_per_bulan" class="control-label">Biaya Hidup Per Bulan</label>
								<div class='controls'>
								   Rp <?=number_format($p->biaya_hidup_per_bulan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="biaya_lain_lain" class="control-label">Biaya Lain Lain</label>
								<div class='controls'>
								   Rp <?=number_format($p->biaya_lain_lain, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="total_biaya" class="control-label">Total Biaya</label>
								<div class='controls'>
								   Rp <?=number_format($p->total_biaya, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="laba_bersih_per_bulan" class="control-label">Laba Bersih Per Bulan </label>
								<div class='controls'>
								   Rp <?=number_format($p->laba_bersih_per_bulan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Rata - Rata Laba Bersih</label>
								<div class='controls'>
								   <?=number_format($p->rata_rata_laba_bersih, 0, '', ',');?>%
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Kewajiban Perbulan (pokok)</label>
								<div class='controls'>
								   Rp <?=number_format($p->maksimum_kredit/($p->jangka_waktu_kredit*12), 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Kewajiban Perbulan (bunga)</label>
								<div class='controls'>
								   Rp <?=number_format((0.14 * $p->maksimum_kredit)/12, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Total Kewajiban Perbulan</label>
								<div class='controls'>
								   Rp <?=number_format(($p->maksimum_kredit/($p->jangka_waktu_kredit*12)) + ((0.14 * $p->maksimum_kredit)/12), 0, '', ',');?>
								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Identifikasi Resiko</h2>						
					</div>
							<div class="control-group">
								<label for="lama_usaha" class="control-label"><br/>Lama Usaha</label>
								<div class='controls'>
								    <br/><?=$p->lama_usaha;?> &nbsp;tahun
								</div>
							</div><div class="control-group">
								<label for="legalitas_usaha" class="control-label">Legalitas Usaha</label>
								<div class='controls'>
								   <?=$p->legalitas_usaha;?>
								</div>
							</div><div class="control-group">
								<label for="legalitas_agunan" class="control-label">Legalitas Agunan</label>
								<div class='controls'>
								   <?=$p->legalitas_agunan?>
								</div>
							</div>
							<div class="control-group">
								<label for="kemampuan_manajemen" class="control-label">Karakter / Kemampuan Manajemen
							</label>
							<div class="controls">
								<?=$p->kemampuan_manajemen;?>
								</div>
							</div>
							<div class="control-group">
								<label for="kondisi_prospek_usaha" class="control-label">Kondisi / Prospek Usaha
							</label>
								<div class="controls">
									<?=$p->kondisi_prospek_usaha;?>
								</div>							
							</div>
							
							<div class="control-group">
								<label for="kondisi_keuangan_usaha" class="control-label">Kondisi Keuangan Usaha
							</label>
							
							<div class="controls">
								<?=$p->kondisi_keuangan_usaha;?>
								</div>
							</div>
							
							<div class="control-group">
								<label for="kondisi_pemasaran_usaha" class="control-label">Kondisi Pemasaran Usaha
							</label>
							<div class="controls">
								<?=$p->kondisi_pemasaran_usaha;?>
								</div>
							</div>
							
							<div class="control-group">
								<label for="kondisi_produksi_usaha" class="control-label">Kondisi Produksi Usaha
							</label>
							<div class="controls">
								<?=$p->kondisi_produksi_usaha;?>
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_pemasaran_persaingan" class="control-label">Resiko Pemasaran / Persaingan
							</label>
							<div class="controls">
								<?=$p->resiko_pemasaran_persaingan;?>
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_produksi_bahan_baku" class="control-label">Resiko Produksi dan Bahan Baku
							</label>
							<div class="controls">
								<?=$p->resiko_produksi_bahan_baku;?>															
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_keuangan_usaha" class="control-label">Resiko Keuangan Usaha
							</label>
							<div class="controls">
								<?=$p->resiko_keuangan_usaha;?>
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_manajemen" class="control-label">Resiko Key Person / Manajemen
							</label>
							<div class="controls">
								<?=$p->resiko_manajemen;?>																
								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Data Agunan</h2>						
					</div>
					
							<div class="control-group">
								<label for="jenis_agunan" class="control-label"><br/>Jenis Agunan</label>
								<div class='controls'>
								    <br/><?=$p->jenis_agunan;?> 
								</div>
							</div><div class="control-group">
								<label for="luas_tanah" class="control-label">Luas Tanah</label>
								<div class='controls'>
								   <?=$p->luas_tanah;?> &nbsp;m<sup>2</sup>
								</div>
							</div><div class="control-group">
								<label for="luas_bangunan" class="control-label">Luas Bangunan</label>
								<div class='controls'>
								   <?=$p->luas_bangunan;?>&nbsp;m<sup>2</sup>
								</div>
							</div>
							<div class="control-group">
								<label for="shm" class="control-label">Nomor SHM
							</label>
							<div class="controls">
								<?=$p->shm;?>
								</div>
							</div>
							<div class="control-group">
								<label for="imb" class="control-label">Nomor IMB
							</label>
								<div class="controls">
									<?=$p->imb;?>
								</div>							
							</div>
							
							<div class="control-group">
								<label for="alamat" class="control-label">Alamat
							</label>
							
							<div class="controls">
								<?=$p->alamat;?>						
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_tanah" class="control-label">Harga Pasar Tanah (/m<sup>2</sup>)
							</label>
							<div class="controls">
								Rp <?=number_format($p->harga_pasar_tanah, 0, '', ',');?>								
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_bangunan" class="control-label">Harga Pasar Bangunan (/m<sup>2</sup>)
							</label>
							<div class="controls">
								Rp <?=number_format($p->harga_pasar_bangunan, 0, '', ',');?>																							
								</div>
							</div>
							
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> CEV dan Taksasi</h2>						
					</div>
							<?php
							if ($p->imb !== '') {
								$cef_tanah = 0.75 * ($p->harga_pasar_tanah * $p->luas_tanah);
								$cef_bangunan = 0.60 * ($p->harga_pasar_bangunan * $p->luas_bangunan);
							}
							else {
								$cef_tanah = 0.30 * ($p->harga_pasar_tanah * $p->luas_tanah);
								$cef_bangunan = 0.30 * ($p->harga_pasar_bangunan * $p->luas_bangunan);
							}
								$tot_cef = $cef_tanah + $cef_bangunan;
								$taksasi = $tot_cef / 1000000;
							?>
							<div class="control-group">
								<label for="jenis_agunan" class="control-label"><br/>CEV Tanah</label>
								<div class='controls'>
								    <br/>Rp <?=number_format($cef_tanah, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="luas_tanah" class="control-label">CEV Bangunan</label>
								<div class='controls'>
								   Rp <?=number_format($cef_bangunan, 0, '', ',');?>
								</div>
							</div><div class="control-group">
								<label for="luas_bangunan" class="control-label">Total CEV</label>
								<div class='controls'>
								   Rp <?=number_format($tot_cef, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="shm" class="control-label">Nilai Taksasi (%)
							</label>
							<div class="controls">
								<?=$taksasi;?>%
								</div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Simpan</button>
							  <button type="reset" class="btn">Batal</button>
							</div>
							<?php echo form_close(); ?></fieldset>
						  
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			
    
					<!-- content ends -->