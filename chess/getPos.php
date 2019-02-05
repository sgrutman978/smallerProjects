<?php
include 'zzzz.php';
		 $boxes = array();
$result = mysqli_query($con, "SELECT * FROM chess");
			while($row = mysqli_fetch_array($result))
			{
				array_push($boxes, array($row['atX'], $row['atY'], $row['id']));
			}
echo json_encode($boxes);
?>