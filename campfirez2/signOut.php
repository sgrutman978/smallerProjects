<?php
  setcookie("diresu", $row['userID'], time() - 360000000);
setcookie("nekot", $row['token'], time() - 360000000);
header("Location: /index.php");
?>