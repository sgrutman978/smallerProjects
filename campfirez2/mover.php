<?php
echo $_GET['top'];
include 'zzzz.php';
$result = mysqli_query($con,"UPDATE firstcampfireusers SET top = " . $_GET['top'] . " WHERE userid = " . $_COOKIE['diresu']);
?>

