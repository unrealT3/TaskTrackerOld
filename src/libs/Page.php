<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 09/12/13
 * Time: 9:11 PM
 */

class Page{

    public $pageName;
    public $menu;

    function __construct($pageName, User $user){
        $this->pageName = $pageName;

        $menu = new Menu(array("Index","Login", "Sign-Up"));
        $this->menu = $menu->getMenuItems($user);

    }

    function getPageName(){
        return $this->pageName;
    }
}