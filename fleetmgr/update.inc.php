<?php

 	include 'dbh.php';

if (isset($_GET['submit'])) {
	$name = $_GET['name'];
	$license = $_GET['licanse'];
	$phone = $_GET['phone_number'];
	$gender = $_GET['gender'];
	$issuedate = $_GET['issuedate'];
	$expiredate = $_GET['expiredate'];

	$sql = "INSERT INTO driver(drivers_fullname, drivers_license_number, drivers_phone_nubmer, drivers_gender, drivers_license_issuedate, drivers_license_expiredate)VALUES('$name','$license','$phone','$gender','$issuedate','$expiredate')";
	
	$result=mysqli_query($conn, $sql);
		if ($result) {
		header("location: update.php?update=successful");
	}else{
		header("location: update.php?update=error");
	}
	

}

