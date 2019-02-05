<?php

include 'zzzz.php';
		$result = mysqli_query($con,"SELECT * FROM firstcampfireusers WHERE userid = " . $_GET['ider']);
		while($row = mysqli_fetch_array($result)){
		$ttt = $row['lefter'];
		$rrr = $row['top'];
		echo json_encode(
      array("m1" => $ttt, 
      "m2" => $rrr,
	  "m3" => $_GET['ider'])
 );
}	

?>