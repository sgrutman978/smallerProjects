<style>
.tile{
	background-size:cover;
background-repeat:no-repeat;
opacity:0;
background-position:center;
}
#yup1, #yup12{
width:7.7%;
height:12.5%;
position:fixed;
bottom:25.1%;
right:23%;
}
#yup2{
width:15.4%;
height:25%;
position:fixed;
bottom:0%;
right:23%;
}
#yup3{
width:23%;
height:37.5%;
position:fixed;
bottom:0%;
right:0%;
}
#yup5{
width:38.4%;
height:62.5%;
position:fixed;
bottom:37.5%;
right:0%;
}
#yup8{
width:61.6%;
height:100%;
position:fixed;
bottom:0%;
right:38.4%;
}
#homeB{
	top:33px;
	left:45px;
	width:35px;
	height:35px;
	background-color:pink;
	position:fixed;
}
.imgs{
	width:100%;
	height:100%;
}
</style>
<body style="/*background-image:url(beachh.JPG);background-size:cover;background-position:center*/background-color:rgb(250,190,109)">
<?php
$files1 = scandir("collage/");
?>

<div id="yup12" class="tile" style="right:30.7%;background-color:red"></div>
<div id="yup2" class="tile"></div>
<div id="yup3"class="tile"></div>
<div id="yup5"class="tile"></div>
<div id="yup8"class="tile"></div>
<div id="yup1"class="tile"></div>
<div id="homeB"></div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
var numb = 100;
var tempB = 0.0;
var tempW = 0.0;
var tempR = 0.0;
var tempH = 0.0;
var target = 0.0;
var toucha = true;
var rand = 0;
var temp3 = 0;
var temp4 = 0;

var jsArray = Array();
<?php
 $numArray=count($files1);
 for($i=2;$i<$numArray;$i++){
  echo "jsArray[".($i-2)."] = encodeURIComponent('". $files1[$i] . "'.trim());\n";
 }
?>

//populate boxes with unique pictures to start

var divA = Array("yup1", "yup12", "yup2", "yup3", "yup5", "yup8");

for(var ww = 0; ww < 6; ww++){
rand = jsArray[Math.floor(Math.random() * jsArray.length)];
$("#"+divA[ww]).css('background-image', 'url(collage/'+rand+')');
}

for(var gg = 0; gg < 6; gg++){
	for(var vv = 0; vv < 6; vv++){
		if($("#"+divA[gg]).css('background-image') == $("#"+divA[vv]).css('background-image') && vv != gg){
			rand = jsArray[Math.floor(Math.random() * jsArray.length)];
			$("#"+divA[gg]).css('background-image', 'url(collage/'+rand+')');
			gg = 0;
			vv = 0;
		}
	}
}

//Intro animations

setTimeout(function(){
$('#yup1').animate({"opacity": 1},1000);
}, 500);
setTimeout(function(){
$('#yup12').animate({"opacity": 1},1000);
}, 750);
setTimeout(function(){
$('#yup2').animate({"opacity": 1},1000);
}, 1000);
setTimeout(function(){
$('#yup3').animate({"opacity": 1},1000);
}, 1250);
setTimeout(function(){
$('#yup5').animate({"opacity": 1},1000);
}, 1500);
setTimeout(function(){
$('#yup8').animate({"opacity": 1},1000);
}, 1750);


//populate arrays
var divals = Array();
var qq = 0;

for(var ii = 0; ii < 6; ii++){
divals[qq] = ""+((parseInt($("#"+divA[ii]).css("bottom").slice(0, -2))/$(document).height())*100)+"%";
	divals[qq+1] = ""+((parseInt($("#"+divA[ii]).css("width").slice(0, -2))/$(document).width())*100)+"%";
	divals[qq+2] = ""+((parseInt($("#"+divA[ii]).css("right").slice(0, -2))/$(document).width())*100)+"%";
	divals[qq+3] = ""+((parseInt($("#"+divA[ii]).css("height").slice(0, -2))/$(document).height())*100)+"%";
	qq+=4;
}

setTimeout(function(){
alert("This site has not been finished yet, still under construction ... but isn't it cool so far!? :D Watch some of the animations to come and try clicking a box! #JQueryMagic");
}, 5000);
//rediculosness
var c1 = 0;
var c2 = -1;
var timer = 0;
var ee = 0;
	setInterval(function moveStuff(){
		if(toucha){
			toucha=false;
		timer = setInterval(function(){
			if(c1==6){
		c1=0;
	}
	$("#"+divA[c1]).animate({
		bottom: divals[((c1*4)+4+(4*c2))%24],
		width: divals[((c1*4)+5+(4*c2))%24],
		right: divals[((c1*4)+6+(4*c2))%24],
		height: divals[((c1*4)+7+(4*c2))%24]
	}, 1000);
	c1++;
	if(((c1*4)+7+(4*c2))%24==3){
		var ooo = c1;
		setTimeout(function(){
			var indiv = false;
			while(!indiv){
				var checker44 = false;
				rand = jsArray[Math.floor(Math.random() * jsArray.length)];
			for(var gg = 0; gg < 6; gg++){
				if($("#"+divA[gg]).css('background-image') == ("collage/"+rand)){
					checker44 = true;
				}
			}
			if(!checker44){
$("#"+divA[ooo]).css('background-image', 'url(collage/'+rand+')');
indiv = true;
}
}
}, 1500);
	}
	if(c1==6){
		c1=0;
	}
	ee++;
	if(ee==6){
		clearInterval(timer);
		ee=0;
	}
},350);

c2++;
c1=6-(c2%6);
setTimeout(function(){
toucha=true;
}, 2500);
}
	},9500);
//ends here


$("#yup1,#yup12,#yup2,#yup3,#yup5,#yup8").click(function(e){
	if(toucha){
		toucha = false;
	target = e.target;
	$("#homeB").css("z-index", numb+10);
	numb+=10;
	$(target).css("z-index", numb);
	tempB = (parseInt($(target).css("bottom"))/parseInt($(document).height()))*100 + "%";
	tempW = (parseInt($(target).css("width"))/parseInt($(document).width()))*100 + "%";
	tempR = (parseInt($(target).css("right"))/parseInt($(document).width()))*100 + "%";
	tempH = (parseInt($(target).css("height"))/parseInt($(document).height()))*100 + "%";
	// tempB = $(target).css("bottom");
	// tempW = $(target).css("width");
	// tempR = $(target).css("right");
	// tempH = $(target).css("height");
$(target).animate({
bottom:0,
right:0,
width:'100%',
height:'100%'
}, 1000);
}
});

$("#homeB").click(function(){
$(target).animate({
bottom:tempB,
right:tempR,
width:tempW,
height:tempH
}, 1000, function(){
	toucha = true;
});

});

</script>
</body>