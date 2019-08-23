<?php

 	include 'dbh.php';

 
if (isset($_GET['mainsubmit'])) {
	$type = $_GET['type'];
	$part = $_GET['part'];
	$observation = $_GET['observation'];
	$advice = $_GET['advice'];
	$date = $_GET['main_date'];
	
	

	$sql = "INSERT INTO maintenance(maintenance_type, purchased_part, maintenance_date, maintenance_observation, maintenance_advice)VALUES('$type','$part','$observation','$advice','$date')";
	
	$result=mysqli_query($conn, $sql);
		if ($result) {
		header("location: update.php?update=successful");
	}else{
		
		header("location: update.php?update=error");
	}
}

