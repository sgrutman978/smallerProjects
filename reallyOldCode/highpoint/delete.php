<?php
//echo $fileName . " lllll" . $_POST['delName'];
include 'zzzzz.php';
$result = mysqli_query($con,"SELECT * FROM 0highpoint WHERE name = '" . $_POST['delName'] . "'");
while($row = mysqli_fetch_array($result)) {
  $fileName = $row['webPage'];
 // echo $fileName;
}
mysqli_query($con,"DELETE FROM 0highpoint WHERE name = '" . $_POST['delName'] . "'");
unlink($fileName);

 header('Location: http://www.stevengrutman.com/highpoint/index.php?remem=stuffs');

?>