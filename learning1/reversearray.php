<?php
$arr=array(10,20,30,40,50,60,70,80,90);
echo "Normal order opf the array element "."<br>";
foreach ($arr as $a) {
	echo $a ;
}
echo "<br>";
echo "reverse order of the array element"."<br>";
for($i=0;$i<=count($arr)-1;$i++) { 
	for($j=count($arr)-1;$j>=$i;$j--) { 
		echo $arr[$j] ;
	}
	break;
}


?>