<?php
$con = mysqli_connect("localhost", 'sgrutman978', 'terpCode1234', "sixise");
 $result = mysqli_query($con,"SELECT * FROM xboxGames WHERE playerID=" . $_POST['player'] . "");
 $row = mysqli_fetch_array($result);
 if($_POST['pos'] == "+"){
mysqli_query($con,"UPDATE xboxGames SET " . $_POST['type'] . "=" . $row[$_POST['type']] . "+1 WHERE playerID=" . $_POST['player'] . "");
}else{
mysqli_query($con,"UPDATE xboxGames SET " . $_POST['type'] . "=" . $row[$_POST['type']] . "-1 WHERE playerID=" . $_POST['player'] . "");	
}

?>