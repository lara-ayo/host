<!DOCTYPE html>
<html>
<head>
	<title>post and comment</title>
</head>
<body>
<form>
	<textarea name= post></textarea> 
	<br>
	<input type="text" name="username" place holder="username">
	<br>
	<input type="submit" name="submit" value= "submit">

</form>
</body>
</html>
<?php
	if (isset($_GET['submit'])) {
			$post = $_GET['post'];
			$username = $_GET['username'];

			$connect= mysqli_connect("localhost","root","","forum");

			$sql = "INSERT INTO `post`(`post_content`,`username`) VALUES ('$post','$username')";

			$quary = mysqli_query ($connect, $sql);

		if ($quary){
			echo "record inserted successfully";
		}else{
			echo "input data";
		}

	}

?>