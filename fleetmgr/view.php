<?php
	include 'header.php';
?>

</form>
<div>
<h2>	drivers table </h2>
	<?php
		$sql = "SELECT * FROM driver";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
					echo "<div>
						<h3>".$row['drivers_id']."</h3>
						<h3>".$row['drivers_fullname']."</h3>
						<h3>".$row['drivers_license_number']."</h3>
						<h3>".$row['drivers_phone_nubmer']."</h3>
						<h3>".$row['drivers_gender']."</h3>
						<h3>".$row['drivers_license_issuedate']."</h3>
						<h3>".$row['drivers_license_expiredate']."</h3>
					</div>";
			}
		}
	?>
</div>
<div> 
<h2>	maintenance table </h2>
	<?php
		$sql = "SELECT * FROM maintenance";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			while ($rowm = mysqli_fetch_assoc($result)) {
					echo "<div>
								<h3>".$rowm['maintenance_id']."</h3>
								<h3>".$rowm['maintenance_type']."</h3>
								<h3>".$rowm['purchased_part']."</h3>
								<h3>".$rowm['maintenance_date']."</h3>
								<h3>".$rowm['maintenance_observation']."</h3>
								<h3>".$rowm['maintenance_advice']."</h3>
								<h3>".$rowm['vehicle_platenumber']."</h3>
								</div>";
			}
		}
	?>
</div>
<div>
<h2>	vehicle table </h2>
	<?php
		$sql = "SELECT * FROM vehicle";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			while ($rowv = mysqli_fetch_assoc($result)) {
					echo "<div>
						<h3>".$rowv['vehicle_platenumber']."</h3>
						<h3>".$rowv['vehicle_type']."</h3>
						<h3>".$rowv['vehicle_model']."</h3>
						<h3>".$rowv['vehicle_year']."</h3>
						<h3>".$rowv['vehicle_make']."</h3>
						<h3>".$rowv['vehicle_make']."</h3>
						</div>";
			}
		}
	?>
</div>
<div>
	<h2> vehicle to driver </h2>
	<?php
		$sql = "SELECT * FROM vehicle_driver";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			while ($rowd = mysqli_fetch_assoc($result)) {
					echo "<div>
							<h3>".$rowd['id']."</h3>
							<h3>".$rowd['drivers_id']."</h3>
							<h3>".$rowd['vehicle_platenumber']."</h3>
							<h3>".$rowd['curent_vehicle']."</h3>
						</div>";
			}
		}	
	?>

</div>

</body>
</html>