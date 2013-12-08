<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * This handles the Session info
 */
    class Session{
    	public static function init(){
    		@session_start();
    	}
		
    	public static function set($key, $value)
		{
			$_SESSION[$key] = $value;
		}
		
		public static function get($key)
		{
			if(isset($_SESSION[$key])){
				return $_SESSION[$key];	
			}


			
		}
		public static function destroy()
		{
			session_destroy();
		}
    }
?>