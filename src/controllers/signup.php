<?php
/*
* signup.php
* this handles the sign ups
*
* author:Trevor Hebert
*
*/

class Signup extends Controller{
    function __construct(User $user) {
        parent::__construct();
        $this->user = $user;


    }

    function index(){
        $this->view->user = $this->user;
        $this->view->render('signup/index');
    }

    function run(){

        $this->model->run();
    }

    function success(){
        $this->view->user = $this->user;
        $this->view->render('signup/success');
    }
}
?>