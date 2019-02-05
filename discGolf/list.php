<style>
.disc{
	background-color:green;
	width:30%;
	/*height:200px;*/
	position:relative;
	float:left;
	margin-left:15px;
	margin-bottom:15px;
	text-align:center;
	padding:8px;
}
img{
	width:100%;
}
span{
	font-size:25px;
	position:relative;
	top:3px;
}
</style>
<?php
$con = mysqli_connect("localhost", 'sgrutman_dbuser', 'goodbyeWorld', "sgrutman_abcdefg");
if(isset($_POST['person'])){
	$result = mysqli_query($con,"SELECT * FROM discClub WHERE available=1");
	while($row = mysqli_fetch_array($result)){
		echo "<div class='disc'><img src='0.jpg' /><span>" . $row['name'] . "</span></div>";
	}
}
?>