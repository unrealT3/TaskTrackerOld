<?php
/*
* signup_model.php
* this defines the signup model
*
* author:Trevor Hebert
*
*/
class Signup_Model extends Model
{
    public function __construct(){
        parent::__construct();

    }
    public function run(){

        $sth = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $sth->execute(array(
            ':username' => $_POST['username']
        ));

        //$data = $sth->fetchAll();
        $count = $sth->rowCount();

        if($count == 0){ //there is no user with that username
            //add user to the database
            $insertQuery = $this->db->prepare("INSERT into users VALUES ('',:username,:password,:email, :firstName, :lastName)  ");
            $insertQuery->execute(array(
                ':username' => $_POST['username'],
                ':password' => $_POST['password'],
                ':email' => $_POST['email'],
                ':firstName' => $_POST['firstName'],
                ':lastName' => $_POST['lastName']
            ));

            header('location: ../signup/success');


        }
        else{ //there is already a user with that username
            //tell them to fuck off
            header('location: ../signup');

        }

    }
}
?>