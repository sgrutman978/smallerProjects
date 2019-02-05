<?php

include 'zzzz.php';
		$result = mysqli_query($con,"SELECT * FROM firstcampfireusers WHERE userid = 2");
		while($row = mysqli_fetch_array($result)){
		$ttt = $row['top'];
		echo $ttt;
}	

?>