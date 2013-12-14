<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 11/12/13
 * Time: 9:07 PM
 */

class Menu {

    public $menuItems = array();
    function __construct(Array $menuItems)
    {
        foreach($menuItems as $menuItem)
        {
            $this->menuItems[] = new MenuItem($menuItem);
        }

    }

    public function getMenuItems($user)
    {
        if($user->isLoggedIn())
        {
            $authenticatedItems = array("Dashboard", "Tasks", "Profile", "Logout");
            $menuItems = array_merge($authenticatedItems, $this->menuItems);
            return $menuItems;
        }
        else
        {
            $unAuthenticatedItems = array("SignUp", "Login");
            $menuItems = array_merge($unAuthenticatedItems, $this->menuItems);
            return $menuItems;
        }


    }
} 