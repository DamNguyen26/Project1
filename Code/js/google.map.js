google.maps.event.addDomListener(window, 'load', init);

function init() {
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(21.00352336800275, 105.84909397575312),
        disableDefaultUI: false,
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(21.00352336800275, 105.84909397575312),
        map: map,
        mapTypeControl: true
    });
}

// Initialize and add the map
// function initMap() {
//     // The location of Uluru
//     const uluru = { lat: 21.00352336800275, lng: 105.84909397575312};
//     // The map, centered at Uluru
//     const map = new google.maps.Map(document.getElementById("map"), {
//       zoom: 15,
//       center: uluru,
//     });
//     // The marker, positioned at Uluru
//     const marker = new google.maps.Marker({
//       position: uluru,
//       map: map,
//     });
//   }