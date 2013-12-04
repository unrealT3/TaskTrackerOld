<?php
/*
 * profile.php
 * this handles the user profile
 *
 */

class Profile extends Controller{
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false){
            Session::destroy();
            header('location: '.URL .'login');
            exit;
        }
    }

    function index(){
        $this->view->objects = $this->model->getProfileInfo();

        $this->view->render('profile/index');
    }
}