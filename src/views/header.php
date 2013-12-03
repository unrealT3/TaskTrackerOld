<!DOCTYPE html>
<html>
	<head>
		<title>MVC</title>
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery2.0.3.js"></script>
	</head>
	
	<body>
		<?php Session::init(); ?>
		<div id="header">
			Header
			<br />
			<a href="<?php echo URL; ?>index">Index</a>
			<a href="<?php echo URL; ?>help">Help</a>
			<?php if (Session::get('loggedIn') == true){?>
				<a href="<?php echo URL;?>dashboard/logout">Logout</a>
			<?php }else{?>
				<a href="<?php echo URL;?>login">Login</a>
				<?php } ?>
				
			
		</div>
		
		<div id="content">
			
		
