<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * This initiates the connection to the database
 */
    class Database extends PDO
    {
    	public function __construct(){
    		parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname='. DB_NAME, DB_USER, DB_PASS );
			
    	}
    }
?>