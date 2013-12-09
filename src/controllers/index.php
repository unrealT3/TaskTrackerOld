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

    /**
     * The contruct passes the user, controller name and fileloader to the parent class
     * Also gives the user object to the view object
     *
     * @param User $user - current user object
     * @param $controllerName - controller name
     * @param FileLoader $fileLoader - file loader to load files
     */
    function __construct(User $user, $controllerName, FileLoader $fileLoader) {

		parent::__construct($controllerName, $fileLoader);
        $this->view->user = $user;



	}

    /*
     * renders index page
     */
	function index(){
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