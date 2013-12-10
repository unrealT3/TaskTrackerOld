<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the login controller
 */
class Login extends Controller{

	function __construct(User $user, $controllerName, FileLoader $fileLoader) {
		parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;
        $this->user = $user;
        $page = new Page($controllerName);
        $this->view->page = $page;
	}

    /*
     * renders index page
     */
	function index(){
		$this->view->render('login/index');
	}

    /*
     *  login page
     */
	function login(){
		$userInfo = $this->model->AttemptLogin();
        if($userInfo[0]){
            $this->user->authenticated($userInfo[1]);
        }

	}
}
?>