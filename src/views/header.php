<?php
$user = $this->user;
$page = $this->page;
$menu = $this->page->menu;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MVC</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/public/css/default.css" />
        <link href='http://fonts.googleapis.com/css?family=Gorditas:400,700' rel='stylesheet' type='text/css'>

	</head>

	
	<body class="<?php echo $page->pageName; ?>">

		<?php Session::init(); ?>
		<div id="header">


        <ul class="nav">
            <?php if($user->isLoggedIn()){?>
            <li><a class="dashboard" href="<?php echo URL; ?>dashboard">Dashboard</a></li>
            <li><a class="profile" href="<?php echo URL; ?>profile">My Profile</a></li>
            <li><a class="tasks" href="<?php echo URL; ?>tasks">My Tasks</a></li>
            <li><a class="logout" href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
            <?php }
            else
            {?>
            <li><a class="index" href="<?php echo URL; ?>index">Index</a></li>
            <li><a class="login" href="<?php echo URL; ?>login">Login</a></li>
            <li><a class="signup" href="<?php echo URL; ?>signup">Sign-up</a></li>
            <?php }?>
        </ul>

            <?php foreach($menu as $menuItem)
                {
                    print_r($menuItem);
                }
            ?>

				
			
		</div>
		
		<div id="content">
			
		
