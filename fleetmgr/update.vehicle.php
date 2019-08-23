<?php

 	include 'dbh.php';

if (isset($_GET['vansubmit'])) {
	$platenumber = $_GET['platenumber'];
	$type = $_GET['vehicle_type'];
	$model = $_GET['vehicle_model'];
	$year = $_GET['vehicle_year'];
	$make = $_GET['vehicle_make'];
	$date = $_GET['purchase_date'];

	$sql = "INSERT INTO vehicle(vehicle_platenumber, vehicle_type, vehicle_model, vehicle_year, vehicle_make, vehicle_purchase_date)VALUES('$platenumber','$type','$model','$year','$make','$date')";
	
	$result=mysqli_query($conn, $sql);
		if ($result) {
		header("location: update.php?update=vehicle update successful");
	}else{
		header("location: update.php?update=vehicle update error");
	}
	

}

