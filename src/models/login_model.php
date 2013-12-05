<?php
/*
* login_model.php
* this defines the login model
*
* author:Trevor Hebert
*
*/
    class Login_Model extends Model
    {
        protected $isLoggedIn;
    	public function __construct(){
    		parent::__construct();
    		
    	}
    	public function attemptLogin(){
    		
    		$sth = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
			$sth->execute(array(
				':username' => $_POST['username'],
				':password' => $_POST['password']
			));
			

			$count = $sth->rowCount();
			
			if($count > 0){ //there is a user
                $isLoggedIn = true;
                while($row = $sth->fetch(PDO::FETCH_ASSOC))
                {
                    $resultData[] = $row;

                }

			}
			else{
				//no dice
				$isLoggedIn = false;
			}

            return array($isLoggedIn, $resultData[0]);
			
    	}
    }
?>