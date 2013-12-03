<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 02/12/13
 * Time: 8:36 PM
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