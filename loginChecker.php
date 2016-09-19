<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.html'); }

//process login form if submitted
if(isset($_POST['submitLogin'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($user->login($username,$password)){
		$_SESSION['username'] = $username;
		header('Location: index.html');
		exit;

	} else {
		$error[] = 'Wrong username or password.';
	}

}//end if submit

//define page title
$title = 'Login';
?>
