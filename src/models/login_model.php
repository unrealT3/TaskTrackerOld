<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * The login model handles logging in
 */
    class Login_Model extends Model
    {
        protected $isLoggedIn;
    	public function __construct(){
    		parent::__construct();
    		
    	}

        /**
         * This function checks if the username and password inputted matches one from the database
         * @return array (isloggedin, $results)
         */
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