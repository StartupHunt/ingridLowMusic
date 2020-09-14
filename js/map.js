function initMap() {
  // The location of Uluru
  var taxicab = { lat: 19.4299836, lng: -99.1566844 };
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("google-map"), {
    zoom: 20,
    center: taxicab,
  });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({ position: taxicab, map: map });
}
