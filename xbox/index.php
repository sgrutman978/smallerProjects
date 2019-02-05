 <html>
 <style>
 /*.abc, .def{
  display:none;
  }*/
 #bitch{

 }
  table {
    border-collapse: collapse;
    text-align:center;
}
table, tr, td{
	border: 1px solid black;
	font-size:20px;
}
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="jquery-1.11.3.min.js"></script>

  <script>
  //var seen = 0;
 $(document).ready(function() {

getScores();

  setInterval(function(){
  	//if(seen != 1){
getScores();
//}
	}, 5000);

 });

function getScores(){
	$.ajax({
		  type: "POST",
		  url: "returnEverything.php"
		 // data: {seen:seen}
		}).done(function( msg ) {
			document.getElementById("main").innerHTML = msg;
	});
}

$(document).on("click", "input", function(event){
if($("#password").val() == "samandjoey"){
change(this.id, this.name, this.value);
}
});

// $(document).on("click", "#submit", function(event){
// if($("#password").val() == "samandjoey"){
// $(".abc").css("display", "inline");
// $(".def").css("display", "inline");
// seen = 1;
// }
// });

function change(type, player, pos){
	$.ajax({
		  type: "POST",
		  url: "change.php",
		  data: {player:player, type:type, pos:pos}
		}).done(function( msg2 ) {
			getScores();
	});
}

</script>
<span style="font-size:25px">E3 Current Power Rankings</span></br>
<input id="password" type="password" placeholder="Enter Passcode to edit" />
<!-- <input type="button" value="Submit" id="submit" />
 --></br></br>
<div id="main"></br>
loading...
	</div>
</br>
</br>
<span style="font-size:50px">Current Bitch: <span id="bitch">Robert</span></span>
	</br><img src="https://s-media-cache-ak0.pinimg.com/736x/a2/60/19/a260195f9b43ef1429a21a92ae239ee8.jpg">
</br><img src="http://i1.ytimg.com/vi/xwHvy1FyRdM/hqdefault.jpg">
</br><img src="https://bullbbq.files.wordpress.com/2013/08/spicy-sesame-teriyaki-wings.jpg">
</br><img src="http://i.ytimg.com/vi/Z5wEC2k16jc/maxresdefault.jpg">









</html>
