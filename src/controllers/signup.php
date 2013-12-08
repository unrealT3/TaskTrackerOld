<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the signup controller
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