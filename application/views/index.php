<!DOCTYPE html>
<html lang="en">
<head>
	<title>eLOS Administrator Area</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta name="author" content="Andrew Brian Osmond">

	<!-- The styles -->
	<link href="<?=base_url()?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?=base_url()?>css/charisma-app.css" rel="stylesheet">
	<link href="<?=base_url()?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?=base_url()?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?=base_url()?>css/chosen.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/colorbox.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?=base_url()?>css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico">
		
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
						<li><a class="ajax-link" href="<?=base_url()?>home"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="<?=base_url()?>ak"><i class="icon-briefcase"></i><span class="hidden-tablet"> Analisis Kredit</span></a></li>
						<li><a class="ajax-link" href="<?=base_url()?>pk"><i class="icon-check"></i><span class="hidden-tablet"> Persetujuan Kredit</span></a></li>
						<li><a class="ajax-link" href="<?=base_url()?>nl"><i class="icon-user"></i><span class="hidden-tablet"> Data Nasabah Lama</span></a></li>
						
						<li class="nav-header hidden-tablet">AO</li>
						<li><a class="ajax-link" href="<?=base_url()?>ak/ao"><i class="icon-briefcase"></i><span class="hidden-tablet"> Analisis Kredit</span></a></li>
						<li><a class="ajax-link" href="<?=base_url()?>pk/ao"><i class="icon-check"></i><span class="hidden-tablet"> Persetujuan Kredit</span></a></li>
						
						<li class="nav-header hidden-tablet">Appraisal</li>
						<li><a class="ajax-link" href="<?=base_url()?>appraisal"><i class="icon-briefcase"></i><span class="hidden-tablet"> Appraisal</span></a></li>
						
						<li class="nav-header hidden-tablet">Analisis Kredit</li>
						<li><a class="ajax-link" href="<?=base_url()?>analisis_kredit"><i class="icon-briefcase"></i><span class="hidden-tablet"> Analisis Kredit</span></a></li>
						
						<li class="nav-header hidden-tablet">SPV</li>						
						<li><a class="ajax-link" href="<?=base_url()?>pk/spv"><i class="icon-check"></i><span class="hidden-tablet"> Persetujuan Kredit</span></a></li>
						
						<li class="nav-header hidden-tablet">BM</li>						
						<li><a class="ajax-link" href="<?=base_url()?>pk/bm"><i class="icon-check"></i><span class="hidden-tablet"> Persetujuan Kredit</span></a></li>
					</ul>
					
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
			<?=$contents?>
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<footer>
			
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?=base_url()?>js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?=base_url()?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?=base_url()?>js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?=base_url()?>js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?=base_url()?>js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?=base_url()?>js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?=base_url()?>js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?=base_url()?>js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?=base_url()?>js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?=base_url()?>js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?=base_url()?>js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?=base_url()?>js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?=base_url()?>js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?=base_url()?>js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?=base_url()?>js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?=base_url()?>js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?=base_url()?>js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?=base_url()?>js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?=base_url()?>js/excanvas.js"></script>
	<script src="<?=base_url()?>js/jquery.flot.min.js"></script>
	<script src="<?=base_url()?>js/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url()?>js/jquery.flot.stack.js"></script>
	<script src="<?=base_url()?>js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?=base_url()?>js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?=base_url()?>js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?=base_url()?>js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?=base_url()?>js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?=base_url()?>js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?=base_url()?>js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?=base_url()?>js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?=base_url()?>js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?=base_url()?>js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?=base_url()?>js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?=base_url()?>js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?=base_url()?>js/charisma.js"></script>
	
	<script src="<?=base_url()?>js/jquery.price_format.2.0.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#hitung_laba_kotor').click(function() {
			var penjualan = parseInt($('#rata_rata_penjualan_perbulan').val().replace(/\./g,''));
			var pembelian = parseInt($('#rata_pembelian_bahan_baku').val().replace(/\./g, ''));
			
			var hasil = penjualan + pembelian;
					
			$('#laba_kotor_perbulan').val(formatAngka(hasil));
			return false;
		});
		
		$('#hitung_total_biaya').click(function() {			
			var biaya_hidup = parseInt($('#biaya_hidup_per_bulan').val().replace(/\./g, ''));
			var biaya_lain = parseInt($('#biaya_lain_lain').val().replace(/\./g, ''));
			
			var total_biaya = biaya_hidup + biaya_lain;
			
			$('#total_biaya').val(formatAngka(total_biaya));
			return false;
		});
		
		$('#hitung_laba_bersih').click(function() {
			var laba_bersih = parseInt($('#laba_kotor_perbulan').val().replace(/\./g, '')) - parseInt($('#total_biaya').val().replace(/\./g, ''));
			$('#laba_bersih_per_bulan').val(formatAngka(laba_bersih));
			
			return false;
		});
		
		$('#hitung_rata_laba_bersih').click(function() {
			var rata_laba_bersih = (parseInt($('#laba_bersih_per_bulan').val().replace(/\./g, '')) / parseInt($('#rata_rata_penjualan_perbulan').val().replace(/\./g, ''))) * 100;
			
			$('#rata_rata_laba_bersih').val(formatAngka(Math.round(rata_laba_bersih, 2)));
			
			return false;
		});
		
		$('#rata_rata_penjualan_perbulan').priceFormat({
			prefix: '',			
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});
		
		$('#rata_pembelian_bahan_baku').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});	
		
		$('#biaya_operasional_per_bulan').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});	
		
		$('#biaya_hidup_per_bulan').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});	
		
		$('#biaya_lain_lain').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});	
		
		$('#harga_pasar_tanah').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});
		
		$('#harga_pasar_bangunan').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});				
		
		$('#maksimum_kredit').priceFormat({
			prefix: '',
			centsLimit: 0,
			clearSuffix: true,			
			thousandsSeparator: '.'
		});
	});
	function formatAngka(angka) {
		
		if (typeof(angka) != 'string') angka = angka.toString();
		
		var reg = new RegExp('([0-9]+)([0-9]{3})');
		
		while(reg.test(angka)) angka = angka.replace(reg, '$1.$2');
			return angka;
	}
	</script>	
	
	
</body>
</html>