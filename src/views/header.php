<?php
$user = $this->user;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MVC</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/public/css/default.css" />
        <link href='http://fonts.googleapis.com/css?family=Gorditas:400,700' rel='stylesheet' type='text/css'>

	</head>

	
	<body>

		<?php Session::init(); ?>
		<div id="header">

			<a href="<?php echo URL; ?>index">Index</a>
			<a href="<?php echo URL; ?>help">Help</a>
            <?php if($user->isLoggedIn()){?>
            <a href="<?php echo URL; ?>profile">My Profile</a>
            <a href="<?php echo URL; ?>tasks">My Tasks</a>
            <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php }
            else
            {?>
            <a href="<?php echo URL; ?>login">Login</a>
            <?php }?>


				
			
		</div>
		
		<div id="content">
			
		
