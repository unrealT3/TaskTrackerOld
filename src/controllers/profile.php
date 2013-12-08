<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the profile controller
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