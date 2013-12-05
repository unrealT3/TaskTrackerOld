<?php
/*
* tasks.php
* this handles the tasks
*
* author:Trevor Hebert
*
*/

class Tasks extends Controller{
    function __construct(User $user){
        parent::__construct();
        $this->user = $user;


        if($this->user->isLoggedIn()){

        }
        else
        {
            header('location: login');



    }
    }

    function index(){
        $this->view->objects = $this->model->getTasks();
        $this->view->user = $this->user;
        $this->view->render('tasks/index');

    }

    function add(){
        $this->view->user = $this->user;
        $this->view->render('tasks/add');
    }

    function addTask(){
        $this->model->addTask();
    }

    function addSuccess(){
        $this->view->user = $this->user;
        $this->view->msg = "Successfully added task";
        $this->index();
    }
}