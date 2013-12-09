<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * This defines the view
 */
class View{

	function __construct() {
		
	}
	
	public function render($name, $noInclude = false){
			
		if($noInclude == true){
			require 'views/' . $name . '.php';
		}
		else{
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';
		}
			
		
	}
}
?>