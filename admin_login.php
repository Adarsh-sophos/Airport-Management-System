<?php session_start(); ?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>admin | Login</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="login_files/css/font-awesome.css">
	<link rel="stylesheet" href="login_files/css/style.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div class="agile-login">
		<h1>Admin Login Form</h1>
		<div class="wrapper">
			<h2>Log In</h2>
			<div class="w3ls-form">
				<form action="login_check.php" method="post">
					<label>Username</label>
					<input type="text" name="name" placeholder="Username" required/>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required />
					<a href="#" class="pass">Forgot Password ?</a>
					<?php
					if($_SESSION["error"]==1)
					{
						$_SESSION["error"]=0;
						echo("<h3 style=\"color:red;\">Invalid Username or Password </h3>");
					}
					?>
					<input type="submit" value="Log In" />
				</form>
			</div>
			
			<div class="agile-icons">
				<a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
				<a href="#"><span class="fa fa-facebook"></span></a>
				<a href="#"><span class="fa fa-pinterest-p"></span></a>
			</div>
		</div>
		<br>
		<div class="copyright">
	</div>
	</div>
	
</body>
</html>