<?php
//comparism operator
$x = 5;
$y = 10;

if ($x === $y) {
	echo "true!";
}
else{
	echo "false!";
}


//Increment /Decrement operators

	$x =10;
	echo $x-- ;
	echo $x;

	//logical operators

	$x = 20;
	$y = 20;

	if ($x === $y and 1 == 1) {
		echo "true ";
	}

 
 $x = 2;

 if ($x   == 1) {
 	echo "sophia is very beautiful! " ;
 }

elseif ($x== 2) {
	echo "sophia is kinda beautiful! ";
}

else {
	echo "sophia is very ugly! ";
}

$x =4;
switch ($x = 4) {
	case  1:
		echo "the answer is 1";
		break;
		case  2:
		echo "the answer is 2";
		break;
		case  3:
		echo "the answer is 3";
		break;
		case  4:
		echo "the answer is 4";
		break;
	default:
	echo "there is no answer";
}
?>