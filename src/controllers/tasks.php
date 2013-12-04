<?php
/*
* tasks.php
* this handles the tasks
*
* author:Trevor Hebert
*
*/

class Tasks extends Controller{
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
        $this->view->objects = $this->model->getTasks();

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