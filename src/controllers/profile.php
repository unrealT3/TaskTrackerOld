<?php
/*
 * profile.php
 * this handles the user profile
 *
 */

class Profile extends Controller{
    function __construct(User $user){
        parent::__construct();
        $this->user = $user;
    }

    function index(){
        $this->view->objects = $this->model->getProfileInfo();
        $this->view->user = $this->user;

        $this->view->render('profile/index');
    }
}