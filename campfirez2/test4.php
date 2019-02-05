
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
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Happy+Monkey|Architects+Daughter|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<script src="/jquery.js" ></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


</head> 
<body style="overflow-y:hidden">

<audio id="sound">
  <source src="sound.mp3" type="audio/mp3">
  Your browser does not support this audio format.
</audio>

<?php
	include 'zzzz.php';
	if(isset($_COOKIE['diresu']) && isset($_COOKIE['nekot'])){
		$result = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE["diresu"] . "");
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

<div style="width:100%;height:100%;position:fixed;top:0px;left:0px" id="backers">
<?php
include 'zzzz.php';
$result3 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE['diresu']);
		while($row = mysqli_fetch_array($result3)){
echo "<img src='/" . $row['username'] . "/" . $row['backgroundPic'] . "' style='height:100%;width:100%'>";
}
?>
</div>

<div id="content">

<div class="outer">

</div>






<!--<div id="posts" style="position:fixed;margin:auto;overflow-y:scroll;background-color:red;width:40%;height:82%;top:-83%;left:30%">

<div style="background-color:green;width:100%;height:10%;position:absolute;left:0px;top:0px">
<input type='textarea' name='post' class="postText" style="top:5px;left:5px">
<input type="submit" value="Post" class="postIt">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" onChange="jhk(this)"><br>
</br>
<input type="button" value="#" class="hashtag">
<input type="button" value="@" class="attag">
<input type="button" value="^" class="campfiretag">
 When you decide to add the ability to post pic with text you may have a problem with doing both at once in the 
newpost ajax call. LOOK AT nnnn.php and upload_file.php
<label for="file">Filename2:</label>
<input type="file" name="file2" id="file2"><br>
<input type="submit" value="Post" id="postIt2">
</div>

<iframe id="framee" style="width:100%;height:75%;position:absolute;top:25%" src="/wPaint-2.2.0/wPaint-2.2.0/index.php?picNamee=beachh.jpg"></iframe>

<button id="search2-x" class="x" style="top:0px;right:0px">x</button> 

</div>-->


<div id="hashtag" style="background:orange;position:absolute;margin:auto;overflow-y:scroll;width:40%;height:82%;top:-83%;left:30%">
</div>


</div>

<div style="width:100%;height:45px;position:fixed;left:0px;top:0px;">
<div class="buttons" style="font-size:31px;font-family:Happy Monkey">
<div style="width:20%;height:100%;left:40%;position:relative"><img src="/campfirez.jpg" style="width:100%;height:100%"></div>
<div style="width:25%;height:100%;position:absolute;top:-100%;float:left;text-align:center;position:relative">
<input type='textarea' style="text-overflow-x:hidden;text-overflow-y:scroll;white-space:normal" name='post' class="postText">
<input type="submit" value="Post" class="postIt"></div>
<div style="width:5%;height:80%;position:absolute;top:-90%;float:right;text-align:center;position:relative" id="movingd">S</div>
</div>
</div>



  <script>
  var play=false;
  var latest="";
 
$(document).ready(function(){	

	getPosters();
		changeSize();
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
	
	
	function jhk(evt){
	postPic();
}
	
	
	$(".postIt").click(function() {
		newPost();
		//getPosts();
		$(".postText").val("");
	});
	
	$("#postIt2").click(function() {
		backPic();
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


		$("#posts").animate({
                    top: "-83%"
                }, 500);
	});
	
	$("#hashtag-x").click(function() {

	
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
		
		function newPost(){
		var post = $(".postText").val();
		var picStuff = $('#file[type=file]').val();
		$.ajax({
		type: "GET",
		url: "/insert.php",
		data: {post: post}
		}).done(function( msg ) {
			//if ($('#file[type=file]').val() != ""){
			//postPic(msg);
			//}
			getPosters();
			});
	}
	
	function changeSize(){
	var screenHeight = (((screen.height)*76)/100);
	$('.boxThingys2').css({'height':screenHeight});
	var screenHeigh = (((screen.width)*40)/100);
	$('.boxThingys2').css({'width':screenHeigh});
	
	}

	function postPic(ids){
		var fd = new FormData();
            fd.append( "file", $("#file")[0].files[0]);
            $.ajax({
                url: 'upload_file.php?idss=' + ids,
                type: 'POST',
                cache: false,
                data: fd,
                processData: false,
                contentType: false,
            }).done(function( msg ) {
			alert(msg);
			if(msg.length < 300){
			document.getElementById('framee').src = '/wPaint-2.2.0/wPaint-2.2.0/index.php?picNamee=' + msg;
			$('#framee').css({'width':'100%'});
			$('#framee').css({'height':'75%'});
			
			}else{
			$('#framee').css({'height':0});
			$('#framee').css({'width':0});
			}
			});
setTimeout(function() { getPosters(); }, 2501);
	}
	
	function backPic(){
		var fd = new FormData();
            fd.append( "file", $("#file2")[0].files[0]);
            $.ajax({
                url: 'upload_file2.php',
                type: 'POST',
                cache: false,
                data: fd,
                processData: false,
                contentType: false,
            });   
setTimeout(function() { getBack(); }, 2501);
	}
		 
		$(function () {
            $("#movingb").click(function () {
                $("#moving").animate({
                    left: "-425px"
                }, 5);
				$("#posts").animate({
                    top: "9%"
                }, 500);
				 return false;
            });
        });
		
		
		
		
		
		function jkjk(hash) {
		
		$.ajax({
		type: "GET",
		url: "/showHashtag.php?hash=" + hash,
	}).done(function( msg ) {
		$("#hashtag").html(msg);
		changeSize();
		$("#hashtag").animate({
                    top: "11%"
                }, 500);
		});
        }
		
		

	
	
	function getPosters(){
	$.ajax({
		type: "POST",
		url: "/posters.php",
	}).done(function( msg ) {
		$(".outer").html(msg);
		changeSize();
		});
		}
		
		function getBack(){
	$.ajax({
		type: "POST",
		url: "/backer.php",
	}).done(function( msg ) {
		$("#backers").html(msg);
		changeSize();
		});
		}
		
		$(function () {
            $("#movingd").click(function () {
                $.ajax({
		url: "/signOut.php",
	})
	window.location.href="/signOut.php";
                return false;
            });
        });
		
		
	
  </script>
</body>
