<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<input type="number" name="num1" placeholder="principal"><br/>
<input type="number" name="num2" placeholder="intrest"> <br/>
<input type="number" name="num3" placeholder="period">
<br/>
<input type="submit" name="submit" value="Calculate"><br/>
</form>

<?php

if (isset($_GET['submit'])) {
		
		$p = $_GET['num1'];
		$r = $_GET['num2'];
		$t = $_GET['num3'];

for ($n=1; $n <= $t; $n++) {
		$f = $p * pow((1 + $r), $n);
		echo "$f<br/>";
	}
}

?>
</body>
</html>
