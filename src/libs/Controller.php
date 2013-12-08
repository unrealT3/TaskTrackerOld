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
	function __construct(){
		
		$this->view = new View();
		
	}

    //
	public function loadModel($name) {
		$path = 'models/' . $name . '_model.php';
		
		if(file_exists($path)) {
			require 'models/'  . $name . '_model.php';
			$modelName = $name . '_Model';
			$this->model = new $modelName;
		}
	}
}
?>