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
    function __construct(User $user, $controllerName, FileLoader $fileLoader){
        parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;
        $this->view->objects = $this->model->getProfileInfo();
        $page = new Page($controllerName);
        $this->view->page = $page;
    }

    function index(){
        $this->view->render('profile/index');
    }
}