<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css"></style>
</head>
<body>
<div>
	<form action="update.inc.php" method="GET">
		<h3>driver detail</h3>
		<input type="text" name="name" placeholder= "drivers_fullname">
		<input type="text" name="licanse" placeholder= "drivers_license_number">
		<input type="text" name="phone_number" placeholder= "drivers_phone_nubmer">
		<input type="text" name="gender" placeholder= "drivers_gender">
		<input type="date" name="issuedate" placeholder= "drivers_license_issuedate">
		<input type="date" name="expiredate" placeholder= "drivers_license_expiredate">
		<button type="submit" name="submit">UPDATE</button>
		
	</form>
</div>
<div>
	<form action="update.vehicle.php" method="GET">
		<h3>vehicle detail</h3>
				
			<input type="text" name="platenumber" placeholder="vehicle_platenumber"><br>
			<input type="text" name="vehicle_type" placeholder="vehicle_type"><br>
			<input type="text" name="vehicle_model" placeholder="vehicle_model"><br>
			<input type="text" name="vehicle_year" placeholder="vehicle_year"><br>
			<input type="text" name="vehicle_make" placeholder="vehicle_make"><br>
			<h5>purchase date</h5>
			<input type="date" name="purchase_date" placeholder="purchase_date"><br>
			<button type="submit" name="vansubmit">update</button>

	</form>
</div>


<div>
	<form action="update.main.php" method="GET">
	<h3>maintanance history</h3>
			<input type="text" name="type" placeholder="maintenance_type">
			<input type="text" name="part" placeholder="maintenance_part">
			<input type="text" name="observation" placeholder="maintenance_observation">
			<input type="text" name="advice" placeholder="maintenance_advice">
			<input type="date" name="main_date" placeholder="maintenance_date">
			
			<button type="submit" name="mainsubmit">update</button>

	</form>
</div>
<a href="view.php">NEXT</a>
</body>
</html>