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
        <title>MyYoga - Two-Foot Staff</title>

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
                      <h1>Upward Facing Two-Foot Staff Pose</h1>
                  </div>
              </div>
          </div>
      </div>

      <!-- Image -->
      <div class="image-container">
        <div class="container">
          <div class="row">
        <img class="crane-image" src="assets/img/poses/TwoFoot.jpg">
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
          <div class="col-sm-12 difficulty-bar2">
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
        <h2>1. Begin by preparing as you would for Urdhva Dhanurasana (Upward Bow Pose). Lie on your back,
          feet on the floor, heels under the knees, and step your feet a little wider than your hips.
          Bend your arms and place your palms on the floor by your ears, fingertips facing the shoulders,
          shoulder-width apart. Pause for a moment to focus and tune in to your breathing.</h2>
        <h2>2. As you exhale, press your knees away from your torso and lift your hips, shoulders, and
          head from the floor as you straighten your arms. Widen and draw your shoulder blades toward
          your tail bone to lift your shoulders and lighten the load on your arms.</h2>
        <h2>3. Bend your arms and place the crown of your head on the floor between your hands and feet,
          keeping your elbows shoulder-width apart and directly over your wrists. To ensure that your
          neck does not become compressed, exhale, press your hands into the floor, and again draw your
          shoulder blades toward your tail bone. Keep your chest open and lifted.</h2>
        <h2>4. On your next exhalation, slide one hand past your ear to cup the back of your head,
          bringing your weight onto your forearm. Repeat the same action with the other arm, interlacing
          your fingers behind your head (you may be more successful in these arm movements if you lift
          onto your tiptoes).</h2>
        <h2>5. With a powerful exhalation, press down through your inner elbows and wrists and lift your
          chest to raise your head off the floor. As your head lifts, press your inner heels down.
          Of course, your head may seem glued to the floor; if that’s the case, continue to hold the
          pose where you are.</h2>
        <h2>6. If you do manage to lift your head, the pose may actually become easier, since this
          movement allows your upper arms to directly support your weight, easing the demand on your
          muscles. But be careful not to strain the shoulder joints by pushing them beyond your elbows.
          Avoid this over extension by keeping your weight evenly distributed between your elbows and
          wrists, and by not allowing your elbows to slide more than shoulder-width apart. It is
          absolutely fine to remain in this position, with your head raised and your heels directly
          below your knees.</h2>
        <h2>7. In the full pose, however, you walk the feet away from your hands until your legs are nearly
          straight; then plant your inner feet and exhale as you stretch down through your calves and push
          to straighten the legs completely.</h2>
        <h2>8. Place the crown of your head back on the floor inside the cup of your hands, press your
          elbows into the floor and draw your shoulder blades toward your tail bone to help your shoulders
          stay lifted. Your middle back will be asked to extend more deeply.</h2>
        <h2>9. Come out of this asana with great attention. First, walk your feet back under your knees.
          Remain on your crown and return your palms to the floor next to your ears. Again check to make
          sure your hands are directly under your elbows. Push with your hands to lift the head and tuck
          your chin and tail bone in as you roll your spine back down to the floor, tail bone touching last.
          Consciously slow your breathing down until you are once again at rest and can feel the powerful
          calm that is the product of balanced backbends.</h2>
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
