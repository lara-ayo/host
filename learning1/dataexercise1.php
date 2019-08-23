<!DOCTYPE html>
<html>
<head>
	<title>data base exercise</title>
</head>
<body>
<form>
	<input type="string" name="username" value="username ">
	<input type="string" name="first_name" value="first_name ">
	<input type="string" name="last_name" value="last_name ">
	<input type="string" name="phone" value="phone ">
	<input type="string" name="email" value="email ">
	<input type="submit" name="submit">
	 <?php
if (!isset ($_GET ["submit"]) ) {
		$username = $_GET ['username'];
		$first_name = $_GET ['username]';
		$last_name = $_GET ['username'];
		$phone = $_GET ['username'];
		$email = $_GET ['username'];
		

}

	 ?>
</form>
</body>
</html>