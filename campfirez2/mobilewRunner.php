<script src="/jquery.js" ></script>
<div id='stuff' style='width:100%;height:92%;position:absolute;top:8%;left:0px;overflow-y:scroll'>a</div>
<script>
var ii = 1;
$(document).ready(function(){
getStuff();
    });

setInterval(
	function() {
	getStuff();
	}
	, 15000);

function getStuff(){
		if(ii == 1){
	$.ajax({
		type: "POST",
		url: "/mobilew.php",
	}).done(function( msg ) {
		$("#stuff").html(msg);
		});
		}
		if(ii == 2){
	$.ajax({
		type: "POST",
		url: "/mover.php",
	}).done(function( msg ) {
		$("#stuff").html(msg);
		});
		}
		if(ii == 3){
	$.ajax({
		type: "POST",
		url: "/signOut.php",
	}).done(function( msg ) {
		$("#stuff").html(msg);
		});
		}
		if(ii == 4){
	$.ajax({
		type: "POST",
		url: "/posts.php",
	}).done(function( msg ) {
		$("#stuff").html(msg);
		});
		}
		}
		
		$(function () {
            $("#thingy").click(function () {
                $("#menu").animate({
                    top: "6%"
                }, 500);
				 return false;
            });
			$("#xout").click(function() {
			getStuff();
	$("#menu").animate({
                    top: "-100%"
                }, 500);
	});
	$("#4").click(function() {
	ii = 4;
			getStuff();
	$("#menu").animate({
                    top: "-100%"
                }, 500);
	});
	$("#1").click(function() {
	ii = 1;
			getStuff();
	$("#menu").animate({
                    top: "-100%"
                }, 500);
	});
	$("#2").click(function() {
	ii = 2;
			getStuff();
	$("#menu").animate({
                    top: "-100%"
                }, 500);
	});
	$("#3").click(function() {
	ii = 3;
			getStuff();
	$("#menu").animate({
                    top: "-100%"
                }, 500);
	});
        });
		
		

	
  </script>
<div style='position:fixed;width:100%;height:8%;top:0px;left:0px;background-color:black;color:white;text-align:center;font-size:100px;font:bold'>
<div style='position:absolute;width:85%;height:100%;top:0px;left:0px;color:white;text-align:center;font-size:100px;font:bold'>
WEINER 2013</div>
<div id='thingy' style='position:absolute;width:15%;height:100%;top:0px;right:0px;color:white;text-align:center;font-size:100px;font:bold'>
//</div>
</div>
<div id='menu' style='position:absolute;width:65%;height:35%;top:-100%;background-color:red;right:20%;color:white;text-align:center;font-size:100px;font:bold'>
<div id="1" style="position:absolute;top:0px;left:0px;width:100%;height:25%">Live Broadcast</div> 
<div id="2" style="position:absolute;top:25%;left:0px;width:100%;height:25%">Current Games</div> 
<div id="3" style="position:absolute;top:50%;left:0px;width:100%;height:25%">All Games</div> 
<div id="4" style="position:absolute;top:75%;left:0px;width:100%;height:25%">Teams & Stats</div> 
<div id="xout" style="position:absolute;top:0px;right:0px">x</div> 

</div>

