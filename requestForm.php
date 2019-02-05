<!DOCTYPE html>
<html>
<head>
	<title>Software Form</title>
	<meta charset="utf‐8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-size:2em">
	<h1>Order Request Form</h1>
	<br><form action="processRequest.php" method="POST">
	Lastname: <input type="text" name="last" />
	Firstname: <input type="text" name="first" />
	<br>Email: <input type="text" name="email" />
	<br>Shipping Method: 
	<input type="radio" name="ship" value="UPSS"> UPSS 
	<input type="radio" name="ship" value="FedEXC"> FedEXC 
	<input type="radio" name="ship" value="USMAIL"> USMAIL 
	<input type="radio" name="ship" value="Other"> Other 
</br>Softwares:<br>
<select multiple size="3" style="font-size:1em" name="softs[]"> 
	<?php
	include "softwares.php";
		// $counter = 0;
	foreach ($softwares as $key => $value){
				// $counter++;
		echo "<option>".$key." ($".$value.")</option>";
				// echo "<option value=".$counter.">".$key." ($".$value.")</option>";
	}
	?>
</select>
</br>
Order Specifications:
<br>
<!-- <input type="textarea" name="specs" /> -->
<textarea name="specs" cols="40" rows="5"></textarea>
</br>
<input type="reset" />
<input type="submit" />
</form>
</body>
</html>