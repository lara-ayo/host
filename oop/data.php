<?php
include 'dbh.inc.php';
include 'user.pdo.php';
include 'viewuser.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$object = new user;
	echo $object->getuserswithcountcheck();
?>
</body>
</html>