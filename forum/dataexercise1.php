<!DOCTYPE html>
<html>
<head>
	<title>data base exercise</title>
</head>
<body>
<form>
	<input type="text" name="username" placeholder="username">
	<input type="text" name="first_name" placeholder="first_name ">
	<input type="text" name="last_name" placeholder="last_name ">
	<input type="text" name="phone" placeholder="phone ">
	<input type="text" name="email" placeholder="email ">
	<input type="submit" name="submit" value="submit">
	<textarea name="post"></textarea>

</form>
</body>
</html>

<?php
if (isset($_GET["submit"])) {
		$username = $_GET['username'];
		$first_name = $_GET['first_name'];
		$last_name = $_GET['last_name'];
		$phone = $_GET['phone'];
		$email = $_GET['email'];

		$connect = mysqli_connect("localhost", "root", "", "forum");

		$sql = "INSERT INTO `users`(`username`, `first_name`, `last_name`, `phone_number`, `email_address`) VALUES ('$username','$first_name','$last_name','$phone','$email')";

		$query = mysqli_query($connect, $sql) or die("Error");

		if($query){
			echo "Record inserted succefully";
		}else{
			echo "Error";
		}
		
}
?>