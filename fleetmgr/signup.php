<?php

if (isset($_POST['submit'])) {


		include 'dbh.php';

	$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	

		if(empty($fullname) || empty($email) || empty($uid) || empty($pwd)){
		header("location: index.php?index = empty!");
		exit();
	}else{

		if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
		header("location: index.php?index = inavid!");
		exit();
	}else{
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("location: index.php?index = invalid email!");
		exit();
		
		}else{
			$sql ="SELECT * FROM users WHERE user_uid='$uid'";
			$result =mysqli_query($conn, $sql);
			$resultcheck =mysqli_num_rows($result);
			if ($resultcheck > 0) {
				header("location: index.php?index = usertaken");
				exit();
			}else{

				$hashpwd=password_hash($pwd, PASSWORD_DEFAULT);
				$sql="INSERT INTO users(user_fullname, user_email, user_uid, user_pwd) VALUES('$fullname','$email','$uid','$hashpwd')";
				mysqli_query($conn, $sql);
				header("location: login.php?login=signup successful");
				exit();
			}
		}
	}
}
}else{
	header("location:index.php?");
}

?>