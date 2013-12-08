<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This handles the user dashboard
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