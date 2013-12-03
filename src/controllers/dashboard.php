<?php
/*
* Dashboard.php
* this handles the user dashboard
*
* author:Trevor Hebert
*
*/

class Dashboard extends Controller{
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if($logged == false){
			Session::destroy();
			header('location: login');
			exit;
		}
		
	}
	
	function index(){
		
		$this->view->render('dashboard/index');
	}
	
	function logout(){
		Session::destroy();
		
		header('location: ../login');
		exit;
	}
	
}
?>