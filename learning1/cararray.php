<!DOCTYPE html>
<html>
<?php
$cars = array(array("ford", "edge", "SUV", "white", "2006"), array("toyota", "corolla", "saloon", "blue", "2003"), array("honda", "civic", "hatchback", "silver", "2006"), array("nissan", "626", "saloon", "green", "2004"), array("benz", "c300", "saloon", "black", "2012"));
?>
<head>
	<title>LIST OF CARS</title>
</head>
<body>
<FORM>
	<select name="keys">
		<option value="0"><?php echo $cars [0][0]; ?></option>
		<option value="1"><?php echo $cars [1][0]; ?></option>
		<option value="2"><?php echo $cars [2][0]; ?></option>
		<option value="3"><?php echo $cars [3][0]; ?></option>
		<option value="4"><?php echo $cars [4][0]; ?></option>
	</select>
	<input type="submit" name="details" value="details">	
</FORM>
<?php
if (isset($_GET ['details'])) {
		$key = $_GET['keys'];
		echo "Make:  ". $cars [$key][0]."<br/>";
		echo "model:  ". $cars [$key][1]."<br/>";
		echo "type:  ". $cars [$key][2]."<br/>";
		echo "colour:  ". $cars [$key][3]."<br/>";
		echo "year:  ". $cars [$key][4];
}
?>
</body>
</html>


