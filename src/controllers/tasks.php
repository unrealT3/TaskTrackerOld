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
}