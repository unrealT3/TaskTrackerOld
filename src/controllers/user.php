<?php
/*
 * user.php
 * This class handles the user object.
 *
 *
 * Starts the session
 * Sets session info
 *
 */

class User extends Controller{

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


}