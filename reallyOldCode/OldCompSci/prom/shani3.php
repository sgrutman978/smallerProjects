<body style='background-color:#FFBBDD;overflow:hidden'>
<style>
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

<div id='prom' style='font-size:260px;color:green;margin:auto;left:0;top:3%;right:0%;bottom:0%;opacity:0;height:100%;font-family:Rochester;position:absolute;text-align:center'>
<div style="width:100%;height:54%;position:absolute;top:23%">Prom?&hearts;</div></div>

<img id="z0" src="http://www.emblibrary.com/EL/Product_images/C7051.jpg" style="opacity:0;width:13%;left:4%;top:0%;position:absolute">
<img id="z1" src="http://people.uwec.edu/piercech/animals/newt-cal.jpg" style="opacity:0;width:28.7%;left:17%;top:0%;position:absolute">
<img id="z2" src="http://static3.wikia.nocookie.net/__cb20110917000616/muppet/images/5/5a/Elmo-elmo-elmo.jpg" style="opacity:0;width:11.7%;left:45.7%;top:0%;position:absolute">
<img id="z3" src="http://i1.ytimg.com/vi/au98eoXugrs/hqdefault.jpg" style="opacity:0;width:19%;left:57.4%;top:0%;position:absolute">
<img id="z4" src="http://images1.fanpop.com/images/photos/1500000/Spongebob-spongebob-squarepants-1595657-1024-768.jpg" style="opacity:0;width:19%;left:76.4%;top:0%;position:absolute">

<img id="z5" src="http://2.bp.blogspot.com/-kgOFlVac4Rk/TWG2vRaJuuI/AAAAAAAAAKo/5GoANfzeIUY/s1600/push-ups.jpg" style="opacity:0;width:21.5%;left:5%;bottom:0%;position:absolute">
<img id="z6" src="http://i706.photobucket.com/albums/ww69/recycledgarbage/pretzels1.jpg" style="opacity:0;width:12%;left:26%;bottom:0%;position:absolute">
<img id="z7" src="http://bloguin.com/crystalballrun/images/stories/ea%20sports%20logo.png" style="opacity:0;width:15.7%;left:39.2%;bottom:0%;position:absolute">
<img id="z8" src="http://www.xda-developers.com/wp-content/uploads/2014/01/Happy-New-Year.jpg" style="opacity:0;width:21.5%;left:56%;bottom:0%;position:absolute">
<img id="z9" src="http://facetime-forpc.com/wp-content/uploads/2013/11/Facetime-For-PC-300x300.jpeg" style="opacity:0;width:16.2%;left:77.5%;bottom:0%;position:absolute">


<div style='font-size:50px;color:green;margin:auto;left:0;top:1%;right:0px;height:54%;font-family:Rochester;position:absolute;text-align:center'>
<!--0122100-->
<?php
$stru = "Dear Shani,|I can't stop smiling and laughing when I'm with you|You bring out the crazy inner kid in me|We always have fun together no matter what we're doing|You're #adorbs and #funny and #beautiful|I can't get you out of my head because you're #amazing|Love your favorite doofball :P|";
$array = str_split($stru);
$breaks = array();
array_push($breaks, 0);
for($pop = 0; $pop < count($array); $pop++){ 
if($array[$pop] == "|"){
array_push($breaks, $pop);
echo "<span class='letters' style='opacity:0' id='a" . $pop . "'>" . $array[$pop] . "</span>";
echo "</br>";
}else{
echo "<span class='letters' id='a" . $pop . "'>" . $array[$pop] . "</span>";
}
}
?>
<script>
var truth;
var hillo;
$(document).ready(function(){

<?php
	for($dot = 1; ($dot) < count($breaks); $dot++){
	echo "setTimeout(function() { 
scramble(" . $dot . ", 1); 
scramble(" . $dot . ", 2);
}, " . ($dot-1) . "*4800 + 501);";
	}
	?>

setTimeout(function() { 
for(hillo = 0; hillo <= <?php echo count($array); ?>; hillo++){
times = Math.floor(Math.random()*2500) + 2001;
$("#a" + hillo).animate({
                    opacity: "0"
                }, times);
}
}, 5525*<?php echo count($breaks); ?> + 501);

    });
	
	setTimeout(function() { 
	$("#z0").animate({
                    opacity: "1"
                }, 1501);
				$("#z9").animate({
                    opacity: "1"
                }, 1501);
}, 5525*<?php echo count($breaks); ?> + (1001*1) + 6001);
setTimeout(function() { 
	$("#z1").animate({
                    opacity: "1"
                }, 1501);
				$("#z8").animate({
                    opacity: "1"
                }, 1501);
}, 5525*<?php echo count($breaks); ?> + (1001*2) + 6001);
setTimeout(function() { 
	$("#z2").animate({
                    opacity: "1"
                }, 1501);
				$("#z7").animate({
                    opacity: "1"
                }, 1501);
}, 5525*<?php echo count($breaks); ?> + (1001*3) + 6001);
setTimeout(function() { 
	$("#z3").animate({
                    opacity: "1"
                }, 1501);
				$("#z6").animate({
                    opacity: "1"
                }, 1501);
}, 5525*<?php echo count($breaks); ?> + (1001*4) + 6001);
setTimeout(function() { 
	$("#z4").animate({
                    opacity: "1"
                }, 1501);
				$("#z5").animate({
                    opacity: "1"
                }, 1501);
}, 5525*<?php echo count($breaks); ?> + (1001*5) + 6001);
	
	setTimeout(function() { 
$("#prom").animate({
                    opacity: "1"
                }, 3501);
}, 5525*<?php echo count($breaks); ?> + (7001) + 6001);
	
	function scramble(evt, type){
	<?php
	for($dot = 1; ($dot) < count($breaks); $dot++){
	echo "if(evt == " . ($dot) . "){
	start = " . $breaks[$dot-1] . ";
	end = " . $breaks[$dot] . ";
	}";
	}
	?>
	for(jjj = 0; jjj < 3; jjj++){
	for(hillo = start; hillo <= end; hillo++){
	heys = Math.floor(Math.random()*140) - 70;
	heyss = Math.floor(Math.random()*200) - 80;
	times = Math.floor(Math.random()*1100) + 1200;
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
	}
	}
}
</script>
</br>
</div>
</body>