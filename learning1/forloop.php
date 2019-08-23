<?php

  
for ($i=2; $i < 13; $i++) { 
	echo "<br/>";
	$j=1;
	while ( $j < 5 ) { 
		$y = $i * $j;
		echo "$i x $j = $y<br/>";
		$j++;
	}
}
	
$array = array("daniel","jane","jacob", "john", "mariana");
foreach ($array as $loopdata) {
		echo "my name is ". $loopdata."<br>";
	}	
		

?>