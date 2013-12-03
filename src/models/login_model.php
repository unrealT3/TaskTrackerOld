<?php
    class Login_Model extends Model
    {
    	public function __construct(){
    		parent::__construct();
    		
    	}
    	public function run(){
    		
    		$sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = :password");
			$sth->execute(array(
				':login' => $_POST['login'],
				':password' => $_POST['password']
			));
			
			//$data = $sth->fetchAll();
			$count = $sth->rowCount();
			
			if($count > 0){ //there is a user
                // grab user id
                $userID = $sth->fetch(PDO::FETCH_ASSOC);
				Session::init();
                //set session variables
				Session::set('loggedIn', true);
                Session::set('userID', $userID['id']);
                //redirect to dashboard
				header('location: ../dashboard');

			}
			else{
				//no dice
				header('location: ../login');

			}
			
    	}
    }
?>