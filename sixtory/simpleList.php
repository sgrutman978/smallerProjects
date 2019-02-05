<?php
$con = mysqli_connect("localhost", 'sgrutman978', 'terpCode1234', "sixise");
$result = mysqli_query($con,"SELECT phrase FROM posts");
  while($row = mysqli_fetch_array($result)){
echo $row['phrase'] . "</br>";
  }
?>