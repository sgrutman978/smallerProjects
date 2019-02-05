       <!--  // <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script> -->
      <head>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
         <style>
        .bigBoxes{
          width:100%;
         height:200px; 
         position:relative;
        }
        .bigImage{
          width:100%;
          height:100%;
        }
        body{
          padding:0;
          margin:0;
        }
        .distance{
          bottom:8px;
          right:8px;
          float:right;
          position:absolute;
        }
        </style>
      </head>
      <body>
        <script>
        var lat = 1000.0;
var longi = 1000.0;
getLocation();
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
function showPosition(position) {
   lat = position.coords.latitude;
    longi = position.coords.longitude; 
    alert(lat);
    alert(longi);
}
        </script>
        <?php
include 'zzzz.php';
    $sql = "SELECT * FROM restaurants;";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
     echo "<a href='pie.html#" . $row['id'] . "'><div class='bigBoxes'><img src='http://stevengrutman.com/wristband/" . $row['pic'] . "' class='bigImage' /><div class='distance' id='r" . $row['id'] . "'></div></div></a>";
  }
  ?>
</body>
       
