<?php
for($i = 0; $ii < 5; $ii++){
	   echo "<div style='background-color:green'>Saved</div>";
	}
	?>

	<head>
       <!--  // <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script> -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script type="text/javascript">
// var latitude1  = 39.46;
// var longitude1 = -76.78;
// var latitude2  = 38.99;
// var longitude2 = -76.95;

// var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(latitude1,longitude1), new google.maps.LatLng(latitude2,longitude2));       
// alert(Math.round( (distance*0.000621371192) * 10 ) / 10);
        
        function initialize() {
        var address = (document.getElementById('my-address'));
        var autocomplete = new google.maps.places.Autocomplete(address);
        autocomplete.setTypes(['geocode']);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
        }
      });
}
function codeAddress() {
    geocoder = new google.maps.Geocoder();
    var address = document.getElementById("my-address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {

      alert("Latitude: "+results[0].geometry.location.lat());
      alert("Longitude: "+results[0].geometry.location.lng());
      } 

      else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <input type="text" id="my-address">
        <button id="getCords" onClick="codeAddress();">getLat&Long</button>