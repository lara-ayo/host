<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<form>
	<input type="number" name="num1">
	<input type="number" name="num2" placeholder="number 2">
	<select name="operator">
		<option>none</option>
		<option>add</option>
		<option>subtract</option>
		<option>multiply</option>
		<option>divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="Calculate">Calculate</button>
</form>
<p>the answer is:</p>
<?php
	if (isset($_GET['submit'])) {
		
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "none":
				echo "you need to select a method";
			break;
			case "add":
				echo $result1 + $result2;
			break;
			case "subtract":
				echo $result1 - $result2;
			break;
			case "multiply":
				echo $result1 * $result2;
			break;
			case "divide":
				echo $result1 / $result2;
			break;
		}

	}

?>

</body>

</html>