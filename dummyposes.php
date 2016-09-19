<!DOCTYPE html>
<?php require('includes/config.php');
  if($user->is_logged_in()){ header('Location: poses.php'); }
?>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Poses</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" height="80px"/a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><i class="fa fa-home"></i><br>Home</a></li>
						<li class="active">
							<a href="dummyposes.php"><i class="fa fa-camera"></i><br>Poses</a>
						</li>
						<li>
							<a href="faq.html"><i class="fa fa-tasks"></i><br>FAQ</a>
						</li>
						<li>
							<a href="about.html"><i class="fa fa-user"></i><br>About</a>
						</li>
            <li>
              <a href="yoga_register.php"><i class="fa fa-envelope"></i><br>Register</a>
            </li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-camera"></i>
                        <h1>Poses /</h1>
                        <p>The best of yoga poses online</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Poses -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">

			                	    <img src="assets/img/poses/PeacockDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Peacock Pose</h3>
			                		<p>Peacock Pose, symbolizing big things—immortality and love—according to Hindu lore about the Peacock.</p>
			                	</div>
			                </div>
		                </div>
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">

			                	    <img src="assets/img/poses/EagleDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Eagle pose</h3>
			                		<p>You need strength, flexibility, and endurance, and unwavering concentration for Eagle Pose.</p>
			                	</div>
			                </div>
		                </div>
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">

			                	    <img src="assets/img/poses/NooseDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Noose Pose</h3>
			                		<p>In the noose pose, the arms are wrapped around the squatting legs and the hands are clasped behind, forming a “noose.”</p>
			                	</div>
			                </div>
		                </div>
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">

			                	    <img src="assets/img/poses/TwoFootDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Upward Facing Two-Foot Pose</h3>
			                		<p>Can you practice Wheel with straight arms and Headstand without strain? Then, you’re ready. </p>
			                	</div>
			                </div>
		                </div>
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">

			                	    <img src="assets/img/poses/CraneDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Crane Pose</h3>
			                		<p>A compact arm balance, Bakasana tones and strengthens the abs and arms.</p>
			                	</div>
			                </div>
		                </div>
		                <div class="portfolio-box web-design">
		                	<
			                	    <img src="assets/img/poses/BoundAngleDummy.jpg">

			                	<div class="portfolio-box-text">
			                		<h3>Bound Angle Pose</h3>
			                		<p>Bound Angle Pose counteracts chair- and cardio-crunched hips. </p>
			                	</div>
			                </div>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
                          <p>
                            MyYoga offers professionally-filmed online yoga classes taught by experienced, certified yoga teachers to customers around the world. We believe that yoga should be accessible to everyone and our classes are designed to give you an in-studio experience, at an affordable price, in your own home.
                          </p>
                          <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
                          <p><i class="fa fa-map-marker"></i> Address: Jalan Kontraktor U1/14, 40150, Shah Alam, KDUUC</p>
                          <p><i class="fa fa-phone"></i> Phone: 016 989 6654</p>
                          <p><i class="fa fa-user"></i> Skype: My_Yoga_Live</p>
                          <p><i class="fa fa-envelope"></i> Email: <a href="">admin@myyoga.co.my</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2012 MyYoga - All rights reserved.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>
