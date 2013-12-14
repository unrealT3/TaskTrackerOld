<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:00 PM
 *
 * This starts the application
 */

//
require 'libs/FileLoader.php';
//base files to be loaded
$libraryFiles = array("Bootstrap", "Controller", "View", "Model", "Database", "Session", "User", "Page", "Menu", "MenuItem");
$configFiles = array("paths", "database");


//load files
$fileLoader = new FileLoader();
$fileLoader->loadConfigFiles($configFiles);
$fileLoader->loadLibraryFiles($libraryFiles);

//start app and give it the fileloader
$app = new Bootstrap($fileLoader);
?>