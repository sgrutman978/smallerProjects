<html>
<body style="overflow:hidden">
	<style>
	#backg{
		overflow:visible;
		width:100%;
		height:100%;
		top:0px;
		left:0px;
		position:fixed;
		/*background-repeat: no-repeat;*/
	}
	
	#base{
	background:grey;
	width:60px;
	height:60px;
	border-radius: 100px;
	top:7px;
	right:7px;
	position:fixed;
	}
   /*610 width max*/
	#handle{
		cursor:pointer;
		background-color:white;
		width:40px;
	height:40px;
	border-radius: 100px;
	top:17px;
	right:17px;
	position:fixed;
	}

/*@media (orientation:landscape){
#back1{
margin:auto;
position:fixed;
top:15%;
bottom:5%;
left:0px;
width:100%;
}
#topBar{
background:black;
width:100%;
height:50px;
position:fixed;
top:0px;
left:0px;
color:orange;
}
#circle{
	background:orange;
	font-size:30px;
	border-radius:200px;
width:65px;
height:65px;
color:white;
position:fixed;
top:7px;
left:7px;
}
}
@media (orientation:portrait){
#back1{
display:none;
}
}*/
	</style>
	<!-- <img id="back1" src="http://stevengrutman.com/new/IMG_7174.JPG">
	<div id="topBar">
		
		<div id="circle">SG</div>
	</div> -->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>
	<div id="backg"><img src="collage.jpg" style="width:150%"></div>
		<div id="base"></div>
			<div id="handle"></div>
			<script>
			var moveX = 17;
			var moveY = 17;
			var movable = false;
		var allow = true;
		var timer = 0;

		$(document).on('mousemove', function(e){
			stuff(e);
});

		function stuff(e){
			if(movable){
			if($(document).width()-e.pageX > 67){
				moveX = 47;
				}else{
					if($(document).width()-e.pageX < 7){
				moveX = -13;
				}else{
					moveX = $(document).width()-e.pageX-20;
				}
			}
			if(e.pageY > 67){
				moveY = 47;
				}else{
					if(e.pageY < 7){
				moveY = -13;
				}else{
					moveY = e.pageY-20;
				}
			}
    $('#handle').css({
       right:  moveX,
       top:   moveY
    });
    if(allow){
    	allow = false;	
	timer = setInterval(function(){
		var pos = $('#backg').position();
		if(moveY>37){
$('#backg').css({
       top: pos.top -2
    });
}
if(moveX>37){
$('#backg').css({
       left: pos.left +2
    });
}
if(moveX<17){
$('#backg').css({
       left: pos.left -2
    });
}
if(moveY<17){
$('#backg').css({
       top: pos.top +2
    });
}
}, 10);
}
}
		}

$(document).on('mouseup', function(e){
	clearInterval(timer);
	timer = 0;
	allow = true;
movable = false;
 $('#handle').css({
       right:  17,
       top:   17
    });
});

$('#handle').on('mousedown', function(e){	
	event.preventDefault();
movable = true;
});

$(document).bind('touchmove',function(e){
      e.preventDefault();
      var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
      stuff(touch);
});

$(document).bind('touchend',function(e){
      e.preventDefault();
      clearInterval(timer);
	timer = 0;
	allow = true;
movable = false;
 $('#handle').css({
       right:  17,
       top:   17
    });
});

$('#handle').bind('touchstart',function(e){
      e.preventDefault();
      movable = true;
});


</script>
</body>
</html>
