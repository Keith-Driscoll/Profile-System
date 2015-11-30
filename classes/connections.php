<?php
	function db_connect(){
		
		$servername = "localhost";
		$username = "ggl_adam";
		$password = "lugubrious7947";
		$dbname = "ggl_misc";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if (mysqli_connect_error()) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		} else {
			//echo "Connection successful <br>";
			return $conn;
		}
	}
?>