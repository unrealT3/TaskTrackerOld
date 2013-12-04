<?php
/*
 * index.php
 * This starts the application
 */
//use an autoloader
//library
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';
require 'libs/Database.php';
require 'libs/Session.php';

//config
require 'config/paths.php';
require 'config/database.php';
//le application
$app = new Bootstrap();
?>