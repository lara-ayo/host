<!DOCTYPE html>
<html>
<head>
	<title>GRADING</title>
</head>
<body>
<form>
	<input type ="number" name ="num1" placeholder = "grade" value="<?php if(isset($_GET['num1'])){ echo $_GET['num1']; } ?>">
	<br>
	<input type = "submit" name = "grade" value = "grade">
</form>
</body>
</html>
<?php
	if (isset($_GET['grade'])) {
		$result1 = $_GET['num1'];

			if ($result1 <= 39) {
				echo "F";
			}
			elseif ($result1 > 39 && $result1 < 50) {
				echo "D";
			}

			elseif ($result1 > 49 && $result1 < 60) {
				echo "c";
			}

			elseif ($result1 > 59 && $result1 < 70) {
				echo "B";
			}

			elseif ($result1 > 69 && $result1 <= 100) {
				echo "A";
			}


		}
		
?>