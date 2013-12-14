<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 11/12/13
 * Time: 9:28 PM
 */

class MenuItem {

    public $menuItemName;
    public $menuItemPath;
    public $menuItemClass;

    function __construct($menuItemName, $menuItemPath = null, $menuItemClass = null)
    {
        if($menuItemPath)
        {
            $this->menuItemPath = $menuItemPath;
        }
        if($menuItemClass)
        {
            $this->menuItemClass = $menuItemClass;
        }
        $this->menuItemName = $menuItemName;
    }




} 