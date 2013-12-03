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