<!DOCTYPE html>
<html lang="en">
<head>
	<title>eLOS Administrator Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta name="author" content="Andrew Brian Osmond">

	<!-- The styles -->
	<link id="bs-css" href="http://localhost/eldem/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="http://localhost/eldem/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="http://localhost/eldem/css/charisma-app.css" rel="stylesheet">
	<link href="http://localhost/eldem/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='http://localhost/eldem/css/fullcalendar.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='http://localhost/eldem/css/chosen.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/uniform.default.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/colorbox.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/jquery.noty.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/noty_theme_default.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/elfinder.min.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/elfinder.theme.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/opa-icons.css' rel='stylesheet'>
	<link href='http://localhost/eldem/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="http://localhost/eldem/img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
								
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="http://localhost/eldem/home"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="http://localhost/eldem/ak"><i class="icon-briefcase"></i><span class="hidden-tablet"> Analisis Kredit</span></a></li>
						<li><a class="ajax-link" href="http://localhost/eldem/pk"><i class="icon-check"></i><span class="hidden-tablet"> Persetujuan Kredit</span></a></li>
						<li><a class="ajax-link" href="http://localhost/eldem/nl"><i class="icon-user"></i><span class="hidden-tablet"> Data Nasabah Lama</span></a></li>
						
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
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
							<input type="hidden" name="id" value="1" />
							<input type="hidden" name="j_action" value="appraise" />
							<fieldset>						
							<div class="control-group">
								<label for="nama_debitur" class="control-label">Nama Debitur <span class="required">*</span></label>
								<div class='controls'>
									CV. Maju Jaya Terus								</div>
							</div><div class="control-group">
								<label for="key_person" class="control-label">Key Person <span class="required">*</span></label>
								<div class='controls'>
									Abdul								</div>
							</div><div class="control-group">
								<label for="alamat_usaha" class="control-label">Alamat Usaha <span class="required">*</span></label>
								<div class='controls'>
									Abdul								</div>
							</div><div class="control-group">
								<label for="alamat_rumah" class="control-label">Alamat Rumah <span class="required">*</span></label>
								<div class='controls'>
									Desa Maju Makmur								</div>
							</div><div class="control-group">
								<label for="nomor_ktp" class="control-label">Nomor KTP <span class="required">*</span></label>
								<div class='controls'>
								   3273101221670008								</div>
							</div><div class="control-group">
								<label for="masa_berlaku_ktp" class="control-label">Masa Berlaku KTP</label>
								<div class='controls'>
									2014-06-30								</div>
							</div><div class="control-group">
								<label for="bidang_usaha" class="control-label">Bidang Usaha <span class="required">*</span></label>
								<div class='controls'>
									Batik tulis								</div>
							</div><div class="control-group">
								<label for="sektor_ekonomi" class="control-label">Sektor Ekonomi <span class="required">*</span></label>
								<div class='controls'>
								   Perdagangan								</div>
							</div><div class="control-group">
								<label for="npwp" class="control-label">NPWP <span class="required">*</span></label>
								<div class='controls'>
								   1132429908-9								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Surat Perizinan Usaha</h2>						
					</div>
							<div class="control-group">
								<label for="akta_pendirian" class="control-label"><br/>Akta Pendirian <span class="required">*</span></label>
								<div class='controls'>
								    <br/>9812/AKTA/12992.03								</div>
							</div><div class="control-group">
								<label for="situ" class="control-label">SITU <span class="required">*</span></label>
								<div class='controls'>
								   9837/SITU/1134.0800								</div>
							</div><div class="control-group">
								<label for="siup" class="control-label">SIUP <span class="required">*</span></label>
								<div class='controls'>
								   9837/SIUP/1134.0800								</div>
							</div><div class="control-group">
								<label for="siuug" class="control-label">SIUUG <span class="required">*</span></label>
								<div class='controls'>
								   9837/SIUUG/1134.0800								</div>
							</div><div class="control-group">
								<label for="tdp" class="control-label">TDP <span class="required">*</span></label>
								<div class='controls'>
								   9837/TDP/1134.0800								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Permohonan Kredit</h2>						
					</div>
							<div class="control-group">
								<label for="maksimum_kredit" class="control-label"><br/>Maksimum Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <br/><input id="maksimum_kredit" type="text" name="db_maksimum_kredit" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="keperluan_kredit" class="control-label">Keperluan Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <input id="keperluan_kredit" type="text" name="db_keperluan_kredit" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="jangka_waktu_kredit" class="control-label">Jangka Waktu Kredit <span class="required">*</span>
							</label>
							<div class="controls">
							<select name="db_jangka_waktu_kredit">
