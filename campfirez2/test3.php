<html>
<head>
<title>Campfirez</title>
<link rel="shortcut icon" href="/campfire.jpg" type="image/jpg">
<link rel="shortcut icon" type="image/jpg" href="/campfire.jpg" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php

function isMobile(){
if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']))
   // echo "jkjkjk";
	 echo "<link rel='stylesheet' href='style.css'>";
else
    echo "<link rel='stylesheet' href='style.css'>";
}
echo isMobile();

?>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Happy+Monkey' rel='stylesheet' type='text/css'>
<script src="/jquery.js" ></script>


</head> 
<body style="background-color:black;overflow:hidden">
<audio id="sound">
  <source src="sound.mp3" type="audio/mp3">
  Your browser does not support this audio format.
</audio>

<?php
	include 'zzzz.php';
	if(isset($_COOKIE['diresu']) && isset($_COOKIE['nekot'])){
		$result = mysqli_query($con,"SELECT * FROM users WHERE userID = " . $_COOKIE["diresu"] . "");
		while($row = mysqli_fetch_array($result)){
			if($row['userID'] == $_COOKIE['diresu'] && $row['token'] == $_COOKIE['nekot']){

			}else{
				$url = '/index.php';
		header( "Location: $url" );
				}
		}
	}else{
		$url = '/index.php';
		header( "Location: $url" );
	}  
	
?>



<div id="content">

<div id="divvv" style="position:absolute;width:100%;border-width:0px;height:100%;left:0px;top:0px"></div>
<div id="posts" style="position:absolute;margin:auto;overflow-y:scroll;background-color:red;width:40%;height:82%;top:-83%;left:30%">

<div style="background-color:green;width:100%;height:10%;position:absolute;left:0px;top:0px">
<input type='textarea' name='post' class="postText" style="top:5px;left:5px">
<input type="submit" value="Post" class="postIt">
</br>
<input type="button" value="#" class="hashtag">
<input type="button" value="@" class="attag">
<input type="button" value="^" class="campfiretag">
</div>

<div id="posts2" style="top:10%;height:90%;position:absolute"></div>
<button id="search2-x" class="x" style="top:0px;right:0px">x</button> 
<div id="refresh" style="position:absolute;width:25px;border-width:0px;background-color:yellow;height:25px;right:30px;top:0px"></div>
</br>
</div>



<div class="buttons" id="move" style="left:10px;top:10px;background-color:purple"><img src="/campfire.jpg" style="width:100%"></div>

<div class="moving" id="moving" style="position:fixed;left:-425px;top:10px;width:300px;height:100px;background-color:red">

<div class="moving" id="movinga" style="position:relative;margin:0px;width:100px;height:100px;background-color:red;text-align:center"><span style="font-size:60px">+</span></br>New Post</div>
<div class="moving" id="movingb" style="position:relative;margin:-100px 0px 0px 100px;width:100px;height:100px;background-color:red;text-align:center"><span style="font-size:60px">@</span></br>Friend Feed</div>
<div class="moving" id="movingc" style="position:relative;margin:-100px 0px 0px 200px;width:100px;height:100px;background-color:red">c</div>

</div>


<div id="hashtag" style="position:absolute;margin:auto;overflow-y:scroll;background-color:red;width:40%;height:82%;top:-83%;left:30%">
<button id="hashtag-x" class="x" style="top:0px;right:0px">x</button> 
<textarea id="the"></textarea>
</div>

</div>




  <script>
  var play=false;
  var latest="";
  var hiii;
$(document).ready(function(){


/*var screenHeightR = $(document).height();
var screenHeightRT = $(document).width();
    $('#divvv').css({'height':screenHeightR});
	$('#divvv').css({'width':screenHeightRT});
var screenHeightL = ($(document).width() - document.getElementById("divvv").offsetWidth)/2;
	//$('#divvv').css({'left':screenHeightL});
*/

	getPosts();
	getPosts2();
	hiii0();
	 $(document).click(function() {
        $("#moving").animate({
                    left: "-425px"
                }, 150);
    });
	
    });
	
   $([window, document]).focus(function(){
	  play=false;
	}).blur(function(){
	  play=true;
	  $("#moving").animate({
                    left: "-425px"
                }, 150);
	});
	
	
	
	
	
	$(".postIt").click(function() {
		newPost();
		//getPosts();
		$(".postText").val("");
	});
	$(".hashtag").click(function() {
		$(".postText").val($(".postText").val() + "#");
		  $(".postText").focus();
	});
	$(".attag").click(function() {
		$(".postText").val($(".postText").val() + "@");
		 $(".postText").focus();
	});
	$(".campfiretag").click(function() {
		$(".postText").val($(".postText").val() + "^");
		 $(".postText").focus();
	});
	
	$("#search2-x").click(function() {
	hiii0();
	setTimeout(function() { hiii1(); }, 501);
		$("#posts").animate({
                    top: "-83%"
                }, 500);
	});
	
	$("#hashtag-x").click(function() {
	hiii0();
	setTimeout(function() { hiii1(); }, 501);
		$("#hashtag").animate({
                    top: "-83%"
                }, 500);
	});
	
        $(function () {
            $("#move").click(function () {
                $("#moving").animate({
                    left: "55px"
                }, 150);
                return false;
            });
        });
		 
		$(function () {
		hiii0();
            $("#movingb").click(function () {
                $("#moving").animate({
                    left: "-425px"
                }, 5);
				$("#posts").animate({
                    top: "9%"
                }, 500);
				setTimeout(function() { hiii1(); }, 501);
                return false;
            });
        });
		
		
		
		

		$(function () {
            $("#refresh").click(function () {
              getPosts2();
            });
        });
		
		function jkjk() {
              $("#hashtag").animate({
                    top: "9%"
                }, 500);
        };
		
		
		
	

	function hiii1(){
	hiii = 1;
	}
	
	function hiii0(){
	hiii = 0;
	}
	
	function getPosts2(){
	var temp="";
	$.ajax({
		type: "POST",
		url: "/posts.php",
	}).done(function( msg ) {
		$("#posts2").html(msg);
		temp=$("#latest").html();
		if (play && temp!=latest) {
			latest=temp;
			//$("#sound").trigger('play');
		}
	});

	}
	
		function getPosts(){
	$.ajax({
		type: "POST",
		url: "/fire.php",
	}).done(function( msg ) {
		$("#divvv").html(msg);
		});
		}
	
	function newPost(){
		var post = $(".postText").val();
		$.ajax({
		type: "GET",
		url: "/insert.php",
		data: {post: post}
		}).done(function( msg ) {
			getPosts2();
		});
	}
	
  </script>
</body>
</html>