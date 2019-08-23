<?php
	session_start();
	include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$sql= "SELECT * FROM user"; 
	$result= mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row= mysqli_fetch_assoc($result)){
			$id = $row['id'];
			$sqlimg = "SELECT * FROM profileimg WHERE userid='$id'";
			$resultimg= mysqli_query($conn, $sqlimg);
			while ($rowimg= mysqli_fetch_assoc($resultimg)) {
				echo "<div class = 'user-container'>";
					if ($rowimg['status'] == 0) {
						echo "<img src='uploads/profile".$id.".jpg'>";
					} else{
						echo "<img src='uploads/profiledefault.jpg'>";
					}
					echo "<p>".$row['username']."</p>";
				echo "</div>";
			}
		}
	}else{
		echo "there are no users yet!";
	}


	if (isset($_SESSION['id'])) {
		if ($_SESSION['id'] == 1) {
			echo "you are logged in as user #1";
		}
		echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
			<input type='file' name='file'>
			<button type='submit' name='submit'>UPLOAD</button>
		</form>";
	} else{
		echo "you are not logged in!";
		echo "<form action ='signup.php' method='POST'>
			<input type= 'text' name='first' placeholder='First Name'>
			<input type= 'text' name='last' placeholder='last Name'>
			<input type= 'text' name='uid' placeholder='username'>
			<input type= 'password' name='pwd' placeholder='password'>
			<button type='submit' name='submit'>Signup</button>

		</form>";
	}
?>


<p>login as user</p>
<form action="login.php" method="POST">
	<button type="submit" name="submitLogin">Login</button>
</form>

<p>logout as user</p>
<form action="logout.php" method="POST">
	<button type="submit" name="submitLogout">Logout</button>
</form>

</body>
</html>