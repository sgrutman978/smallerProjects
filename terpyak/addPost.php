<?php
$con = mysqli_connect('localhost', 'sgrutman978', 'terpCode1234', 'terpyak');

if($_POST['mode'] == 0){
	mysqli_query($con, "INSERT INTO posts (userID, data) VALUES ('".addslashes($_POST['user'])."', '".addslashes($_POST['data'])."');");
		  // while($row = mysqli_fetch_array($result)) {
			  
		  // }
// echo $_POST['user'] . "bbb" . $_POST['data'];
}

if($_POST['mode'] == 1){
	// $a=array();
	$result = mysqli_query($con, "SELECT * FROM posts ORDER BY postID DESC;");
	while($row = mysqli_fetch_array($result)) {
		// array_push($a, $row['data']);	
		echo $row['data']."SfjrMzGqAAcKVvi8QIz6UMEdLRAPfAqzS3asm18frOOOc0tsOOrST0BKSTyoPKId";	  
	}
}

if($_POST['mode'] == 2){
	$result = mysqli_query($con, "SELECT COUNT(*) AS count FROM posts;");
	$row = mysqli_fetch_array($result);
	echo $row["count"];
}


?>