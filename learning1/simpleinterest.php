<!DOCTYPE html>
<html>
<head>
	<title>simple intrest</title>
</head>
<body>
<form>
<input type="number" name="num1" placeholder= "principal"><br/>
<input type="number" name="num2" placeholder= "interest"><br/>
<input type="number" name="num3" placeholder= "period"><br/>
<input type="submit" name="submit" value = "calculate">
</form>
<?php
if (isset($_GET['submit'])) {
	$p = $_GET['num1'];
	$r = $_GET['num2'] / 100;
	$t = $_GET['num3'];

for ($i=0; $i < $t; $i++) { 
	$f = $p * $r * $i;
	echo "$p * $r * $i = $f<br/>";
}
}

?>

</body>
</html>