<?php
					echo "<style>
					.submitParam{
border:none;
background:transparent;
color:blue;
text-decoration:underline;
cursor:pointer;
}
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
li
{
float:left;
margin:0px 10px;
}
a
{
display:block;
}
#titleThingy{
transition: all .2s;
-webkit-transition: all .2s; /* Safari */
}
</style>";
echo "<div style='text-align:center;font-size:25px;margin:auto;background-color:orange;width:250px' id='titleThingy'><b>Freind Feed</b></div></br>";
					// Create connection
					include 'zzzz.php';
					// Check connection
					if (mysqli_connect_errno($con))
					{
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
			
					$result = mysqli_query($con,"SELECT * FROM world ORDER BY dateTime DESC");
					
					$loop=0;
					while($row = mysqli_fetch_array($result))
					{
						
						echo "<div class='postOuter' ";
						if ($loop==0) {
							echo "id='latest' ";
						}
						echo "><div class='box left'><ul>";
						echo "<li>lol(4now)</li><li>Burn</li><li>Opinion</li><li>Retell</li>";
						echo "</ul></div>";
						echo $row['post'];
						echo "<br></br>";
						echo "</div>";
						echo " " . "<div class='textOnBottom'><img src=/" . $row['author'] . "/" . $row['profPicAuthor'] . " style='width:40px;height:40px'><form action='/userPage.php'><input name='username' type='hidden' value='" . $row['author'] . "'><input type='submit' class='submitParam' value=' @" . $row['author'] . "'></form>" . "<span style='color:green'><b>" . $row['dateTime'] . "</b></span></div>"; 
						echo "<hr></br>";
						$loop++;
					}
				/*<?php
				$date = date_create('2000-01-01');
				echo date_format($date, 'Y-m-d H:i:s');
				?>*/	
					mysqli_close($con);
header("Refresh:5");
				?> 