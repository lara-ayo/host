<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<form action="includes/login.inc.php" method="POST">
					<input type="text" name="uid" placeholder="username/email">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="submit">login</button>
					<a href="signup.php">Sign up</a>
				</form>
			</div>
		</div>
	</nav>
</header>