<body style='background-color:yellow;overflow:hidden'>
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
<div style='font-size:50px;color:blue;margin:auto;left:0;top:1%;right:0px;height:54%;font-family:Rochester;position:absolute;text-align:center'>
<!--0122100-->
<?php
$stru = "Hi Paul, it was great meeting you.|Isn't this cool?!|It makes the letters go crazy and then|they place themselves in order!|This site only took 80 lines of code!|I would really like to help you with your|community service program to teach computer science|to children. Keep in touch and let me know|when I may be able to help.|-Steven Grutman|";
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
times = Math.floor(Math.random()*2500) + 1500;
$("#a" + hillo).animate({
                    opacity: "0"
                }, times);
}
}, 5525*<?php echo count($breaks); ?> + 501);
    });
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