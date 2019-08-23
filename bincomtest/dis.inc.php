<?php
	include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
	<?php 
	$sql ="SELECT * from lga";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
	?>

<select name="lga_id">
	
	<?php
		if ($resultcheck > 0) {
	while ($row = mysqli_fetch_assoc($result)){
			if ($_GET['lga_id'] == $row["lga_id"]) {
				echo "<option value='".$row["lga_id"]."' selected>". $row["lga_name"]."</option>";
			}
			else{
			 	echo "<option value='".$row["lga_id"]."' >". $row["lga_name"]."</option>";
			}
		}
	}
	?>
			<input type="submit" name="submit" value="Submit">
	
</select>
	</form>
	
	<table>
		<tr>
			<th>LGA ID</th>
			<th>LGA NAME</th>
			<th>POLLONG UNIT NAME</th>
			<th>PARTY ABBREIATION</th>
			<th>PARTY SCORE</th>
		</tr>
		<?php

			$lga_id = 0;
			
			$sql1 ="SELECT pu.lga_id, lga_name, pu.uniqueid, pu.polling_unit_name, au.party_abbreviation, au.party_score FROM polling_unit pu join lga ON pu.lga_id = lga.lga_id JOIN announced_pu_results au ON au.polling_unit_uniqueid = pu.uniqueid ";
			if (isset($_GET['submit'])) {
				$lga_id = $_GET['lga_id'];
				$sql1 .= " WHERE lga.lga_id = '$lga_id'";
			}
			$result1 = mysqli_query($conn, $sql1);
			$resultcheck1 = mysqli_num_rows($result1);
			if ($resultcheck1 > 0) {
				while ($row1 = mysqli_fetch_assoc($result1)) {
				echo "<tr><td>". $row1["lga_id"] ."</td><td>". $row1["lga_name"] ."</td><td>". $row1["polling_unit_name"] ."</td><td>". $row1["party_abbreviation"] ."</td><td>". $row1["party_score"] ."</td></tr>";
		}
	}
		?>
	</table>
</body>
</html>