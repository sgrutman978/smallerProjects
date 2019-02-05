<?php
	include 'zzzz.php';
	mysqli_query($con, "UPDATE chess SET atX=" . $_POST['posX'] . ", atY=" . $_POST['posY'] . " WHERE id=" . $_POST['id'] . "");
?>