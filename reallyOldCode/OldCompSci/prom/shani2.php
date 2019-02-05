<body style='background-color:#FFBBDD;overflow:hidden'>
<style>
#heart {
    position: relative;
    width: 100px;
    height: 90px;
}
#heart:before,
#heart:after {
    position: absolute;
    content: "";
    left: 50px;
    top: 0;
    width: 50px;
    height: 80px;
    background: red;
    -moz-border-radius: 50px 50px 0 0;
    border-radius: 50px 50px 0 0;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0 100%;
       -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
         -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
}
#heart:after {
    left: 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 100% 100%;
       -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
         -o-transform-origin: 100% 100%;
            transform-origin :100% 100%;
}
.letters{
padding:0px 15px 0px 0px;
margin:0px -15px 0px 0px;
position:absolute;
top:-160%;
left:0%;
}
</style>
<script src="/jquery.js" ></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<div id='prom' style='font-size:260px;color:green;margin:auto;left:0;top:0%;right:0%;bottom:0%;opacity:0;height:54%;font-family:Rochester;position:absolute;text-align:center'>
Prom?
</div>
<div style='font-size:50px;color:green;margin:auto;left:0;top:10%;right:0px;height:54%;font-family:Rochester;position:absolute;text-align:center'>
<!--0122100-->
<?php
$stru = "Dear Shani,
I can't stop smiling and laughing when I'm with you 
You bring out the crazy inner kid in me  
We always have fun together no matter what we're doing  
You're #adorbs and #funny and #beautiful 
I can't get you out of my head because you're #amazing
Love your favorite doofball :P";
$array = str_split($stru);
for($pop = 0; $pop < count($array); $pop++){ 
echo "<span class='letters' id='a" . $pop . "'>" . $array[$pop] . "</span>";
if($pop == 11 || $pop == 64 || $pop == 106 || $pop == 162 || $pop == 204 || $pop == 260){
echo "</br>";
}
}
?>
<script>
var truth;
var hillo;
$(document).ready(function(){

setTimeout(function() { 
scramble(1, 1); 
scramble(1, 2);
}, 501);
setTimeout(function() { 
scramble(2, 1); 
scramble(2, 2);
}, 9501);
setTimeout(function() { 
scramble(3, 1); 
scramble(3, 2);
}, 18001);
setTimeout(function() { 
scramble(4, 1); 
scramble(4, 2);
}, 27501);
setTimeout(function() { 
for(hillo = 0; hillo <= 291; hillo++){
times = Math.floor(Math.random()*2500) + 1500;
$("#a" + hillo).animate({
                    opacity: "0"
                }, times);
}
}, 37001);
setTimeout(function() { 
$("#prom").animate({
                    opacity: "1"
                }, 2001);
}, 42501);
    });
	
	function scramble(evt, type){
	if(evt == 1){
	start = 0;
	end = 11;
	}
	if(evt == 2){
	start = 12;
	end = 106;
	}
	if(evt == 3){
	start = 107;
	end = 204;
	}
	if(evt == 4){
	start = 205;
	end = 290;
	}
	if(evt == 5){
	start = 301;
	end = 301;
	}
	for(jjj = 0; jjj < 2; jjj++){
	for(hillo = start; hillo <= end; hillo++){
	heys = Math.floor(Math.random()*140) - 70;
	heyss = Math.floor(Math.random()*200) - 80;
	times = Math.floor(Math.random()*1500) + 1200;
if(type == 1){
document.getElementById("a" + hillo).style.position="absolute";
				$("#a" + hillo).animate({
                    left: heys + "%",
					top: heyss + "%",
                }, times);
	}
	if(type == 2){
	document.getElementById("a" + hillo).style.position="relative";
	$("#a" + hillo).animate({
                    left: "0%",
					top: "0%"
                }, times);
	}
	if(type == 3){
	document.getElementById("a" + hillo).style.position="absolute";
	$("#a" + hillo).animate({
                    left: "-30%",
					top: "-30%"
                }, times);
	}
	}
	}
	
}
</script>
</br>
</div>
</body>
