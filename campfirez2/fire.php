<html>
<body>

<?php
$phpArray = array();

	$con=mysqli_connect("localhost",'sgrutman978', 'terpCode1234',"jokenetwork");
		$result = mysqli_query($con,"SELECT * FROM firstcampfireusers");
		$uiu = 0;
		while($row = mysqli_fetch_array($result)){
echo "<div style='background-color:lightgrey;text-align:center;font-size:12px;width:7%;height:7%;position:absolute;left:" . $row['lefter'] . "%;top:" . $row['top'] . "%' id='" . $row['userid'] . "'><img src='/" . $row['usernamea'] . "/" . $row['profPica'] . "' style='width:100%;height:100%'>@" . $row['usernamea'] . "</div>";
			
			if($row['userid'] != $_COOKIE['diresu']){
			$phpArray[$uiu] = $row['userid'];
			$uiu++;
		}
		
		}		

?>

<!--<div style="background-color:green;width:100px;height:100px;position:absolute;left:0px;top:0px" id="boxer">
a</div>-->

<img src='/immm.jpg' style='width:100%;height:100%' id="lll">





<script>

  var play=false;
  var latest="";
  var x;
var x2;
var x3;
var x4;
var keys = {};
var ff = $(window).height();
var offset;
var ggg;
var i;
var tt;
var jArray = <?php echo json_encode($phpArray ); ?>;


$(document).ready(function(){
  
  $([window, document]).focus(function(){
	  play=false;
	}).blur(function(){
	  play=true;
	});
  
resizeBoxes();

	});
	
	/*$(".postIt").click(function() {
		newPost();
		getPosts();
		$(".postText").val("");
	});
	$(".hashtag").click(function() {
		$(".postText").val($(".postText").val() + "#");
	});
	$(".attag").click(function() {
		$(".postText").val($(".postText").val() + "@");
	});
	$(".campfiretag").click(function() {
		$(".postText").val($(".postText").val() + "^");
	});*/
	
	
	
	$('#lll').click(function(e) {
  var ggg = "<?php echo '#' . $_COOKIE['diresu']; ?>";
  offset = $(this).offset();
   x = (e.clientX - offset.left - ((($(window).width()/100)*7)/2))*100/$(window).width();
   y = ((e.clientY - offset.top - ((($(window).width()/100)*7)/2))/$(window).height())*100;
	$(ggg).animate({
                    left: x + "%",
					top: y + "%",
                }, 1500);
    	saveLeft();
		saveTop();
	
});
	
	
	setInterval(
	function() {
	checkMove();
	}
	, 2500);
	
	setInterval(
	function() {
	resizeBoxes();
	}
	, 1009);
	
	setInterval(
	function() {
	getComments();
	}
	, 100);
	
	
	function resizeBoxes(){
	var ggg = "<?php echo '#' . $_COOKIE['diresu']; ?>";
var boxw = ($(window).width()/100)*7;
$(ggg).css({'width':boxw});
		$(ggg).css({'height':boxw});
	for(i=0;i<jArray.length;i++){
	tt = jArray[i];
		$('#' + tt).css({'width':boxw});
		$('#' + tt).css({'height':boxw});
		}
	}
	
	function checkMove(){
	for(i=0;i<jArray.length;i++){
	tt = jArray[i];
		$.ajax({
		type: "GET",
		url: "/moveBox.php?ider=" + tt,
		dataType: 'json',
    success: function(data){ 
		$('#' + data.m3).animate({
                    left: data.m1 + "%",
					top: data.m2 + "%",
                }, 1500);
				}
		});
		}
	}
	
	

	function saveLeft(){
		$.ajax({
		type: "GET",
		url: "/mover2.php?left=" + x,
		})
	}
	
	

	
	function saveTop(){
		$.ajax({
		type: "GET",
		url: "/mover.php?top=" + y,
		})
	}
	
	
	
	
  </script>

	</body>
	</html>