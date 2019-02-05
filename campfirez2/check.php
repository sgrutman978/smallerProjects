<?php 
// Create connection
include 'zzzz.php';
// Check connection
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
		
$result = mysqli_query($con,"SELECT * FROM 1users ORDER BY userID DESC");
				
while($row = mysqli_fetch_array($result))
{
if ($row['username'] == $_POST["user"] && $row['password'] == $_POST["pass"] && $row['username'] != ".........................")
{
if(isset($_POST['check1']))
{
    setcookie("diresu", $row['userID'], time() + 360000000);
setcookie("nekot", $row['token'], time() + 360000000);
$url = '/test4.php';
header( "Location: $url" );
 }
 else
{
   setcookie("diresu", $row['userID']);
setcookie("nekot", $row['token']);
$url = '/test4.php';
header( "Location: $url" );
}
$result = 4;
}else{
if ($row['username'] == "........................."){
$url = '/index.php';
header( "Location: $url" );
}
}
}
					
mysqli_close($con);

?> 



