<?php

/*
* error.php
* this handles the page errors
*
* author:Trevor Hebert
*
*/
class Error extends Controller {
	
	function __construct(User $user) {
		parent::__construct();
        $this->user = $user;
		
		
		
	}
	
	function index(){
            $this->view->user = $this->user;
			$this->view->msg = '<hr /> this page doesnt exist';
			$this->view->render('error/index');
		}
}

?>