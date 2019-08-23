<?php
	include 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>polling unit table</title>
	<style type="text/css">table{
	border-collapse: collapse;
	width: 100%;
	color: #588c7e;
	font-size: 20px;
	text-align: left;
}
th{
	background-color: #588c7e;
	color: white;
}
tr{
	nth-child(even) {background-color: f2f2f2}
}</style>
</head>
<body>
	<h3>polling unit table</h3>
 	
		<table action ="dis.inc.php">
			<tr>
				<th>POLLING UNIT ID</th>
				<th>POLLING UNIT NUMBER</th>
				<th>POLLING UNIT NAME</th>
				<th>POLLING UNIT DESCRIPTION</th>
			</tr>
			<?php
$sql= "SELECT * FROM polling_unit WHERE polling_unit_id = 6";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>". $row["polling_unit_id"] ."</td><td>". $row["polling_unit_number"] ."</td><td>". $row["polling_unit_name"] ."</td><td>". $row["polling_unit_description"] ."</td></tr>";
	}
	
}
else{
	echo "0 result";
}

?>
</table>

</body>
</html>