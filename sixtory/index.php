<p id="demo" style="display:none;">
<?php
$con = mysqli_connect("localhost", 'sgrutman978', 'terpCode1234', "sixise");
$result = mysqli_query($con,"SELECT phrase FROM posts");
  while($row = mysqli_fetch_array($result)){
echo $row['phrase'] . "</br>";
  }
?>
</p>

<input type="text" placeholder="New Post" name="newP" id="newP" />
<button onclick="getLoc()">Post</button>

<!--regular-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--ui-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!--mobile-->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->

<script>
var v1 = -1;
var v2 = -1;
var x = document.getElementById("demo");

$(document).ready(function() {
	getLocation();
	$("#demo").css("display", "block");
});

setInterval(function(){
getLocation();
//getLoc();
}, 15000);

function getLoc(){
alert(v1 + "   " + v2);
}

function getLocation() {
    if (navigator.geolocation) {
    	navigator.geolocation.getCurrentPosition(getLat);
       
   // } else { 
     //   x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getLat(position) {
    v1 = position.coords.latitude;
     v2 = position.coords.longitude;	
}
</script>
<!--make between .1 latitude and longitude (around 9.5 mile radius)