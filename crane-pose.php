<!DOCTYPE html>
<?php
require('includes/config.php');
if( !$user->is_logged_in() ){ header('Location: yoga_register.php'); }
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyYoga - Crane</title>

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
  						<li><a href="index.html"><i class="fa fa-home"></i><br>Home</a>
              </li>
  						<li class="active">
  							<a href="poses.php"><i class="fa fa-camera"></i><br>Poses</a>
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
                      <h1>Crane(Crow Pose)</h1>
                  </div>
              </div>
          </div>
      </div>

      <!-- Image -->
      <div class="image-container">
        <div class="container">
          <div class="row">
        <img class="crane-image" src="assets/img/poses/crane.jpg">
      </div>
    </div>
  </div>

      <!-- Difficulty Bar-->
      <div class="difficulty-container">
        <div class="container"
        <div class="row">
          <div class=" difficulty-text wow fadeIn">
            <h1>Difficulty</h1>
            </div>
          <div class=" difficulty-text2 wow fadeIn">
            <h2>Hover to see</h2>
          </div>
          <div class="col-sm-12 difficulty-bar1">
          </div>

        </div>
      </div>
      </div>

      <!-- Steps -->
      <div class="steps-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 steps-text wow fadeInLeft">
        <h1>Steps</h1>
        <h2>1. Begin by standing at the top of your mat in Mountain Pose (Tadasana) with your
          arms at your sides. Step your feet about as wide as your mat.</h2>
        <h2>2. Bend your knees and lower your hips, coming into a squat. Separate your thighs so
          they are slightly wider than your torso, but keep your feet as close together as possible.
          If your heels lift, support them with a folded mat or blanket.</h2>
        <h2>3. Drop your torso slightly forward and bring your upper arms to the inside of your knees.
          Press your elbows along the inside of your knees and bring your palms together in prayer position.
          This is Garland Pose (Malasana).</h2>
        <h2>4. Bring your palms to the mat, keeping them about shoulder-distance apart. Spread your fingers and
          press evenly across both palms and through your knuckles.</h2>
        <h2>5. Press your shins against the back of your upper arms. Draw your knees in as close to your underarms
          as possible.</h2>
        <h2>6. Lift onto the balls of your feet as you lean forward. Round your back and draw your abdominal
          muscles in firmly. Keep your tailbone tucked in toward your heels.</h2>
        <h2>7. Look at the floor between your hands or at a point even more forward, if possible.</h2>
        <h2>8. As you continue to lean forward, lift your feet off the floor and draw your heels toward your buttocks.
          If it's difficult to lift both feet at the same time, try lifting one foot and then the other. Balance
          your torso and legs on the back of your upper arms.</h2>
        <h2>9. Keep pressing evenly across your palms and fingers, then begin to straighten your elbows.
          Keep your knees and shins hugging in tightly toward your armpits. Keep your forearms drawn
          firmly toward the midline of your body.</h2>
        <h2>10. Touch your big toes together. Draw your belly in. Breathe steadily.</h2>
        <h2>11. Hold the pose for up to one minute. To release, exhale as you slowly lower your feet to the floor,
          coming back into Garland Pose.</h2>
      </div>
    </div>
    </div>
  </div>

  <!-- Comments -->
  <!-- <div class="comment-container">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div> -->


  <!-- Footer -->
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 footer-box wow fadeInUp">
                  <h4>About Us</h4>
                  <div class="footer-box-text">
                    <p>
                      MyYoga is an online educational platform where you get to learn and experience Yoga at the comfort of your location.
                      Tutorials available are extensive, with various difficulties that can accomodate both the experienced and amateur,
                      suitable for people of all ages.
                    </p>
                    <p><a href="about.html">Read more...</a></p>
                  </div>
              </div>
              <div class="col-sm-6 footer-box wow fadeInDown">
                  <h4>Contact Us</h4>
                  <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> Address: Jalan Kontraktor U1/14, Glenpark U1,40150 Shah Alam, Selangor, Malaysia</p>
                    <p><i class="fa fa-phone"></i> Phone: +6 03-5565 0538</p>
                    <p><i class="fa fa-user"></i> Skype: my_yoga_life</p>
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
