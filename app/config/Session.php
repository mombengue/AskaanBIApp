<?php

/**
 * session
 */
 class Session{

 	public function __construct(){

 	}

	/**
	 * verifier si connecté
	 */
	public static function islogged(){
		return isset($_SESSION['auth']);
	}

 	static public function setFlash($message, $type){
 		$_SESSION['flash'] = array(
 			'message' => $message,
 			'type'	  => $type
 		);
 	}

 	public function disconnect(){
		session_unset();
		session_destroy();
 	}
 }
