<!-- content starts -->
			
			
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Input Data Nasabah</a>
					</li>
				</ul>
			</div>
						
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Data Nasabah</h2>						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
							<fieldset>						
							<div class="control-group">
								<label for="nama_debitur" class="control-label">Nama Debitur <span class="required">*</span></label>
								<div class='controls'>
								   <input id="nama_debitur" type="text" name="db_nama_debitur" maxlength="255" value="<?php echo set_value('db_nama_debitur'); ?>"  />
									 <?php echo form_error('db_nama_debitur'); ?>
								</div>
							</div>							
							<div class="control-group">
								<label for="alamat_rumah" class="control-label">Alamat Rumah <span class="required">*</span></label>
								<div class='controls'>
								   <input id="alamat_rumah" type="text" name="db_alamat_rumah" maxlength="255" value="<?php echo set_value('db_alamat_rumah'); ?>"  />
									 <?php echo form_error('db_alamat_rumah'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="nomor_ktp" class="control-label">Nomor KTP <span class="required">*</span></label>
								<div class='controls'>
								   <input id="nomor_ktp" type="text" name="db_nomor_ktp" maxlength="255" value="<?php echo set_value('db_nomor_ktp'); ?>"  />
									 <?php echo form_error('db_nomor_ktp'); ?>
								</div>
							</div><div class="control-group">
								<label for="masa_berlaku_ktp" class="control-label">Masa Berlaku KTP</label>
								<div class='controls'>
								   <input class="datepicker" type="text" name="masa_berlaku_ktp"  value="<?php echo set_value('masa_berlaku_ktp'); ?>"  />
								   <?php echo form_error('masa_berlaku_ktp'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="npwp" class="control-label">NPWP <span class="required">*</span></label>
								<div class='controls'>
								   <input id="npwp" type="text" name="db_npwp" maxlength="255" value="<?php echo set_value('db_npwp'); ?>"  />
									 <?php echo form_error('db_npwp'); ?>
								</div>
							</div>
							<div class="box-header well" data-original-title>
								<h2><i class="icon-edit"></i>Identitas Pekerjaan</h2>						
							</div>
							<div class="control-group">
								<label for="pekerjaan" class="control-label"><br/>Pekerjaan <span class="required">*</span></label>
								<div class='controls'>
								   <br/><input id="pekerjaan" type="text" name="db_pekerjaan" maxlength="255" value=""  />
									 								</div>
							</div>
							<?php
							$q = array('jabatan' => 'Jabatan',
									   'nama_perusahaan' => 'Nama Perusahaan',
									   'alamat_perusahaan' => 'Alamat Perusahaan',
									   'no_telp_perusahaan' => 'No. Telp Perusahaan');
									   
							foreach ($q as $w => $e) {
							?>
							<div class="control-group">
								<label for="<?=$w?>" class="control-label"><?=$e?> <span class="required">*</span></label>
								<div class='controls'>
								   <input id="<?=$w?>" type="text" name="db_<?=$w?>" maxlength="255" value="<?php echo set_value('db_'.$w); ?>"  />
									 <?php echo form_error('db_'.$w); ?>
								</div>
							</div>
							<?php
							}
							?>							
							
							<div class="box-header well" data-original-title>
								<h2><i class="icon-edit"></i> Permohonan Kredit</h2>						
							</div>
							<div class="control-group">
								<label for="maksimum_kredit" class="control-label"><br/>Maksimum Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <br/><input id="maksimum_kredit" type="text" name="maksimum_kredit" maxlength="255" value="<?php echo set_value('maksimum_kredit'); ?>"  />
									 <?php echo form_error('maksimum_kredit'); ?>
								</div>
							</div><div class="control-group">
								<label for="keperluan_kredit" class="control-label">Keperluan Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <input id="keperluan_kredit" type="text" name="db_keperluan_kredit" maxlength="255" value="<?php echo set_value('db_keperluan_kredit'); ?>"  />
									 <?php echo form_error('db_keperluan_kredit'); ?>
								</div>
							</div><div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Jangka Waktu Kredit <span class="required">*</span>
							</label>
							<div class="controls"><?php $options = array(''  => '-- Silakan Pilih --', '1' => '1 Tahun', '2' => '2 Tahun', '3' => '3 Tahun'); ?>

							<?php echo form_dropdown('db_jangka_waktu_kredit', $options, $this->input->post('db_jangka_waktu_kredit'))?>
									<?php echo form_error('db_jangka_waktu_kredit'); ?>
								</div>
							</div><div class="control-group">
								<label for="nomor_surat_permohonan_kredit" class="control-label">Nomor Surat Permohonan Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <input id="nomor_surat_permohonan_kredit" type="text" name="db_nomor_surat_permohonan_kredit" maxlength="255" value="<?php echo set_value('db_nomor_surat_permohonan_kredit'); ?>"  />
									 <?php echo form_error('db_nomor_surat_permohonan_kredit'); ?>
								</div>
							</div><div class="control-group">
								<label for="tanggal_surat_permohonan_kredit" class="control-label">Tanggal Surat Permohonan Kredit</label>
								<div class='controls'>
								   <input class="datepicker" type="text" name="tanggal_surat_permohonan_kredit"  value="<?php echo set_value('tanggal_surat_permohonan_kredit'); ?>"  />
								   <?php echo form_error('tanggal_surat_permohonan_kredit'); ?>
								</div>
							</div>
							<div class="box-header well" data-original-title>
								<h2><i class="icon-edit"></i> Perhitungan Keuangan</h2>						
							</div>							
							<div class="control-group">
								<label for="rata_rata_penjualan_perbulan" class="control-label">Gaji / Pendapatan Perbulan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="rata_rata_penjualan_perbulan" name="pendapatan_perbulan" type="text" value="<?php echo set_value('pendapatan_perbulan'); ?>"  />
									 <?php echo form_error('pendapatan_perbulan'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_pembelian_bahan_baku" class="control-label">Pendapatan Lainnya<span class="required">*</span></label>
								<div class='controls'>
								   <input id="rata_pembelian_bahan_baku" type="text" name="pendapatan_lain" maxlength="255" value="<?php echo set_value('pendapatan_lain'); ?>"  /> 
									 <?php echo form_error('pendapatan_lain'); ?>									 
								</div>
							</div>							
							<div class="control-group">
								<label for="laba_kotor_perbulan" class="control-label">Pendapatan Kotor Perbulan</label>
								<div class='controls'>								
								   <input id="laba_kotor_perbulan" type="text" name="laba_kotor_perbulan" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_laba_kotor">Hitung Laba Kotor</button>
									 <?php echo form_error('laba_kotor_perbulan'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="biaya_hidup_per_bulan" class="control-label">Biaya Hidup Per Bulan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="biaya_hidup_per_bulan" type="text" name="biaya_hidup_per_bulan" maxlength="255" value="<?php echo set_value('db_biaya_hidup_per_bulan'); ?>"  />
									 <?php echo form_error('db_biaya_hidup_per_bulan'); ?>
								</div>
							</div><div class="control-group">
								<label for="biaya_lain_lain" class="control-label">Biaya Lain Lain <span class="required">*</span></label>
								<div class='controls'>
								   <input id="biaya_lain_lain" type="text" name="biaya_lain_lain" maxlength="255" value="<?php echo set_value('biaya_lain_lain'); ?>"  /> 
									 <?php echo form_error('biaya_lain_lain'); ?>
								</div>
							</div><div class="control-group">
								<label for="total_biaya" class="control-label">Total Pendapatan</label>
								<div class='controls'>
								   <input id="total_biaya" type="text" name="total_pendapatan" maxlength="255" value=""/>  &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_total_biaya">Hitung Total Biaya</button>
									 <?php echo form_error('total_pendapatan'); ?>
								</div>
							</div><div class="control-group">
								<label for="laba_bersih_per_bulan" class="control-label">Pendapatan Bersih Per Bulan </label>
								<div class='controls'>
								   <input id="laba_bersih_per_bulan" type="text" name="pendapatan_bersih_per_bulan" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_laba_bersih">Hitung Laba Bersih</button>
									 <?php echo form_error('pendapatan_bersih_per_bulan'); ?>
								</div>
							</div><div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Rata - Rata Pendapatan Bersih (%)</label>
								<div class='controls'>
								   <input id="rata_rata_laba_bersih" type="text" name="rata_rata_pendapatan_bersih" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_rata_laba_bersih">Hitung rata - rata Laba Bersih</button>
									 <?php echo form_error('rata_rata_pendapatan_bersih'); ?>
								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Identifikasi Resiko</h2>						
					</div>
							<div class="control-group">
								<label for="lama_usaha" class="control-label"><br/>Lama Bekerja <span class="required">*</span></label>
								<div class='controls'>
								    <br/><input id="lama_usaha" type="text" name="db_lama_usaha" p;maxlength="11" value="<?php echo set_value('db_lama_usaha'); ?>"  /> &nbsp; (Dalam tahun)
									 <?php echo form_error('db_lama_usaha'); ?>
								</div>
							</div><div class="control-group">
								<label for="legalitas_usaha" class="control-label">Legalitas Usaha <span class="required">*</span></label>
								<div class='controls'>
								   <input id="legalitas_usaha" type="text" name="db_legalitas_usaha" maxlength="255" value="<?php echo set_value('db_legalitas_usaha'); ?>"  />
									 <?php echo form_error('db_legalitas_usaha'); ?>
								</div>
							</div><div class="control-group">
								<label for="legalitas_agunan" class="control-label">Legalitas Agunan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="legalitas_agunan" type="text" name="db_legalitas_agunan" maxlength="255" value="<?php echo set_value('db_legalitas_agunan'); ?>"  />
									 <?php echo form_error('db_legalitas_agunan'); ?>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Karakter / Kemampuan Manajemen</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_kemampuan_manajemen" id="optionsRadios1" value="Baik" checked="">
									Baik<br/>
									<input type="radio" name="db_status_kemampuan_manajemen" id="optionsRadios2" value="Tidak">
									Tidak Baik
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="kemampuan_manajemen" class="control-label">Komentar</label>
							<div class="controls">
								<textarea name="db_kemampuan_manajemen" /></textarea>
								<?php echo form_error('db_kemampuan_manajemen'); ?>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Kondisi Keuangan</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_kondisi_keuangan" id="optionsRadios1" value="Baik" checked="">
									Baik<br/>
									<input type="radio" name="db_status_kondisi_keuangan" id="optionsRadios2" value="Tidak">
									Tidak Baik
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="kondisi_prospek_usaha" class="control-label">Komentar
							</label>
								<div class="controls">
									<textarea name="db_kondisi_keuangan" /></textarea>
								<?php echo form_error('db_kondisi_keuangan'); ?>
								</div>							
							</div>
							
							<div class="control-group">
								<label class="control-label">Konsistensi dalam sikap</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_konsistensi_sikap" id="optionsRadios1" value="Baik" checked="">
									Baik<br/>
									<input type="radio" name="db_status_konsistensi_sikapa" id="optionsRadios2" value="Tidak">
									Tidak Baik
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="kondisi_keuangan_usaha" class="control-label">Komentar
							</label>							
							<div class="controls">
								<textarea name="db_konsistensi_sikap" /></textarea>
									<?php echo form_error('db_konsistensi_sikap'); ?>							
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Hutang yang dimiliki</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_hutang_dimiliki" id="optionsRadios1" value="Ada" checked="">
									Ada<br/>
									<input type="radio" name="db_status_hutang_dimiliki" id="optionsRadios2" value="Tidak">
									Tidak Ada
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="kondisi_pemasaran_usaha" class="control-label">Komentar
							</label>
							<div class="controls">
								<textarea name="db_hutang_dimiliki" /></textarea>
									<?php echo form_error('db_hutang_dimiliki'); ?>									
								</div>
							</div>
							<?php
							$bt = array('kewajiban_listrik_air' => 'Kewajiban memenuhi kewajiban PDAM / Listrik',
										'perilaku_bermasyarakat' => 'Perilaku dalam bermasyarakat');
																							
							foreach ($bt as $bb => $bc) {
							?>
							<div class="control-group">
								<label class="control-label"><?=$bc?></label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_<?=$bb?>" id="optionsRadios1" value="Baik" checked="">
									Baik<br/>
									<input type="radio" name="db_status_<?=$bb?>" id="optionsRadios2" value="Tidak">
									Tidak Baik
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="<?=$bb?>" class="control-label">Komentar
							</label>
							<div class="controls">
								<textarea name="db_<?=$bb?>" /></textarea>
									<?php echo form_error('db_'.$bb); ?>																
								</div>
							</div>
							<?php
							}
							?>
							
							<?php
							$arr = array('resiko_keuangan' => 'Resiko Keuangan',
										'resiko_key_person' => 'Resiko Key Person / Manajemen',
										'keterangan_perbuatan_kriminal' => 'Keterangan Perbuatan Kriminal');
							
							foreach ($arr as $b => $c) {
							?>
							<div class="control-group">
								<label class="control-label"><?=$c?></label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="db_status_<?=$b?>" id="optionsRadios1" value="Ada" checked="">
									Ada<br/>
									<input type="radio" name="db_status_<?=$b?>" id="optionsRadios2" value="Tidak">
									Tidak
								  </label>								  								  
								</div>
							  </div>
							  
							<div class="control-group">
								<label for="<?=$b?>" class="control-label">Komentar
							</label>
							<div class="controls">
								<textarea name="db_<?=$b?>" /></textarea>
									<?php echo form_error('db_'.$b); ?>																
								</div>
							</div>
							<?php
							}
							?>
							
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Data Agunan</h2>						
					</div>
					
							<div class="control-group">
								<label for="jenis_agunan" class="control-label"><br/>Jenis Agunan <span class="required">*</span></label>
								<div class='controls'>
								    <br/><input id="jenis_agunan" type="text" name="db_jenis_agunan" maxlength="11" value="Tanah dan Bangunan"  />
									 <?php echo form_error('db_jenis_agunan'); ?>
								</div>
							</div><div class="control-group">
								<label for="luas_tanah" class="control-label">Luas Tanah <span class="required">*</span></label>
								<div class='controls'>
								   <input id="luas_tanah" type="text" name="db_luas_tanah" maxlength="255" value="<?php echo set_value('db_luas_tanah'); ?>"  />
									 <?php echo form_error('db_luas_tanah'); ?>
								</div>
							</div><div class="control-group">
								<label for="luas_bangunan" class="control-label">Luas Bangunan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="luas_bangunan" type="text" name="db_luas_bangunan" maxlength="255" value="<?php echo set_value('db_luas_bangunan'); ?>"  />
									 <?php echo form_error('db_luas_bangunan'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="shm" class="control-label">Nomor SHM
							</label>
							<div class="controls">
								<input id="shm" type="text" name="db_shm" maxlength="255" value="<?php echo set_value('db_shm'); ?>"  />
								<?php echo form_error('db_shm'); ?>
								</div>
							</div>
							<div class="control-group">
								<label for="imb" class="control-label">Nomor IMB
							</label>
								<div class="controls">
									<input id="imb" type="text" name="db_imb" maxlength="255" value="<?php echo set_value('db_imb'); ?>"  />
									<?php echo form_error('db_imb'); ?>
								</div>							
							</div>
							
							<div class="control-group">
								<label for="alamat" class="control-label">Alamat
							</label>
							
							<div class="controls">
								<input id="alamat" type="text" name="db_alamat" maxlength="255" value="<?php echo set_value('db_alamat'); ?>"  />
									<?php echo form_error('db_alamat'); ?>							
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_tanah" class="control-label">Harga Pasar Tanah (/m2)
							</label>
							<div class="controls">
								<input id="harga_pasar_tanah" type="text" name="harga_pasar_tanah" maxlength="255" value="<?php echo set_value('harga_pasar_tanah'); ?>"  />
									<?php echo form_error('harga_pasar_tanah'); ?>									
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_bangunan" class="control-label">Harga Pasar Bangunan (/m2)
							</label>
							<div class="controls">
								<input id="harga_pasar_bangunan" type="text" name="harga_pasar_bangunan" maxlength="255" value="<?php echo set_value('harga_pasar_bangunan'); ?>"  />
									<?php echo form_error('harga_pasar_bangunan'); ?>																
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