function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

  x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
getLocation();

function initialize () {
  var input = document.getElementById('searchTextField')
  var autocomplete = new google.maps.places.Autocomplete(input)
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var place = autocomplete.getPlace()
    document.getElementById('city2').value = place.name
    document.getElementById('cityLat').value = place.geometry.location.lat()
    document.getElementById('cityLng').value = place.geometry.location.lng()
    //alert("This function is working!");
    //alert(place.name);
    // alert(place.address_components[0].long_name);

  })
}

google.maps.event.addDomListener(window, 'load', initialize)