<?php
	include 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>store </title>
</head>
	<body>
		<form>
		polling unit:<select name="polling_unit_id">
		<?php
		$sql ="SELECT * FROM `polling_unit`";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
					echo "<option value='".$row["polling_unit_id"]."' >". $row["polling_unit_name"]."</option>";
				}
			}
		?>
		</select>
			 <br>
		Ward:<select name="ward_id">
		<?php
		$sql ="SELECT * FROM `ward`";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
					echo "<option value='".$row["ward_id"]."' >". $row["ward_name"]."</option>";
				}
			}
		?>
		</select>			 
			<br>
			LGA:<select name="lga_id">
		<?php
		$sql ="SELECT * FROM `lga`";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
					echo "<option value='".$row["lga_id"]."' >". $row["lga_name"]."</option>";
				}
			}
		?>
		</select>
			<br>
			unique ward:<select name="uniquewardid">
		<?php
		$sql ="SELECT * FROM `ward`";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
		while ($row = mysqli_fetch_assoc($result)){
					echo "<option value='".$row["uniqueid"]."' >". $row["ward_name"]."</option>";
				}
			}
		?>
		</select>
			<br>
			polling unit number: <input type="text" name="polling_unit_number" placeholder="polling_unit_number"><br>
			polling unit name: <input type="text" name="polling_unit_name" placeholder="polling_unit_name"><br>
			polling unit description: <input type="text" name="polling_unit_description" placeholder="polling_unit_description"><br>
			latitude: <input type="text" name="lat" placeholder="latitude"><br>
			longitude: <input type="text" name="long" placeholder="longitude"><br>
			entered by user: <input type="text" name="entered_by_user" placeholder="entered_by_user"><br>
			date entered: <input type="text" name="date_entered" placeholder="date_entered"><br>
			user ip address: <input type="text" name="user_ip_address" placeholder="user_ip_address"><br>
				<button name="submit">submit</button>
				<?php
		if (isset($_GET['submit'])) {
			$polling_unit_id = $_GET['polling_unit_id'];
			$ward_id = $_GET['ward_id'];
			$lga_id = $_GET['lga_id'];
			$unique_ward_id = $_GET['uniquewardid'];
			$polling_unit_number = $_GET['polling_unit_number'];
			$polling_unit_name = $_GET['polling_unit_name'];
			$polling_unit_description = $_GET['polling_unit_description'];
			$long = $_GET['long'];
			$lat = $_GET['lat'];
			$entered_by_user = $_GET['entered_by_user'];
			$date_entered = $_GET['date_entered'];
			$user_ip_address = $_GET['user_ip_address'];

			
			$sql = "INSERT INTO polling_unit(polling_unit_id, ward_id, lga_id, uniquewardid, polling_unit_number, polling_unit_name, polling_unit_description, lat, `long`, entered_by_user, date_entered, user_ip_address) VALUES ('$polling_unit_id','$ward_id','$lga_id','$unique_ward_id','$polling_unit_number','$polling_unit_name','$polling_unit_description','$lat','$long','$entered_by_user','$date_entered','$user_ip_address')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header("location: store.inc.php?update=successful");
			}else{
				header("location: store.inc.php?update=error");
			}

		}
		?>
		</form>
		
	</body>
</html>