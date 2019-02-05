	<?php
if(($_POST['passcodeF'] == "owners" && $_POST['users'] == "hps") || ($_COOKIE['users'] == "hps" && $_COOKIE['passwordF'] == "owners") || $_GET['remem'] == "stuffs"){

echo "<form action='http://www.stevengrutman.com/highpoint/input.php' style='float:right' method='post'>
	Password: <input type='password' name='passcode' />
	<input type='submit' value='Edit Files'></br></br>
</form>";

include 'zzzzz.php';
$result9 = mysqli_query($con,"SELECT * FROM 0highpoint");
while($row9 = mysqli_fetch_array($result9)){
echo "<a style='text-align:center' href='" . $row9['webPage'] . "'>" . $row9['name'] . "</a></br>";
}

}else{
echo "Wrong Password";
}
?>


	


