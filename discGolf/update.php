<?php
$con = mysqli_connect("localhost", 'sgrutman_dbuser', 'goodbyeWorld', "sgrutman_abcdefg");
if(isset($_POST['person'])){
		$sql = "UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition";
		if (mysqli_query($con, $sql)){
	echo "<div "
?>