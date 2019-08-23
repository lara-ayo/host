<?php
		session_start();
		include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
		<form action="login.php" method="POST">
			<h2>sign in</h2>
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="Submit">LOGIN</button>
		</form>
	</div>
<?php

if (isset($_POST['Submit'])) {
		
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($uid) || empty($pwd)) {
		header("location: login.php?login = empty!");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("location: login.php?login = Error!");
		exit();
		}else{
			if ($row=mysqli_fetch_assoc($result)) {
				$hashedpwdcheck =password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdcheck == false) {
					header("location: login.php?login = error");
				exit();
				}elseif ($hashedpwdcheck == true) {
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_fullname'] = $row['user_fullname'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("location: update.php?login = successful");
					exit();

				}
			}
		}
	}
}
?>	
</body>
</html>

