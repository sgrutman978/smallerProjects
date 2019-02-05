<?php
include 'zzzz.php';
if(isset($_COOKIE['diresu']) && isset($_COOKIE['nekot'])){
		$result = mysqli_query($con,"SELECT * FROM users WHERE userID = " . $_COOKIE["diresu"] . "");
		while($row = mysqli_fetch_array($result)){
			if($row['userID'] == $_COOKIE['diresu'] && $row['token'] == $_COOKIE['nekot']){
				$url = '/test4.php';
				header( "Location: $url");
			}
		}
}		
?>
<title>Campfirez</title>
<link rel="shortcut icon" href="/campfire.jpg" type="image/jpg">
<link rel="shortcut icon" type="image/jpg" href="/campfire.jpg" />

<img src="/FIRE_01.JPG" style="top:0px;left:0px;height:100%;width:100%;position:fixed" />

<div style="width:49%;height:70%;top:30%;float:left;position:relative">
<div style="background-color:white;padding:20px;float:right;position:relative;width:225px;height:75px">
<form action="/check.php" method="post">
	Username: <input type="text" name="user" />
Password: <input type="password" name="pass" />
</br>
Keep me logged in<input type="checkbox" name="check1" />
<input type="submit" value="Login" />
	</form>
	</div>
	</div>
	
	<div style="width:49%;height:75%;top:25%;float:right;position:relative">
	<div style="background-color:white;padding:20px;float:left;width:272px;height:180px;position:relative">
	<form action="/newUser.php" method="post">
	Name: <input type="text" name="names" /></br>
	Email: <input type="text" name="email" /></br>
Retype Email: <input type="text" name="email2" /></br>
Username: @<input type="text" name="username2" /></br>
Password: <input type="password" name="password2" /></br>
Retype Password: <input type="password" name="password3" /></br>
<input type="submit" value="Create User" />
	</form>
	</div>
	