<?php

/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the error controller
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