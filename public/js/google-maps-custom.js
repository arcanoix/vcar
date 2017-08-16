var autocomplete = new google.maps.places.Autocomplete(document.getElementById('location'), {types: ['geocode'], componentRestrictions: {country: 've'}});;
var form_location = $('#form_location');

form_location.on('submit', function(e){
    e.preventDefault();
});

google.maps.event.addListener(autocomplete, 'place_changed',
   function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      document.getElementById("lat").value = lat;
      document.getElementById("lng").value = lng;
   }
);

google.maps.event.addListener(autocomplete, 'place_changed', function(){
    var place = autocomplete.getPlace();
    if(!place.geometry)
    {
        $.ajax({
            type: "POST",
            url: form_location.attr('action'),
            data: form_location.serialize(),
            success: function(location)
            {
                var latLng = new google.maps.LatLng(location.latitude, location.longitude);
                maps[0].map.setCenter(latLng);

                new google.maps.Marker({position: latLng, map: maps[0].map, draggable: true});
            }
        });
    }
    else
    {
        maps[0].map.setCenter(place.geometry.location);
        maps[0].markers[0].setPosition(place.geometry.location);
    }

});
