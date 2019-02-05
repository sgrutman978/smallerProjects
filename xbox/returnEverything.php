<?php
$con = mysqli_connect("localhost", 'sgrutman978', 'terpCode1234', "abcdefg");
// if($_POST['seen'] == 0){
//   echo "<style>
// .abc, .def{
//   display:none;
//  }
//   </style>";
// }else{
//   echo "<style>
// .abc, .def{
//   display:inline;
//  }
//   </style>";
// }
  $cars = array("nhl", "madden", "fifa");
for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<table><tr>
     <td>Rank</td>
    <td>Name</td>
    <td>Wins</td>		
    <td>Losses</td>";
if($cars[$x] == "nhl"){
    	echo "<td>Wins Without Sam</td>		
    <td>Losses Without Sam</td>";
    }
  echo "</tr>";
  $result = mysqli_query($con,"SELECT * FROM xboxGames ORDER BY " . $cars[$x] . "rank");
    while($row = mysqli_fetch_array($result)){
    	if($row[$cars[$x] . 'rank'] != -3){
    		echo "<tr><td>" . $row[$cars[$x] . 'rank'] . "<input type='button' value='+' class='abc' id='" . $cars[$x] . 'rank' . "' name='" . $row['playerID'] . "' /> <input type='button' value='-' id='" . $cars[$x] . 'rank' . "' class='def' name='" . $row['playerID'] . "' /></td>";
if($row[$cars[$x] . "rank"] == 1){
          echo "<td style='font-size:25px'><img src='https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRfQ4SyhmvgR12TmQQSTQ9Iqt7zwgMrigB3pi6sPGE1lzaWmhmmzw' style='height:35px'>";
        }else{
          echo "<td>";
        }
 echo $row['player'] . "</td>
    <td>" . $row[$cars[$x] . 'wins'] . " <input type='button' value='+' class='abc' id='" . $cars[$x] . 'wins' . "' name='" . $row['playerID'] . "' /> <input type='button' value='-' id='" . $cars[$x] . 'wins' . "' class='def' name='" . $row['playerID'] . "' /></td>		
    <td>" . $row[$cars[$x] . 'losses'] . " <input type='button' value='+' class='abc' id='" . $cars[$x] . 'losses' . "' name='" . $row['playerID'] . "' /> <input type='button' value='-' id='" . $cars[$x] . 'losses' . "' class='def' name='" . $row['playerID'] . "' /></td>";
    if($cars[$x] == "nhl"){
    	echo "<td>" . $row[$cars[$x] . 'RWSwins'] . " <input type='button' value='+' class='abc' id='" . $cars[$x] . 'RWSwins' . "' name='" . $row['playerID'] . "' /> <input type='button' value='-' id='" . $cars[$x] . 'RWSwins' . "' class='def' name='" . $row['playerID'] . "' /></td>		
    <td>" . $row[$cars[$x] . 'RWSlosses'] . " <input type='button' value='+' class='abc' id='" . $cars[$x] . "RWSlosses" . "' name='" . $row['playerID'] . "' /> <input type='button' value='-' id='" . $cars[$x] . 'RWSlosses' . "' class='def' name='" . $row['playerID'] . "' /></td>";
    }
  echo "</tr>";
}
}
  
echo "</table></br>";
}


  ?>

  


