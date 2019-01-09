<?php
include('loginpro.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>	
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	<form class="box" action="#" method="post">
		<h1>Login</>
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Login">
		<h5>Don't have account? <a href="signup.php">Sign Up</a> now.</h5>
	</form>
	
	
	
	</body>
    </html>
	
	