<?php
	// load the login class
	require_once("classes/Login.php");
	$login = new Login();
	//logged in navigation bar view (login session starts)
	if ($login->isUserLoggedIn() == true) {
	    include("segments/logged_in.php");
	} else {
		// not-logged in navigation bar view (login/signup button)
	    include("segments/not_logged_in.php");
	}

	// prints the last error
	mysqli_errno();
	//importing jQuery library
?><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//fades in all the content within the page wrapper
        $("#wrapper").fadeIn(2500);
});
</script>

	<div id="sidebar" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
		<!-- sidemenu -->
        <ul id="sidemenu">
            <!-- <li>
				<a class="" href="#">Home</a>
			</li> -->
			<li class="first"></li>
            <li class="item"><!-- About -->
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
<!-- wrapper -->
<div id="wrapper">
	<!-- main left content-->
	<div class="main-left col-lg-6 col-md-6 col-sm-12">
		<!-- container -->
		<div class="container-fluid">
			<div class="profile-section col-lg-12 col-sm-12">
				<h4>Main Profile</h4>
				<!-- profile image -->
				<div class="profile-wrap col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img class="img-responsive" src="http://placehold.it/250" alt="profile_photo"/>
				</div><!-- ./profile image end -->

				<!-- profile info start -->
				<div class="profile-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h4>Username</h4>
					<p class="profile-text">
						text
					</p>
					<h4>Email</h4>
					<p class="profile-text">
						text
					</p>
					<h4>Website</h4>
					<p class="profile-text">
						text
					</p>
					<h4>Bio</h4>
					<p class="profile-text">
						text
					</p>
				</div><!-- ./profile info end -->
				<div class="clearfix"></div>
			</div><!-- ./profile section end -->
			<div class="clearfix"></div>

			<!-- social section-->
			<div class="profile-section col-lg-12">
				<h4>Social Media</h4>
				<!-- left col start -->
				<div class="profile-wrap col-lg-6 col-md-6 col-sm-12">
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitch fa-stack-1x"></i>
						</span>
						Twitch
					</p><!-- ./Link end -->
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x"></i>
						</span>
						Twitter
					</p><!-- ./Link end -->
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x"></i>
						</span>
						Facebook
					</p><!-- ./Link end -->
				</div><!-- ./left col end-->

				<!-- right col start -->
				<div class="profile-wrap col-lg-6 col-md-6 col-sm-12">
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitch fa-stack-1x"></i>
						</span>
						Twitch
					</p><!-- ./Link end -->
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x"></i>
						</span>
						Twitter
					</p><!-- ./Link end -->
					<!-- Link start -->
					<p class="profile-text">
						<span class="fa fa-stack fa-lg">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x"></i>
						</span>
						Facebook
					</p><!-- ./Link end -->
				</div><!-- ./right col end-->
			</div><!-- ./social section end -->
			<div class="clearfix"></div>

			<!-- other section -->
			<div class="profile-section col-lg-12">
				<div class="profile-wrap">
					<h4>Advert Placement</h4>
					<p class="profile-text">
						Advert box
					</p>
				</div>
			</div><!-- ./other section end -->
		</div><!-- ./container end -->

	</div><!-- ./main left end-->
	<!-- main right content-->
	<div class="main-right col-lg-6 col-md-6 col-sm-12">
		<!-- left col content -->
		<div class="left-col col-lg-6 col-md-6 col-sm-12">
			<!-- teams section-->
			<div class="profile-section">
				<h4>Teams</h4>
				<!-- team section -->
				<div class="team-section">
					<img class="team-icon" src="http://placehold.it/50" alt="icon"/>
					<p class="team-text">
						team
					</p>
				</div><!-- ./team section end-->
				<div class="clearfix"></div>
				<!-- team section -->
				<div class="team-section">
					<img class="team-icon" src="http://placehold.it/50" alt="icon"/>
					<p class="team-text">
						team
					</p>
				</div><!-- ./team section end-->
				<div class="clearfix"></div>
				<!-- team section -->
				<div class="team-section">
					<img class="team-icon" src="http://placehold.it/50" alt="icon"/>
					<p class="team-text">
						team
					</p>
				</div><!-- ./team section end-->
				<div class="clearfix"></div>

			</div><!-- ./teams section end -->

			<!-- achievements section -->
			<div class="profile-section">
				<h4>Achievements</h4>
				<!-- achievements section -->
				<?php include "segments/achievements.html"; ?>
				<!-- ./achievements-section end -->
				<div class="clearfix"></div>
			</div><!-- ./profile-section end -->
		</div><!-- ./left col end -->

		<!-- right col content -->
		<div class="right-col col-lg-6 col-md-6 col-sm-12">
			<!-- match-history section -->
			<div class="profile-section">
				<h4>Match History</h4>

				<div class="testbox">Match 1</div>
				<div class="testbox">Match 2</div>
				<div class="testbox">Match 3</div>
				<div class="testbox">Match 4</div>

			</div> <!--./ match-history section end -->
		</div><!-- ./right col end -->
	</div><!-- ./main right end -->
	<div class="clearfix"></div>

</div><!-- ./wrapper end -->
<!-- Profile Stylesheet -->
<link href="css/profile.css" rel="stylesheet" type="text/css" />