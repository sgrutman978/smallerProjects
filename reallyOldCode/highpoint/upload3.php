<?php

$chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'y', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
  $endStr = "";
  for($ii = 0; $ii < 36; $ii++){
  $yoyo = rand(0,35);
  $endStr .= $chars[$yoyo];
  }

    $maxSize = 102400000000;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_pdf'])) {   
	    if (is_uploaded_file($_FILES['filepdf']['tmp_name'])) {
			if ($_FILES['filepdf']['size'] > $maxSize) {
			   // echo '<p class="error">File troppo grande. Dimensione massima: ' . $maxSize . 'KB</p>';
		    } else {
			    $result = move_uploaded_file($_FILES['filepdf']['tmp_name'], $endStr . "." . pathinfo($_FILES['filepdf']['name'], PATHINFO_EXTENSION));
			    if ($result == 1) {
				   // echo '<p class="error">Menu caricato</p>';
			    } else {
				   // echo '<p class="error">Si &#232; verficato un errore</p>';
			    }
		    }
	    }
    }
	
	$thingName = $_POST["names"];
	
include 'zzzzz.php';
	mysqli_query($con,"INSERT INTO 0highpoint (webPage, name) VALUES ('" . $endStr. "." . pathinfo($_FILES['filepdf']['name'], PATHINFO_EXTENSION)."', '" . $thingName . "')");
	
	    header('Location: http://www.stevengrutman.com/highpoint/index.php?remem=stuffs');
	
?>