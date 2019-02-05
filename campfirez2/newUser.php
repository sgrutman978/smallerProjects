<?php
include 'zzzz.php';
$tok = 'aaaa';
$result=mysqli_query($con,"INSERT INTO 1users (username, password, token) VALUES ('" . $_POST['username2'] . "', '" . $_POST['password2'] . "', '".$tok."')");
$url = '/test4.php';
if($result){
	$result = mysqli_query($con,"SELECT userID FROM 1users WHERE username='".$_POST['username2']."'");
	while($row = mysqli_fetch_array($result)){
		setcookie("diresu", $row['userID'],0,"/");
		setcookie("nekot", $tok,0,"/");
		echo $row['userID'];		mkdir($_POST['username2']);
	}
}
else {
	//$url.="?fail=true";
}//$url = '/test4.php';
//header( "Location: /test4.php" );
?>