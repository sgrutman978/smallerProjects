<?php
include 'zzzz.php';
$result9 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE['diresu']);
while($row9 = mysqli_fetch_array($result9)){
$result = mysqli_query($con,"SELECT * FROM 2" . $row9['username'] . " WHERE type = 1");
}
$i = 0;
		while($row = mysqli_fetch_array($result)){
echo "<div id='thing" . $i . "' class='boxThingys2'>
<div style='margin:auto;top:0px;font-size:30px;text-align:center;padding:3px;height:38px'>" . $row['tentName'] . "</div>";
		if($row['tentName'] == 'World'){
		$result2 = mysqli_query($con,"SELECT * FROM 1posts ORDER BY postID DESC");
		}
		if($row['tentName'] == 'Friends'){
		$result9 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE['diresu']);
$row9 = mysqli_fetch_array($result9);
$people = '';
$peoples = '';
$result10 = mysqli_query($con,"SELECT * FROM 2" . $row9['username'] . " WHERE type = 2");
while($row10 = mysqli_fetch_array($result10)){
$people .= 'SELECT * FROM 2' . $row10['username'] . ' WHERE type = 5 UNION ALL ';
}
$peoples = substr($people, 0, strlen($people)-11);
$result2 = mysqli_query($con,"" . $peoples . " ORDER BY postID DESC");
		}
		if($row['tentName'] == 'Me'){
		$result9 = mysqli_query($con,"SELECT * FROM 1users WHERE userID = " . $_COOKIE['diresu']);
		while($row9 = mysqli_fetch_array($result9)){
		$result2 = mysqli_query($con,"SELECT * FROM 2" . $row9['username'] . " WHERE type = 5 ORDER BY postID DESC");
		}
		}
		
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
		$i++;
}
?>




<!--$result2 = mysqli_query($con,"SELECT * FROM worldposts1 ORDER BY dateTime DESC");
		while($row = mysqli_fetch_array($result2)){
		if($row['hasPic'] == 1){
		
}else{

		}
		}
		


<div class='likesAndStuff'>
		 <div style='width:100%;height:20%;background-color:green'>like</div>
		<div style='width:100%;height:20%;background-color:red'>dislike</div>
		<div style='width:100%;height:20%;background-color:blue'>comment</div>
		<div style='width:100%;height:20%;background-color:purple'>share</div>
		<div style='width:100%;height:20%;background-color:yellow'>reply</div>
		</div> 
		
		
		
		
		
		
		
			<div style='border-style:solid;border-color:black;;border-width:0px;border-right-width:1px;border-bottom-width:1px;width:200px;height:50px;top:0px;left:0px;position:relative'>a
		<img src='/" . $row['author'] . "/" . $row['profPicAuthor'] . "' style='position:absolute;top:0px;left:0px;width:50px;height:50px'>
		<div style='height:18px;width:150px;left:50px;top:0px;position:absolute;text-align:center;padding:16px 0px'>@" . $row['author'] . "
		</div>
		</div>
		-->
