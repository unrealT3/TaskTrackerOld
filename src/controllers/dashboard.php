<?php
/*
* Dashboard.php
* this handles the user dashboard
*
* author:Trevor Hebert
*
*/

class Dashboard extends Controller{
	function __construct(User $user) {
		parent::__construct();
		$this->user = $user;
		
	}
	
	function index(){
		$this->view->user = $this->user;
		$this->view->render('dashboard/index');

	}
	
	function logout(){
		Session::destroy();
		
		header('location: ../login');
		exit;
	}
	
}
?>