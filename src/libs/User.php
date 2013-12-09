<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * This handles the user object
 *
 * Starts the session
 * Sets the session info
 */

class User{



    function __construct(){

        Session::init();
        //Session::set('isLoggedIn', false);
    }

    function authenticated(array $user){
        Session::init();
        Session::set('isLoggedIn', true);
        Session::set('userID', $user['id']);
        Session::set('username', $user['username']);
        Session::set('email', $user['email']);
        Session::set('firstName', $user['firstName']);
        Session::set('lastName', $user['lastName']);



        header('location: ../tasks');
    }

    function isLoggedIn(){
        Session::init();
        if(Session::get('isLoggedIn') == true){
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function getUsername(){
        return Session::get('username');
    }
    function getFirstName(){
        return Session::get('firstName');
    }


}