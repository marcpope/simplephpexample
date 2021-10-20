<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// see if user is logged in (example session)
$loggedIn  = 0;
$userData  = @$_SESSION['userData'];
$firstName = "";
$lastName  = "";
$email     = "";

if (@$userData['userid']) {
	$loggedIn  = 1;
	$firstName = @$userData['firstname'];
	$lastName  = @$userData['lastname'];
	$email     = @$userData['email'];
	$userid    = @$userData['userid'];
}

//autoload everything in classes folder

spl_autoload_register('myAutoLoader');
	
function myAutoLoader($className) {
		$path = "classes/";
		$ext  = ".php";
		$fp   = $path . $className . $ext;
				
		// check if class exists
		if (!file_exists($fp)) {
			return false;
		  }
		include_once($fp);
	  }

?>
