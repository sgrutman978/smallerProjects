<body style="padding:0px;padding-top:26px;margin:0">
    <!--<preference name="DisallowOverscroll" value="true" />-->
    
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
        

 <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
         <style>
        .bigBoxes{
          width:100%;
         position:relative;
         height:0px;
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
        #body1{
          opacity:0;
          width:100%;
          height:100%;
        }
        </style>
    </head>


 <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>


 <script type="text/javascript" charset="utf-8" src="cordova.js"></script>

 <div id="body1">
 <div class="bigBoxes" style="background-color:green;height:500px">dshbfhasdhfk</div>
 </div>

    <script type="text/javascript" charset="utf-8">

         //  setTimeout(function(){
         //   $(".bigBoxes").css("height", Math.floor($(document).width()/3) + "px");
         // }, 1000);

//  var lat = 1000.0;
// var longi = 1000.0;
// getLocation();
// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else {
//         alert("Geolocation is not supported by this browser.");
//     }
// }
// function showPosition(position) {
//    lat = position.coords.latitude;
//     longi = position.coords.longitude; 
//     alert(lat);
//     alert(longi);
// }


// document.addEventListener("deviceready", GetGeoLocation , false);
// GetGeoLocation();
// function  GetGeoLocation () {
//   var options =  { maximumAge: 3000, timeout: 3000, enableHighAccuracy: true };
//   navigator.geolocation.getCurrentPosition(ShowPosition, ShowError, options);
// }

// function ShowPosition(position) {
//     alert("Latitude: " + position.coords.latitude +
//           "Longitude: " + position.coords.longitude);
//      document.getElementById("r1").innerHTML = (position.coords.latitude);
// }

// function ShowError(error) {
//    alert("Errorcode: "    + error.code    +
//          "Errormessage: "+ error.message );
// }

var lat = 1000.0;
var longi = 1000.0;
var ok = false;
 var distance;

$(document).ready(function(){
  $(".bigBoxes").css("height", Math.floor($(".bigBoxes").width()/2) + "px").done(function(){
 //onDeviceReady();
  });
 

  //.then(function(){
  // while(true){
  //   $(".bigBoxes").css("height", Math.floor($(".bigBoxes").width()/2) + "px");
  //   if($(".bigBoxes").css("height") != "0px"){
  //                 $( "#body1" ).animate({
  //                 opacity: 1
  //                }, 1000);
  //                 break;
  //               }
  //             }
 // });
});
    // device APIs are available
    //
    function onDeviceReady() {
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
        // var deferred = $.Deferred();
        // deferred.resolve();
        // return deferred.promise();
    }

var onSuccess = function(position) {
  lat = position.coords.latitude;
  longi = position.coords.longitude;
   document.getElementById("body1").innerHTML = " ";
 //startAt(97).endAt(98).
    var scoresRef = new Firebase("https://blistering-fire-195.firebaseio.com");
scoresRef.orderByChild("lat").startAt(97).endAt(98).on("value", function(snapshot) {
  snapshot.forEach(function(data) {
      //alert(data.child("id").val() + " " + data.child("longi").val() + " " + data.child("lat").val() + " " + lat + " " + longi);  
    distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat,longi), new google.maps.LatLng(data.child("lat").val(),data.child("longi").val()));    
//alert(distance);
 $("#body1").append("<a href='pie.html#" + data.child("id").val() + "'><div class='bigBoxes'><img src='http://stevengrutman.com/wristband/" + data.child("pic").val() + "' class='bigImage' /><div class='distance' id='r" + data.child("id").val() +  "'></div></div></a>");
 document.getElementById("r"+data.child("id").val()+"").innerHTML = (Math.round((distance*0.000621371192) * 10 ) / 10);
  });
}); 
$(".bigBoxes").css("height", Math.floor($(".bigBoxes").width()/2) + "px");
                  $( "#body1" ).animate({
                  opacity: 1
                 }, 1000);
 

  // alert(lat + "  " + longi);
  //   alert('Latitude: '          + position.coords.latitude          + '\n' +
  //         'Longitude: '         + position.coords.longitude         + '\n' +
  //         'Altitude: '          + position.coords.altitude          + '\n' +
  //         'Accuracy: '          + position.coords.accuracy          + '\n' +
  //         'Altitude Accuracy: ' + position.coords.altitudeAccuracy  + '\n' +
  //         'Heading: '           + position.coords.heading           + '\n' +
  //         'Speed: '             + position.coords.speed             + '\n' +
  //         'Timestamp: '         + position.timestamp                + '\n');

};

// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: '    + error.code    + '\n' +
          'message: ' + error.message + '\n');
}


        //   $( document ).ready(function() {
        //     $.ajax({
        //   type: "POST",
        //   url: "http://stevengrutman.com/wristband/test3.php"
        // })
        //   .done(function( msg ) {
        //     document.getElementById("body1").innerHTML = msg;
        //       }).done(function(){
        //          $(".bigBoxes").css("height", Math.floor($(".bigBoxes").width()/2) + "px");
        //           $( "#body1" ).animate({
        //           opacity: 1
        //          }, 1000);
        //       });
        //   });

           setInterval(function(){
 //           // getLocation();
 //           navigator.geolocation.getCurrentPosition(onSuccess, onError);
 //             $.ajax({
 //          type: "POST",
 //          url: "http://stevengrutman.com/wristband/test4.php"
 //        })
 //          .done(function( msg ) {
 //            msg = JSON.parse(msg);
 //            if(lat!=1000.0){
 //            for(var i = 0; i < msg.length; i++) {
 //              var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat,longi), new google.maps.LatLng(msg[i][1],msg[i][2]));       
 // document.getElementById("r"+msg[i][0]+"").innerHTML = (Math.round((distance*0.000621371192) * 10 ) / 10);
 //     // $('#r'+msg[i][0]+'A').html(msg[i][0]);
 //    }
 //    }
 //              });
           onDeviceReady()
           }, 10000);


        

</script>

<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>



</body>