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

	function __construct(User $user) {
		parent::__construct();
        $this->user = $user;
	}

    /*
     * renders index page
     */
	function index(){
		$this->view->user = $this->user;
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