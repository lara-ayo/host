<?php
$cars =  array("Bz" => "Benz", "Ty" => "Toyota", "H" => "Honda", "F" => "Ford");
 foreach ($cars as $arr) {
 	echo $arr;
 }
//echo $cars[];

//$names[100] = "Ayoola";
//$names[200] = "Raphael";
//$names[300] = "Sophia";
//$names[400] = "Sonia";

//echo $names[300];
//break

for ($i=0; $i <= count($cars) - 1; $i++) { 
	for ($j = count($cars); $j >= $i; $j--) { 
		echo $cars[$i];

	}
	break;
}

?>
