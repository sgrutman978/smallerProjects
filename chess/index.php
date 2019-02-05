<html>
<body>
<style>
#board{
position:fixed;
left:0px;
top:0px;
width:1000px;
height:1000px;
}
.piece{
	width:80px;
	height:106px;
	position:fixed;
	top:0px;
	left:0px;
	border-style:none;
	border-color:red;
	border-width:3px;
}
</style>
<img src="checkerboard.gif" id="board">
<?php
include 'zzzz.php';
	$result = mysqli_query($con, "SELECT * FROM chess");
			while($row = mysqli_fetch_array($result))
			{
echo "<div id='" . $row['id'] . "' class='piece'><img src='" . $row['type'] . $row['color'] . ".png' style='width:100%;height:100%'></div>";
			}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
var piece = '';
$('.piece').click(function(){
	if(piece == $(this).attr('id')){
$('.piece').css("border-style", "none");
piece = '';
}else{
	$(".piece").css("border-style", "none");
$(this).css("border-style", "solid");
piece = $(this).attr('id');
}
});

setInterval(function(){
	$.ajax({
		  type: "POST",
		  url: "getPos.php",
		  data: {  }
		}).done(function( msg ) {
				msg = JSON.parse(msg);
		for(var i = 0; i < msg.length;i++) {
		if(piece != msg[i][2]){
$('#'+msg[i][2]+'').animate({
    left: msg[i][0],
    top: msg[i][1]
  }, 1500);
}
		}
		});
}, 1750);

$(document).click(function(e){
	if ($(e.target).closest('.piece').length === 0) {
	var posX = $("#board").offset().left;
           var posY = $("#board").offset().top;
           $.ajax({
		  type: "POST",
		  url: "setPlace.php",
		  data: { posX: (e.pageX - posX - 40), posY: (e.pageY - posY - 53), id: piece }
		}).done(function( msg ) {
			$('#'+piece+'').animate({
    left: (e.pageX - posX - 40),
    top: (e.pageY - posY - 53)
  }, 1500, function(){
$('.piece').css("border-style", "none");
piece = '';
  });	
		});
}
});

</script>
</body>
</html>