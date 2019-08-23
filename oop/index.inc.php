<?php
	include 'includes/newclass.inc.php';
	include 'includes/parent.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<?php
	$users = new users('John','Doe','Blond','Brown');
	$users2 = new users('daniel','nielsen','Brown','blue');
	echo $users2->fullname();
	
?>
</body>
</html>