<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Administrator Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLos Administrator Login">
	<meta name="author" content="Andrew Brian Osmond">

	<!-- The styles -->
	<link id="bs-css" href="<?=base_url()?>css/bootstrap-cerulean.css" rel="stylesheet">
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

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<img src="<?=base_url()?>img/bank_papua.jpg">
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						
					</div>
					
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="<?=set_value('username')?>" />
								<?php echo form_error('username'); ?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="<?=set_value('password')?>" />
								<?php echo form_error('password'); ?>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-large btn-inverse">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
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
	<script src="js/charisma.js"></script>
	
		
</body>
</html>
