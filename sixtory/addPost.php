<?php
include "zzzz.php";
mysqli_query($con, "INSERT INTO posts(userID,phrase,longi,lat) VALUES (1,'hello world',100,101);");
?>