<?php
echo $_GET['left'];
include 'zzzz.php';
$result = mysqli_query($con,"UPDATE firstcampfireusers SET lefter = " . $_GET['left'] . " WHERE userid = " . $_COOKIE['diresu']);
?>

