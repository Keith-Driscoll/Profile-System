<?php
	function db_connect(){

		$servername = "localhost";
		$username = "ggl_keith";
		$password = "x14346081";
		$dbname = "x14346081";

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