<?php

session_start();
if (isset($_POST['submit'])) {
	include'dbh.inc.php';

	$uid= mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd= mysqli_real_escape_string($conn, $_POST['pwd']);	

	//error handlers
	//check id input are empty
	if (empty($uid) || empty($pwd)) {
		header("location: ../index.php?login = empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result= mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("location: ../index.php?login = error");
			exit();
		} else{
			if ($row=mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedpwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdCheck == false) {
					header("location: ../index.php?login = error");
		exit();
				} elseif ($hashedpwdCheck == true) {
					//login the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("location: ../index.php?login = successful");
		exit();
				}
			}
		}
	}
	

}else{
		header("location: ../index.php?login = error");
		exit();
	}