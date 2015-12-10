<!DOCTYPE html>
<html>
<head>
<title>Profile system</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
	<?php
	// load the login class
	require_once("classes/Login.php");
	$login = new Login();
	if ($login->isUserLoggedIn() == true) {
	    include("segments/logged_in.php");
	} else {
	    include("segments/not_logged_in.php");
	}

	// prints the last error
	mysqli_errno();
?>

<script>
    $(document).ready(function()
      {
		  //loads xml document
        $.get('xml/namebank.xml', function(d){
        $('body').append('<dl />');

        $(d).find('book').each(function(){

            var $id = $(this);
            var name = $name.attr("name");
			//searches for 'name' inside my xml document
            var html = '<div class="name">' + $(this).find(name).text() + '<br/></div>';

            $('dl').append($(html));
			//applys the 'fadeout' function on the div named #loading
            $('#loading').fadeOut(1400);
        });
    });
});
</script>


<br/>
<div id="loading">
	LOADING
	</div>
<div id="members">
	<center>
	<h4>Members List</h4>
	<p class="members" style="display:none;">members listed here</p>
	</center>
</div>

<footer>
	<!-- Bootstrap scripts jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../javascript/bootstrap.min.js"></script>
	<script src="../javascript/login-popup.js"></script>
	<!-- Modernizr -->
	<script src="javascript/modernizr.js"></script>
</footer>
</body>
</html>