<option value="" selected="selected">-- Silakan Pilih --</option>
<option value="1">1 Tahun</option>
<option value="2">2 Tahun</option>
<option value="3">3 Tahun</option>
</select>																	</div>
							</div><div class="control-group">
								<label for="nomor_surat_permohonan_kredit" class="control-label">Nomor Surat Permohonan Kredit <span class="required">*</span></label>
								<div class='controls'>
								   <input id="nomor_surat_permohonan_kredit" type="text" name="db_nomor_surat_permohonan_kredit" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="tanggal_surat_permohonan_kredit" class="control-label">Tanggal Surat Permohonan Kredit</label>
								<div class='controls'>
								   <input class="datepicker" type="text" name="tanggal_surat_permohonan_kredit"  value=""  />
								   								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Perhitungan Keuangan</h2>						
					</div>
							<div class="control-group">
								<label for="produk_yang_dijual" class="control-label"><br/>Produk yang dijual <span class="required">*</span></label>
								<div class='controls'>
								    <br/><input id="produk_yang_dijual" type="text" name="db_produk_yang_dijual" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="rata_rata_penjualan_perbulan" class="control-label">Rata - rata Penjualan Perbulan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="rata_rata_penjualan_perbulan" type="text" name="db_rata_rata_penjualan_perbulan" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="rata_pembelian_bahan_baku" class="control-label">Rata Pembelian Bahan Baku <span class="required">*</span></label>
								<div class='controls'>
								   <input id="rata_pembelian_bahan_baku" type="text" name="db_rata_pembelian_bahan_baku" maxlength="255" value=""  /> 
									 									 
								</div>
							</div>							
							<div class="control-group">
								<label for="laba_kotor_perbulan" class="control-label">Laba Kotor Perbulan</label>
								<div class='controls'>
								
								   <input id="laba_kotor_perbulan" type="text" name="db_laba_kotor_perbulan" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_laba_kotor">Hitung Laba Kotor</button>
									 								</div>
							</div><div class="control-group">
								<label for="biaya_operasional_per_bulan" class="control-label">Biaya Operasional Per Bulan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="biaya_operasional_per_bulan" type="text" name="db_biaya_operasional_per_bulan" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="biaya_hidup_per_bulan" class="control-label">Biaya Hidup Per Bulan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="biaya_hidup_per_bulan" type="text" name="db_biaya_hidup_per_bulan" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="biaya_lain_lain" class="control-label">Biaya Lain Lain <span class="required">*</span></label>
								<div class='controls'>
								   <input id="biaya_lain_lain" type="text" name="db_biaya_lain_lain" maxlength="255" value=""  /> 
									 								</div>
							</div><div class="control-group">
								<label for="total_biaya" class="control-label">Total Biaya</label>
								<div class='controls'>
								   <input id="total_biaya" type="text" name="db_total_biaya" maxlength="255" value=""/>  &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_total_biaya">Hitung Total Biaya</button>
									 								</div>
							</div><div class="control-group">
								<label for="laba_bersih_per_bulan" class="control-label">Laba Bersih Per Bulan </label>
								<div class='controls'>
								   <input id="laba_bersih_per_bulan" type="text" name="db_laba_bersih_per_bulan" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_laba_bersih">Hitung Laba Bersih</button>
									 								</div>
							</div><div class="control-group">
								<label for="rata_rata_laba_bersih" class="control-label">Rata - Rata Laba Bersih (%)</label>
								<div class='controls'>
								   <input id="rata_rata_laba_bersih" type="text" name="db_rata_rata_laba_bersih" maxlength="255" value=""/> &nbsp; <button class="btn btn-mini btn-inverse" id="hitung_rata_laba_bersih">Hitung rata - rata Laba Bersih</button>
									 								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Identifikasi Resiko</h2>						
					</div>
							<div class="control-group">
								<label for="lama_usaha" class="control-label"><br/>Lama Usaha <span class="required">*</span></label>
								<div class='controls'>
								    <br/><input id="lama_usaha" type="text" name="db_lama_usaha" p;maxlength="11" value=""  /> &nbsp; (Dalam tahun)
									 								</div>
							</div><div class="control-group">
								<label for="legalitas_usaha" class="control-label">Legalitas Usaha <span class="required">*</span></label>
								<div class='controls'>
								   <input id="legalitas_usaha" type="text" name="db_legalitas_usaha" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="legalitas_agunan" class="control-label">Legalitas Agunan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="legalitas_agunan" type="text" name="db_legalitas_agunan" maxlength="255" value=""  />
									 								</div>
							</div>
							<div class="control-group">
								<label for="kemampuan_manajemen" class="control-label">Karakter / Kemampuan Manajemen
							</label>
							<div class="controls">
								<input id="kemampuan_manajemen" type="text" name="db_kemampuan_manajemen" maxlength="255" value=""  />
																</div>
							</div>
							<div class="control-group">
								<label for="kondisi_prospek_usaha" class="control-label">Kondisi / Prospek Usaha
							</label>
								<div class="controls">
									<input id="kondisi_prospek_usaha" type="text" name="db_kondisi_prospek_usaha" maxlength="255" value=""  />
																	</div>							
							</div>
							
							<div class="control-group">
								<label for="kondisi_keuangan_usaha" class="control-label">Kondisi Keuangan Usaha
							</label>
							
							<div class="controls">
								<input id="kondisi_keuangan_usaha" type="text" name="db_kondisi_keuangan_usaha" maxlength="255" value=""  />
																
								</div>
							</div>
							
							<div class="control-group">
								<label for="kondisi_pemasaran_usaha" class="control-label">Kondisi Pemasaran Usaha
							</label>
							<div class="controls">
								<input id="kondisi_pemasaran_usaha" type="text" name="db_kondisi_pemasaran_usaha" maxlength="255" value=""  />
																		
								</div>
							</div>
							
							<div class="control-group">
								<label for="kondisi_produksi_usaha" class="control-label">Kondisi Produksi Usaha
							</label>
							<div class="controls">
								<input id="kondisi_produksi_usaha" type="text" name="db_kondisi_produksi_usaha" maxlength="255" value=""  />
																									
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_pemasaran_persaingan" class="control-label">Resiko Pemasaran / Persaingan
							</label>
							<div class="controls">
								<input id="resiko_pemasaran_persaingan" type="text" name="db_resiko_pemasaran_persaingan" maxlength="255" value=""  />
																									
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_produksi_bahan_baku" class="control-label">Resiko Produksi dan Bahan Baku
							</label>
							<div class="controls">
								<input id="resiko_produksi_bahan_baku" type="text" name="db_resiko_produksi_bahan_baku" maxlength="255" value=""  />
																									
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_keuangan_usaha" class="control-label">Resiko Keuangan Usaha
							</label>
							<div class="controls">
								<input id="resiko_keuangan_usaha" type="text" name="db_resiko_keuangan_usaha" maxlength="255" value=""  />
																									
								</div>
							</div>
							
							<div class="control-group">
								<label for="resiko_manajemen" class="control-label">Resiko Key Person / Manajemen
							</label>
							<div class="controls">
								<input id="resiko_manajemen" type="text" name="db_resiko_manajemen" maxlength="255" value=""  />
																									
								</div>
							</div>
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Data Agunan</h2>						
					</div>
					
							<div class="control-group">
								<label for="jenis_agunan" class="control-label"><br/>Jenis Agunan <span class="required">*</span></label>
								<div class='controls'>
								    <br/><input id="jenis_agunan" type="text" name="db_jenis_agunan" maxlength="11" value="Tanah dan Bangunan"  />
									 								</div>
							</div><div class="control-group">
								<label for="luas_tanah" class="control-label">Luas Tanah <span class="required">*</span></label>
								<div class='controls'>
								   <input id="luas_tanah" type="text" name="db_luas_tanah" maxlength="255" value=""  />
									 								</div>
							</div><div class="control-group">
								<label for="luas_bangunan" class="control-label">Luas Bangunan <span class="required">*</span></label>
								<div class='controls'>
								   <input id="luas_bangunan" type="text" name="db_luas_bangunan" maxlength="255" value=""  />
									 								</div>
							</div>
							<div class="control-group">
								<label for="shm" class="control-label">Nomor SHM
							</label>
							<div class="controls">
								<input id="shm" type="text" name="db_shm" maxlength="255" value=""  />
																</div>
							</div>
							<div class="control-group">
								<label for="imb" class="control-label">Nomor IMB
							</label>
								<div class="controls">
									<input id="imb" type="text" name="db_imb" maxlength="255" value=""  />
																	</div>							
							</div>
							
							<div class="control-group">
								<label for="alamat" class="control-label">Alamat
							</label>
							
							<div class="controls">
								<input id="alamat" type="text" name="db_alamat" maxlength="255" value=""  />
																
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_tanah" class="control-label">Harga Pasar Tanah (/m2)
							</label>
							<div class="controls">
								<input id="harga_pasar_tanah" type="text" name="db_harga_pasar_tanah" maxlength="255" value=""  />
																		
								</div>
							</div>
							
							<div class="control-group">
								<label for="harga_pasar_bangunan" class="control-label">Harga Pasar Bangunan (/m2)
							</label>
							<div class="controls">
								<input id="harga_pasar_bangunan" type="text" name="db_harga_pasar_bangunan" maxlength="255" value=""  />
																									
								</div>
							</div>
							
							<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> CEV dan Taksasi</h2>						
					</div>
														<div class="control-group">
								<label for="jenis_agunan" class="control-label"><br/>CEV Tanah <span class="required">*</span></label>
								<div class='controls'>
								    <br/>243750000								</div>
							</div><div class="control-group">
								<label for="luas_tanah" class="control-label">CEV Bangunan <span class="required">*</span></label>
								<div class='controls'>
								   150000000								</div>
							</div><div class="control-group">
								<label for="luas_bangunan" class="control-label">Total CEV <span class="required">*</span></label>
								<div class='controls'>
								   393750000								</div>
							</div>
							<div class="control-group">
								<label for="shm" class="control-label">Nilai Taksasi (%)
							</label>
							<div class="controls">
								393.75								</div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Simpan</button>
							  <button type="reset" class="btn">Batal</button>
							</div>
							</form></fieldset>
						  
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			
    
					<!-- content ends -->			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="http://localhost/eldem/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="http://localhost/eldem/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="http://localhost/eldem/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="http://localhost/eldem/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="http://localhost/eldem/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="http://localhost/eldem/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="http://localhost/eldem/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="http://localhost/eldem/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="http://localhost/eldem/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="http://localhost/eldem/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="http://localhost/eldem/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="http://localhost/eldem/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="http://localhost/eldem/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="http://localhost/eldem/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="http://localhost/eldem/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="http://localhost/eldem/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='http://localhost/eldem/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='http://localhost/eldem/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="http://localhost/eldem/js/excanvas.js"></script>
	<script src="http://localhost/eldem/js/jquery.flot.min.js"></script>
	<script src="http://localhost/eldem/js/jquery.flot.pie.min.js"></script>
	<script src="http://localhost/eldem/js/jquery.flot.stack.js"></script>
	<script src="http://localhost/eldem/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="http://localhost/eldem/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="http://localhost/eldem/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="http://localhost/eldem/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="http://localhost/eldem/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="http://localhost/eldem/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="http://localhost/eldem/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="http://localhost/eldem/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="http://localhost/eldem/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="http://localhost/eldem/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="http://localhost/eldem/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="http://localhost/eldem/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="http://localhost/eldem/js/charisma.js"></script>	
	
</body>
</html>