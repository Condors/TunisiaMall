function initialize() {
    var myLatLng = {lat: 36.848022, lng: 10.279505};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 16,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);