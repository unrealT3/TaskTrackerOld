<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:25 PM
 *
 * This defines a controller
 */
class Controller {

	function __construct($controllerName, FileLoader $fileLoader){
        $modelName = ucfirst($controllerName) . '_Model';
		$this->view = new View();

        //create model if the file is found
        if($fileLoader->checkFileExists($controllerName, "model")){
            $fileLoader->loadModelFile($controllerName);
            $this->createModelObject($modelName);
        }


	}

    /**
     * This function instantiates a model object
     * @param $modelName - name of model object to be created
     */

    public function createModelObject($modelName){
        $this->model = new $modelName;
    }



}
?>