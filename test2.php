<body style="padding:0px;padding-top:26px;margin:0">
    <!--<preference name="DisallowOverscroll" value="true" />-->
     <div id="body1" style="opacity:0;width:100%;height:100%"></div>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
        


<script>

         //  setTimeout(function(){
         //   $(".bigBoxes").css("height", Math.floor($(document).width()/3) + "px");
         // }, 1000);

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

          $( document ).ready(function() {
            $.ajax({
          type: "POST",
          url: "http://stevengrutman.com/wristband/test3.php"
        })
          .done(function( msg ) {
            document.getElementById("body1").innerHTML = msg;
              }).done(function(){
                 $(".bigBoxes").css("height", Math.floor(2*$(".bigBoxes").width()/5) + "px");
                  $( "#body1" ).animate({
                  opacity: 1
                 }, 1000);
              });
          });

          setInterval(function(){
            getLocation();
             $.ajax({
          type: "POST",
          url: "http://stevengrutman.com/wristband/test4.php"
        })
          .done(function( msg ) {
            msg = JSON.parse(msg);
            if(lat!=1000.0){
            for(var i = 0; i < msg.length; i++) {
              var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat,longi), new google.maps.LatLng(msg[i][1],msg[i][2]));       
 document.getElementById("r"+msg[i][0]+"").innerHTML = (Math.round((distance*0.000621371192) * 10 ) / 10);
     // $('#r'+msg[i][0]+'A').html(msg[i][0]);
    }
    }
              });
          }, 15000);

</script>
</body>