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
	
	function index(){
		$this->view->user = $this->user;
		$this->view->render('login/index');
	}
	
	function login(){
		$userInfo = $this->model->AttemptLogin();
        echo $userInfo;
        echo 'geg';
        if($userInfo[0]){
            $this->user->authenticated($userInfo[1]);
            echo $this->user->getUsername();


        }

	}
}
?>