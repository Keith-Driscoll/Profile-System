<?php

	//checks if player is logged in and displays navbar accordingly
	$login = new Login();
	if ($login->isUserLoggedIn() == true) {
		if ($_SESSION['user_name'] == 'admin' || $_SESSION['user_name'] == 'sofiane'){
	   		include("segments/logged_in.php");
	   	} else {
	   		header("Location: http://www.ggleagues.com/permissions.php");
	    	exit;
	   	}
	} else {
	    //include("segments/not_logged_in.php");
	    header("Location: http://www.ggleagues.com/permissions.php");
	    exit;
	}
?>