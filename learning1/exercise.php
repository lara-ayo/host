
<!DOCTYPE html>
<html>
<?php
$leaders = array(array("lewis","male", "married","self employed", "banjoko"), array("samuel","male", "single","employed", "awobo"), array("ayoola","male", "married","self employed", "stadium"), array("kabiru","male", "married","self employed", "bayeku"), array("bunmi","female", "single","employed", "maternity"), array("bimbola","female", "married","employed", "offin"));
?>
<head>
	<title>LEADER'S DETAILS</title>
</head>
<body>
<form>
	<select name="key">
		<option value="0"><?php echo $leaders [0][0]; ?></option>
		<option value="1"><?php echo $leaders [1][0]; ?></option>
		<option value="2"><?php echo $leaders [2][0]; ?></option>
		<option value="3"><?php echo $leaders [3][0]; ?></option>
		<option value="4"><?php echo $leaders [4][0]; ?></option>
	</select>
		<input type="submit" name="submit" value="DETAILS">
</form>

<?php
if (isset($_GET ['submit'])) {
	$keys = $_GET['key']; 
	echo $leaders [$keys] [0]."<br>";
	echo $leaders [$keys] [1]."<br>";
	echo $leaders [$keys] [2]."<br>";
	echo $leaders [$keys] [3]."<br>";
	echo $leaders [$keys] [4];
}
?>
</body>
</html>