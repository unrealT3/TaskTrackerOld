<?php
	
/**
 * 
 */
class Bootstrap {
	
	function __construct() {

        //grabs the url
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');	
			
		$url = explode('/', $url);
		
		
        /*
		 *
		 * Empty url. Home page
		 * creates index controller
		 * calls index function
		 * stops execution
		 */
		if(empty($url[0])){
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}



        /*
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
		$controller = new $url[0];
		$controller->loadModel($url[0]);



		/*
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
		
		
		
		
	}	
		function error() {
			require 'controllers/error.php';
			$controller = new Error();
			$controller->index();
			return false;
		}
		
			
	
}

	
?>