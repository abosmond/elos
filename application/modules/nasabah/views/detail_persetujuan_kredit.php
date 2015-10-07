<!-- content starts -->
			
			
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Detail Persetujuan Kredit</a>
					</li>
				</ul>
			</div>
						
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Kemampuan Membayar Kembali</h2>						
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="">	
							<input type="hidden" name="id" value="<?=$p->id;?>" />
							<input type="hidden" name="j_action" value="usulkan" />
							<fieldset>						
							<div class="control-group">
								<label for="nama_debitur" class="control-label">Rata - rata penjualan pertahun</label>
								<div class='controls'>
									Rp <?=number_format($p->rata_rata_penjualan_perbulan * 12, 0, '', ',')?>
								</div>
							</div><div class="control-group">
								<label for="key_person" class="control-label">% Laba Bersih(EBITDA)/Sales pertahun</label>
								<div class='controls'>
									<?=number_format($p->rata_rata_laba_bersih, 0, '', ',');?>%
								</div>
							</div>
							
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Nilai CEV Agunan</h2>						
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
							<div class="box-header well" data-original-title>
								<h2><i class="icon-edit"></i> Maksimum Kredit Mikro Diusulkan (Rp)</h2>						
							</div>
							<div class="control-group">
								<label for="maksimum_kredit" class="control-label"><br/>Maksimum Kredit</label>
								<div class='controls'>
								   <br/> Rp <?=number_format($p->maksimum_kredit, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Jangka Waktu 
							</label>
							<div class="controls"><?=$p->jangka_waktu_kredit * 12?> &nbsp; bulan
								</div>
							</div>
							<div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Suku Bunga 
							</label>
							<div class="controls">14%
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Angsuran Pokok</label>
								<div class='controls'>
								   Rp <?=number_format($p->maksimum_kredit/($p->jangka_waktu_kredit*12), 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Beban Bunga</label>
								<div class='controls'>
								   Rp <?=number_format((0.14 * $p->maksimum_kredit)/12, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Total</label>
								<div class='controls'>
								   Rp <?=number_format(($p->maksimum_kredit/($p->jangka_waktu_kredit*12)) + ((0.14 * $p->maksimum_kredit)/12), 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="key_person" class="control-label">EBITDA Per bulan</label>
								<div class='controls'>
									<?=number_format($p->rata_rata_laba_bersih, 0, '', ',');?>%
								</div>
							</div>
							<div class="control-group">
								<label for="maksimum_kredit" class="control-label">Total Kredit Mikro Diusulkan</label>
								<div class='controls'>
								   Rp <?=number_format($p->maksimum_kredit, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Total Angsuran Pokok+Bunga perbulan</label>
								<div class='controls'>
								   Rp <?=number_format(($p->maksimum_kredit/($p->jangka_waktu_kredit*12)) + ((0.14 * $p->maksimum_kredit)/12), 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="key_person" class="control-label">Total EBITDA perbulan</label>
								<div class='controls'>
									<?=number_format($p->rata_rata_laba_bersih, 0, '', ',');?>%
								</div>
							</div>
							<div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">% Angsuran Pokok+Bunga terhadap EBITDA</label>
							<div class="controls">
								<?php
								$total = (($p->maksimum_kredit/($p->jangka_waktu_kredit*12)) + ((0.14 * $p->maksimum_kredit)/12)) * 100;
								$ebitda = $p->laba_bersih_per_bulan;
								$persen = $total / $ebitda;
								?>
								<?=round($persen, 2);?>%
								</div>
							</div>
							<div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Memenuhi/Tidak Memenuhi Ketentuan (maks.70%)</label>
							<div class="controls">
								<?php
								if (round($persen, 2) > 70) echo 'TIDAK MEMENUHI MEMENUHI';
								else echo 'MEMENUHI SYARAT';
								?>
								</div>
							</div>
							
							<div class="box-header well" data-original-title>
								<h2><i class="icon-edit"></i> Rasio Agunan terhadap Fasilitas Kredit Diusulkan</h2>						
							</div>
							<div class="control-group">
								<label for="shm" class="control-label"><br/>% Nilai Taksasi terhadap Maksimum Kredit</label>
							<div class="controls">
								<br/><?=round($taksasi,2);?>%
								</div>
							</div>
							<div class="control-group">
								<label for="luas_bangunan" class="control-label">Nilai Taksasi Agunan</label>
								<div class='controls'>
								   Rp <?=number_format($tot_cef, 0, '', ',');?>
								</div>
							</div>
							<div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Memenuhi/Tidak Memenuhi Syarat (Min .100% Total CEV)</label>
							<div class="controls">
								<?php
								if (round($tot_cef/1000000, 2) < 100) echo 'TIDAK MEMENUHI SYARAT';
								else echo 'MEMENUHI SYARAT';
								?>
								</div>
							</div>
							<?php
							if ($this->uri->segment(2) == 'persetujuan_ao' || $this->uri->segment(2) == 'persetujuan_spv' || $this->uri->segment(2) == 'persetujuan_bm') {
							?>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Hasil Persetujuan Analis Kredit</h2>						
					</div>
					
							<div class="control-group">
								<label class="control-label"><br/>Kesimpulan</label>
								<div class="controls">
									<br/><?=$z->status_analisis;?>
								</div>
							  </div>
							<div class="control-group">
								<label for="luas_tanah" class="control-label">Komentar </label>
								<div class='controls'>
								   <?=$z->komentar?>
								</div>
							</div>
							<?php
							}
							?>
							
							<?php
							if ($this->uri->segment(2) == 'persetujuan_spv' || $this->uri->segment(2) == 'persetujuan_bm') {
							?>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Hasil Persetujuan AO</h2>						
					</div>
					
							<div class="control-group">
								<label class="control-label"><br/>Kesimpulan</label>
								<div class="controls">
									<br/><?=$r->status_analisis;?>
								</div>
							  </div>
							<div class="control-group">
								<label for="luas_tanah" class="control-label">Komentar </label>
								<div class='controls'>
								   <?=$r->komentar?>
								</div>
							</div>
							<?php
							}
							?>
							
							<?php
							if ($this->uri->segment(2) == 'persetujuan_bm') {
							?>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Hasil Persetujuan SPV</h2>						
					</div>
					
							<div class="control-group">
								<label class="control-label"><br/>Kesimpulan</label>
								<div class="controls">
									<br/><?=$s->status_analisis;?>
								</div>
							  </div>
							<div class="control-group">
								<label for="luas_tanah" class="control-label">Komentar </label>
								<div class='controls'>
								   <?=$s->komentar?>
								</div>
							</div>
							<?php
							}
							?>
							
							
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Analisis Kredit</h2>						
					</div>
					
							<div class="control-group">
								<label class="control-label"><br/>Kesimpulan</label>
								<div class="controls">
								  <label class="radio">
									<br/><input type="radio" name="status_pengajuan" id="optionsRadios1" value="disetujui" checked="">
									Disetujui
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="status_pengajuan" id="optionsRadios2" value="tidak_disetujui">
									Tidak disetujui
								  </label>
								</div>
							  </div>
							<div class="control-group">
								<label for="luas_tanah" class="control-label">Komentar <span class="required">*</span></label>
								<div class='controls'>
								   <textarea name="komentar" rows="7" cols="45"></textarea>
								</div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Proses</button>
							  <button type="reset" class="btn">Batal</button>
							</div>
							<?php echo form_close(); ?></fieldset>
						  
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			
    
					<!-- content ends -->
			