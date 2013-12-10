<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 09/12/13
 * Time: 9:11 PM
 */

class Page{

    public $pageName;
    function __construct($pageName){
        $this->pageName = $pageName;
    }

    function getPageName(){
        return $this->pageName;
    }
}