<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the tasks controller
 */

class Tasks extends Controller{
    function __construct(User $user, $controllerName, FileLoader $fileLoader){
        parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;
        $this->view->objects = $this->model->getTasks();

        if(!$user->isLoggedIn()){
            header('location: login');
        }
    }

    function index(){

        $this->view->render('tasks/index');

    }

    function add(){
        $this->view->render('tasks/add');
    }

    function addTask(){
        $this->model->addTask();
    }

    function addSuccess(){
        $this->view->msg = "Successfully added task";
        $this->index();
    }
}