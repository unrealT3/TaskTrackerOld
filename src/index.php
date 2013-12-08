<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:00 PM
 *
 * This starts the application
 */

//library & configfiles
require 'libs/FileLoader.php';
//base files to be loaded
$libraryFiles = array("Bootstrap", "Controller", "View", "Model", "Database", "Session", "User");
$configFiles = array("paths", "database");


//le application
$fileLoader = new FileLoader();
$fileLoader->loadConfigFiles($configFiles);
$fileLoader->loadLibraryFiles($libraryFiles);

$app = new Bootstrap($fileLoader);
?>