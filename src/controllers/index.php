<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:28 PM
 *
 * This is index controller
 */
class Index extends Controller{
	function __construct(User $user) {
		parent::__construct();
		$this->user = $user;
	}

    /*
     * renders index page
     */
	function index(){
        $this->view->user = $this->user;
		$this->view->render('index/index');
	}

    /*
     * renders details page
     */
	function details(){
		$this->view->render('index/index');
	}
}
?>