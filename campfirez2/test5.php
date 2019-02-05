
<head>
<title>Campfirez</title>
<link rel="shortcut icon" href="/campfire.jpg" type="image/jpg">
<link rel="shortcut icon" type="image/jpg" href="/campfire.jpg" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Happy+Monkey' rel='stylesheet' type='text/css'>
<script src="/jquery.js" ></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel='stylesheet' href='style.css'>

</head> 
<body>

<div style="width:100%;height:100%;position:fixed;top:0px;left:0px" id="backers"><?php
include 'zzzz.php';
$result3 = mysqli_query($con,"SELECT * FROM users WHERE userID = " . $_COOKIE['diresu']);
		while($row = mysqli_fetch_array($result3)){
echo "<img src='/" . $row['username'] . "/" . $row['backgroundPic'] . "' style='height:100%;width:100%'>";
}
?></div>


<div class="outer" id="movingccc" style="width:0px;height:0px;left:50%;top:50%;position:absolute;white-space:nowrap;">
<?php
include 'zzzz.php';
for ($i = 1; $i < 3; $i++){
echo "<div id=outer" . $i . ">";
$result2 = mysqli_query($con,"SELECT * FROM worldposts1 WHERE spot = " . $i . " ORDER BY dateTime DESC");
		while($row = mysqli_fetch_array($result2)){
		if($row['hasPic'] == 1){
		echo "<div class='boxThingys2' style='float:left'>
		<img src='/" . $row['author'] . "/" . $row['picName'] . "' style='width:39%;height:100%;float:left'>
		<div class='postStuff'>" . $row['post'] . "<div style='position:absolute;text-align:right;bottom:0px;right:1.5%'>
		<img src='/" . $row['author'] . "/" . $row['profPicAuthor'] . "' style='float:center;position:relative;bottom:0%;width:11%;height:17%'>
		@" . $row['author'] . "</div></div>
		
		<div class='likesAndStuff'>
		 <div style='width:100%;height:20%;background-color:green'>like</div>
		<div style='width:100%;height:20%;background-color:red'>dislike</div>
		<div style='width:100%;height:20%;background-color:blue'>comment</div>
		<div style='width:100%;height:20%;background-color:purple'>share</div>
		<div style='width:100%;height:20%;background-color:yellow'>reply</div>
		</div>
		
		</div>";
}else{
echo "<div class='boxThingys2' style='float:left'>
<div class='postStuff' style='width:87%'>" . $row['post'] . "</div>
<div class='postStuff' style='position:relative;width:48%;text-align:right;height:15%;top:-30%;left:39%'>
<img src='/" . $row['author'] . "/" . $row['profPicAuthor'] . "' style='float:center;position:relative;top:30%;width:12%;height:100%'>
 @" . $row['author'] . "</div>
 <div class='likesAndStuff' style='top:-85%'>

 </div></div>";
}
		}
		echo "</div>";
		}
?></div>

<div style="position:absolute;top:0px;left:0px;width:100%">
<div class="buttons" style="font-size:31px;font-family:Happy Monkey">
<div style="width:20%;height:100%;left:40%;position:relative"><img src="/campfirez.jpg" style="width:100%;height:100%"></div>
<div style="width:5%;height:100%;position:absolute;top:-100%;float:left;text-align:center;position:relative" id="movingb">+</div>
<div style="width:5%;height:80%;position:absolute;top:-90%;float:right;text-align:center;position:relative" id="movingd">S</div>
</div>
</div>

<script>
var screenH = (((screen.height)*80)/100);
var screenW = (((screen.width)*98)/100);

$(document).ready(function(){	
hhh();
	});
	
	function hhh(){
	$("#movingccc").animate({
					width: screenW,
					height: screenH,
					left: "1%",
					top: "60px"
                }, 1000);
	}
</script>

</body>