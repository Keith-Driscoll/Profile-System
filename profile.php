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
<!--
		To update profile settings, an Icon will be provided
		to enable profile fields to be editable, per page.
			About
				username
				email
				country
				website
				bio
			Profile
				game accounts
				achievements
				social
				teams
			Participation
				recent matches
				match history
			Upgrade
				subscription plans
				features
		-->
<!-- sidebar -->
<div id="sidebar">
		<!-- sidemenu -->
        <ul id="sidemenu">
            <!-- <li>
				<a class="noflyout" href="#">Home</a>
			</li> -->
			<li class="first"></li>
            <li class="item noflyover"><!-- About -->
				<a class="selected" href="#">
					<i class="fa fa-user fa-2x"></i><br/>
					<span>About</span>
				</a>
            </li><!-- ./ About end -->

            <li class="item"><!-- Statistics -->
				<a href="#">
					<i class="fa fa-bar-chart fa-2x"></i><br/>
					<span class="">Stats</span>
				</a>
            </li><!-- ./Statistics end -->

            <li class="item"><!-- Participation -->
				<a href="#">
					<i class="fa fa-history fa-2x"></i><br/>
					<span class="">History</span>
				</a>
            </li><!-- ./Participation end -->
            <li class="item settings"><!-- Settings -->
				<a href="#">
					<i class="fa fa-edit fa-2x"></i><br/>
					<span>Config</span>
				</a>
			</li><!-- ./Settings END -->
			<li class="last"></li>
    	</ul><!-- ./Sidemenu END -->
</div><!-- ./Sidebar END -->

<!-- Main Body Styling -->
	<div class="wrapper col-lg-12">
		<!-- content left -->
		<div class="content-left col-lg-offset-1 col-lg-5">
left
		</div><!-- ./ content left end -->
		<!-- Content right -->
		<div class="content-right col-lg-6">
right
		</div><!-- ./content right end -->
	</div><!-- ./Main body styling end -->

<!-- Profile Styling -->
<link href="../css/profile.css" rel="stylesheet" type="text/css" />
<?php include "segments/footer.php" ?>