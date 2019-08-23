<?php
 include 'dbh.php';
	 $sql = "SELECT * FROM driver";
	 $result = mysqli_query($conn, $sql);
	 $resultcheck = mysqli_num_rows($result);
	 //$row=mysqli_fetch_assoc($result);
 		

 	$sql = "SELECT * FROM vehicle";
 	$results = mysqli_query($conn, $sql);
	$resultchecks = mysqli_num_rows($results);
 		
if (isset($_GET['submit'])) {
	$driver = $_GET['driver'];
	$vehicle = $_GET['vehicle'];

	$sqlCheck = "SELECT * FROM `vehicle_driver` WHERE `drivers_id` = '$driver'";
	$resultx=mysqli_query($conn, $sqlCheck);
	$rowx = mysqli_num_rows($resultx);
	if($rowx > 0){
		$sqlUPDATE = "UPDATE `vehicle_driver` SET `curent_vehicle` = 'N' WHERE `drivers_id` = '$driver'";
		$result=mysqli_query($conn, $sqlUPDATE);
	}

	$sqlmarge = "INSERT INTO vehicle_driver(drivers_id,vehicle_platenumber)VALUES('$driver','$vehicle')";
	$result=mysqli_query($conn, $sqlmarge);
	header("location: select.php?merge=sucessful");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="GET">
			<select name="driver">
			<?php
			while ($row=mysqli_fetch_array($result)) {
			
			?>
<option value="<?php echo $row['drivers_id']; ?>"><?php echo $row['drivers_fullname'];?></option>
			<?php
			}
			?>

			</select>
			<SELECT name="vehicle">
			<?php
			while ($rows=mysqli_fetch_array($results)) {
			
			?>
<option value="<?php echo $rows['vehicle_platenumber'];?>"><?php echo $rows['vehicle_platenumber'];?></option>	
<?php
			}
			?>				
			</SELECT>
			<button type="submit" name="submit">marge</button>
		</form>

	</body>
</html>