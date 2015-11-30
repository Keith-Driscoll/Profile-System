<?php 
	// prints the last error
	mysqli_errno();
	// load the login class
	include "classes/connections.php";
	require_once("classes/Login.php");
	$login = new Login();
	if ($login->isUserLoggedIn() == true) {
	    include("segments/logged_in.php");
	} else {
	    include("segments/not_logged_in.php");
	}
	

	$db_connection = db_connect();


	if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash'])){

		$email = ($_GET['email']);
		$hash = ($_GET['hash']);
		

		$sql = "SELECT player_email, verification_hash, is_verified FROM player WHERE player_email = '".$email."' AND verification_hash = '".$hash."'";
	
		$result = $db_connection->query($sql);
		
		if ($result->num_rows == 1){
			$entry = $result->fetch_assoc();
			
			if ($entry['is_verified'] == 0){
				$sql = "UPDATE player SET is_verified = 1, verification_hash = NULL WHERE player_email = '".$email."' "; 
				$db_connection->query($sql);
				echo"Your account has been successfully verified!";
			
			} else {
				echo"It appears that you are already registered and do not need to verify your account again.";	
			}
		
		} else {
			echo"It appears that something has gone wrong. Please request a new verification email or contact support for further help.";
		
		}
	} else {
		
		echo"It appears that something has gone wrong. Please request a new verification email or contact support for further help." ;
	}



?>
<!-- Register Form -->






<!-- Includes footer section of webpage -->
<?php include "segments/footer.php"; ?>	