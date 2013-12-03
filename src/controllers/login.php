<?php
/*
* login.php
* this handles the login
*
* author:Trevor Hebert
*
*/
class Login extends Controller{
	function __construct() {
		parent::__construct();
		
		
	}
	
	function index(){
		
		$this->view->render('login/index');
	}
	
	function run(){
		$this->model->run();
	}
}
?>