<?php

if(isset($_POST['submit'])){


	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
//ERROR HANDLERS
	//CHECK FOR EMPTY FIELDS
if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
	header("location: ../signup.php?signup=empty");
	exit();
 } else{
	//check if input character are valid
	if (!preg_match("/^[a-zA-Z]*$/", $first)  || !preg_match("/^[a-zA-Z]*$/", $last)) {
		header("location: ../signup.php?signup=invalid");
		exit();
	} else{
		//check if email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("location: ../signup.php?signup=invalid email");
			exit();
		}else{
			$sql= "SELECT * FROM users WHERE user_uid='$uid'";
			$result =mysqli_query($conn, $sql);
			$resultCheck= mysqli_num_rows($result);
			if ($resultCheck > 0) {
				header("location: ../signup.php?signup=usertaken");
				exit();
			}else {
				//harshinmg the password
				$hashedpwd= password_hash($pwd, PASSWORD_DEFAULT);
				//INSERT THE VALUES INTO THE DATA BASE
				$sql = "INSERT INTO users(user_first, user_last, user_email, User_uid, user_pwd) VALUES ('$first','$last','$email','$uid','$hashedpwd');";
				mysqli_query($conn, $sql);
				header("location: ../signup.php?signup=successful");
				exit();
			}
		}
	}
 } 
 }else{
	header("Location:signup.php?");
				exit();
			}
?>