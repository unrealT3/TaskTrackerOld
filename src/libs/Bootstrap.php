<?php

/*
* Bootstrap.php
* this handles the application
* todo:make fileloader class
* author:Trevor Hebert
*
*/
class Bootstrap {

    protected $user;
	function __construct() {

        //grabs the url
        //ToDo: make this a getUrl function(returns array)
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');	
			
		$url = explode('/', $url);

        //do this after
        require 'controllers/user.php';
        $this->user = new User();
<<<<<<< HEAD

        if(!$url[0]){
            $url[0] = "index";
        }
=======
        /*
		 *
         * ToDo: make this a processUrl function(array $url)
		 * Empty url. Home page
		 * creates index controller
		 * calls index function
		 * stops execution
		 */
		if(empty($url[0])){
			$url[0] = 'index';
		}
>>>>>>> 07cbacaec6e6cfdf279713ba286f0a6da795a153



        /*
         * ToDo:put this in processUrl
         * assumes a url was typed in
         * requires controller file
         * if controller file not found then error
         */
		$controllerFile = 'controllers/' . $url[0] . '.php';
		if (file_exists($controllerFile)){
			require $controllerFile;
		}
		else{
			$this->error(); // stops program
			//require 'controllers/error.php';
			//$controller = new Error();
			//return false;
		}

        /*
         *
         * creates an instance of the controller
         * calls load model to load the model
         */


        //todo:put this in processUrl
		$controller = new $url[0]($this->user);
		$controller->loadModel($url[0]);



		/*
		 * //todo:put this in processUrl
		 * checks if argument was typed in
		 * checks if method exists in controller
		 * if not set error
		 */
		if(isset($url[2])){
			if(method_exists($controller, $url[1])){
				$controller->{$url[1]}($url[2]);	
			} else{
				$this->error();
			}
			
				
		}	
		else {
			if(isset($url[1])){
				if(method_exists($controller, $url['1'])){
					$controller->{$url[1]}();
				}else{
					$this->error();
				}
			}
			else{
				$controller->index();
			}
			
		}
		
		
		
		
	}	//todo:this will be in error class
		function error() {
			require 'controllers/error.php';
			$controller = new Error($this->user);
			$controller->index();
			return false;
		}
		
			
	
}

	
?>