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
	
	function __construct(User $user, $controllerName, FileLoader $fileLoader) {
		parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;
        $page = new Page($controllerName);
        $this->view->page = $page;
		
		
	}
	
	function index(){
			$this->view->msg = '<hr /> this page doesnt exist';
			$this->view->render('error/index');
		}
}

?>