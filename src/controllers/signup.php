<?php

class Signup extends Controller{
    function __construct() {
        parent::__construct();


    }

    function index(){

        $this->view->render('signup/index');
    }

    function run(){
        $this->model->run();
    }

    function success(){
        $this->view->render('signup/success');
    }
}
?>