function iniciarMap(){
    var coord = {lat:25.68723 ,lng: -100.47652};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 20,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}




