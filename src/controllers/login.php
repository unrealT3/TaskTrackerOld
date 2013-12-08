<?php
/*
* login.php
* this handles the login
*
* author:Trevor Hebert
*
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
        echo $userInfo;
        if($userInfo[0]){
            $this->user->authenticated($userInfo[1]);
        }

	}
}
?>