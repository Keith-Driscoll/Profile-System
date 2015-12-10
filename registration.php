<?php 
	// prints the last error
	mysqli_errno();


	// load the login class
	require_once("classes/Login.php");

	// create a login object. when this object is created, it will do all login/logout stuff automatically
	// so this single line handles the entire login process. in consequence, you can simply ...
//	include 'classes/doLoginCheck.php';
	$login = new Login();
	if ($login->isUserLoggedIn() == true) {
	    include("segments/logged_in.php");
	} else {
	    include("segments/not_logged_in.php");
	}
?>
Thank you for signing up! </br> A verification email has been sent to you.</br> Please follow the instruction to complete your account set up. </br> Thank you.
<!-- Register Form -->
<form id="register-form" onsubmit="window.location.reload() || alert('Registration successfull! Please login.');" action="registration.php" method="post" style="display: none;">
	<!-- Username -->
	<div class="form-group">
		<input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Username" value="" required="">
	</div>
	<!-- Email -->
	<div class="form-group">
		<input type="email" name="user_email" id="login_input_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="">
	</div>
	<!-- Password -->
	<div class="form-group">
		<input type="password" name="user_password_new" id="login_input_password_new" tabindex="2" class="form-control" autocomplete="off" placeholder="Password" required="">
	</div>
	<!-- Password Repeat -->
	<div class="form-group">
		<input type="password" name="user_password_repeat" id="login_input_password_repeat" tabindex="2" class="form-control" autocomplete="off" placeholder="Confirm Password" required="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<!-- Submit Form -->
				<input type="submit" name="register" id="register" tabindex="4" class="form-control btn btn-register" value="Signup Now">
			</div>
		</div>
	</div>
</form><!-- ./Register Form END -->

<!-- Includes footer section of webpage -->
<?php include "segments/footer.php"?>