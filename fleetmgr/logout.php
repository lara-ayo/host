<?php $sql ="SELECT * FROM polling_unit where lga_id=34";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		 print_r($row) 
		}