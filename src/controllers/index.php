<?php
/*
* index.php
* this handles the home page
*
* author:Trevor Hebert
*
*/
class Index extends Controller{
	function __construct(User $user) {
		parent::__construct();
		$this->user = $user;
	}
	
	function index(){
        $this->view->user = $this->user;
		$this->view->render('index/index');
	}
	
	function details(){
		$this->view->render('index/index');
	}
}
?>