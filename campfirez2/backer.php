<?php
include 'zzzz.php';
$result3 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE['diresu']);
		while($row = mysqli_fetch_array($result3)){
echo "<img src='/" . $row['username'] . "/" . $row['backgroundPic'] . "' style='height:100%;width:100%'>";
}
?>