<?php
/*
* help.php
* this handles the help
*
* author:Trevor Hebert
*
*/
	class Help extends Controller {
		function __construct(User $user) {
			parent::__construct();
            $this->user = $user;
			
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