<?php

/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the application class
 */
class Bootstrap {

    protected $user;
    protected $fileLoader;

    //takes in a fileLoader object
	function __construct(FileLoader $fileLoader) {

        //create the fileloader
        $this->fileLoader = $fileLoader;
        //create a user
        $this->user = new User();

        //start the app
        $url = $this->getUrl();

        $this->processUrl($url, $this->user);
	}

    /*
        * This function gets the url
        *
        * @return array
        */
    function getUrl(){
        $url = isset($_GET['url']) ? $_GET['url'] : 'index'; //if no url is set then set url to index for homepage
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }


    /*
     * This function processes the url and grabs the necessary controllers
     *
     * $params url - an array of urls inputs
     * @params user - the user object
     * @error calls error controller
     */

    function processUrl(array $url, User $user){

        if($this->fileLoader->checkFileExists(($url[0]), 'controller')){
            $this->fileLoader->loadControllerFile($url[0]);
            $controller = new $url[0]($user);
            $controller->loadModel($url[0]);

            // [0]controller/[1]method/[2]ARGUMENT
            if(isset($url[2])){ //if argument was set
                //check if method exists
                if(method_exists($controller, $url[1])){
                    //call that method with the inputted argument
                    $controller->{$url[1]}($url[2]);
                }
                else //no method create error
                {
                    $this->createError($user);
                }


            }
            else if(isset($url[1])){ // if method was set
                    if(method_exists($controller, $url['1'])){
                        $controller->{$url[1]}();
                    }else{
                        $this->fileLoader->loadControllerFile('error');
                        $controller = new Error($user);
                        $controller->index();
                        //return false;
                    }
                }
            else{
                //call index of controller
                $controller->index();
            }


        }
        else
        {
            $this->createError($user);
            //return false;
        }
    }

    function createError($user){
        $this->fileLoader->loadControllerFile('error');
        $controller = new Error($user);
        $controller->index();
    }
		
			
	
}

	
?>