<!DOCTYPE html>
<?php require('includes/config.php');
      require('loginChecker.php');
//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: yoga_logout.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}

	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = 'Yes';

		try {
			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			    echo "<script type='text/javascript'>alert('Registration Successful');</script>";


		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}
	}
}


//define page title
$title = 'Join Yoga';

//include header template
require('layout/header.php');
?>

<?php
//check for any errors
if(isset($error)){
  foreach($error as $error){
    echo '<p class="bg-danger">'.$error.'</p>';
  }
}

?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

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
            <li>
              <a href="poses.php"><i class="fa fa-camera"></i><br>Poses</a>
            </li>
            <li>
              <a href="faq.html"><i class="fa fa-tasks"></i><br>FAQ</a>
            </li>
            <li>
              <a href="about.html"><i class="fa fa-user"></i><br>About</a>
            </li>
            <li class="active">
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
                        <i class="fa fa-envelope"></i>
                        <h1>Register or Login</h1>
                        <p>Here is how you can register and login.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                    <form role="form" action="" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Username</label>
	                        	<input type="text" name="username" placeholder="Enter your username..." class="contact-name" id="contact-name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
	                        </div>
                          <div class="form-group">
                            <label for="contact-email">Email</label>
                              <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email" tabindex="2">
                            </div>
  	                        <div class="form-group">
  	                        	<label for="contact-subject">Password</label>
  	                        	<input type="password" name="password" placeholder="8-16 password..." class="contact-subject" id="contact-subject" tabindex="3">
  	                        </div>
                            <div class="form-group">
                              <label for="contact-subject">Confirm Password</label>
                              <input type="password" name="passwordConfirm" placeholder="8-16 password..." class="contact-subject" id="contact-subject" tabindex="4">
                            </div>
	                        <button type="submit" name="submit" class="btn" tabindex="5">Register</button>
	                    </form>
	                </div>

                  <div class="col-sm-5 contact-address wow fadeInUp">
                    <form role="form" action="" method="post">
                      <div class="form-group">
                        <label for="contact-name">Username</label>
                          <input type="text" name="username" placeholder="Enter your username..." class="contact-name" id="contact-name">
                        </div>
                      <div class="form-group">
                        <label for="contact-name">Password</label>
                          <input type="password" name="password" placeholder="Enter your password..." class="contact-name" id="contact-name">
                      </div>
                        <button type="submit" name="submitLogin" class="btn">Login</button>
                    </form>
                  </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2016 MyYoga - All rights reserved.</a>.</p>
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
