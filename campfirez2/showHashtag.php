<?php
include 'zzzz.php';

echo "<div style='margin:auto;top:0px;font-size:30px;text-align:center;padding:3px;height:38px'>#" . $_GET['hash'] . "</div>";
		
		$result2 = mysqli_query($con,"SELECT * FROM 3" . $_GET['hash']);
		
		
		while($row2 = mysqli_fetch_array($result2)){
		$result9 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $row2['userID']);
		$row9 = mysqli_fetch_array($result9);
		echo "<div class='postStuff'>
		<img src='/" . $row2['author'] . "/" . $row9['profPic'] . "' style='border-style:solid;border-color:black;border-width:1px;border-top-width:0px;border-right-width:0px;position:relative;float:left;width:35px;height:35px'>
		<div style='border-style:solid;border-color:black;border-width:1px;border-top-width:0px;border-left-width:0px;height:18px;position:relative;float:left;text-align:center;padding:8px 5px 9px 5px'>@" . $row2['author'] . "
		</div><div style='border-style:solid;border-color:black;border-width:1px;border-top-width:0px;height:18px;position:relative;float:right;text-align:center;padding:8px 5px 9px 5px'>
		Like <span class='entypo-thumbs-up open' style='color:green'></span>
		 Burn <span class='entypo-thumbs-down open' style='color:red'></span>
		 Share <span class='entypo-publish open' style='color:purple'></span>
		</div><div style='position:relative;margin:auto;font-size:20px;width:98%;margin-left:1%;font-family:Gloria Hallelujah;margin-top:42px;text-align:left;padding:0px'>" . $row2['post'] . "
		</div></div>";
		}
		echo "</div>";

?>

