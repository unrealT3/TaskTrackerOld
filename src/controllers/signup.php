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
    function __construct(User $user, $controllerName, FileLoader $fileLoader) {
        parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;


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