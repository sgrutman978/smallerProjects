<?php
if($_POST['passcode'] != "hpsfiles"){
 header('Location: http://www.stevengrutman.com/highpoint/');
}
?>
<b>Upload</b>
<form action="upload3.php" method="post" enctype="multipart/form-data">
	 Choose File   <input type="file" name="filepdf" />   </br> 
	Name It:	 <input type="textarea" name="names" /><br />
	    <input type="submit" value="Upload menu pdf" name="upload_pdf" />
</form>

<?php
/*$con=mysqli_connect("localhost","sgrutman","Ginger1453","jokenetwork");
$result9 = mysqli_query($con,"SELECT * FROM 0highpoint");
while($row9 = mysqli_fetch_array($result9)){
echo "<a style='text-align:center' href='" . $row9['webPage'] . "'>" . $row9['name'] . "</a></br>";
}*/
?>
</br></br></br>
	
<b>Delete</b>
<form action="delete.php" method="post" enctype="multipart/form-data">
		File: <input type="textarea" name="delName" /><br />
	 <input type="submit" value="Delete File" />
</form>


