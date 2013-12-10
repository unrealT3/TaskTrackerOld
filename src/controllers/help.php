<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is the help controller
 */
	class Help extends Controller {
		function __construct(User $user) {
			parent::__construct();
            $this->user = $user;
            $page = new Page($controllerName);
            $this->view->page = $page;
		}
		
		function index(){
            $this->view->user = $this->user;
			$this->view->render('help/index');
		}
		
		public function other($arg = false) {
			
			
			require 'models/help_model.php';
			$model = new Help_Model();
		}
	}
?>