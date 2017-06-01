function initMap(){

	// google maps is ready to be used
	var theDiv = document.querySelector('#socialMatrix-map');
	// data on Te Papa
	var socialMatrixData = {
		lat: -41.2912189,
		lng: 174.7879691
	};
	var mapOptions = {
		zoom: 15,
		center: socialMatrixData
	};
	// create the map
	var theMap = new google.maps.Map(theDiv,mapOptions);


	//
	var socialMatrixMarkerOptions = {
		position: socialMatrixData,
		map: theMap,
		icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
		
	};
	// now we can create markers
	var socialMatrixMarker = new google.maps.Marker(socialMatrixMarkerOptions);

	var styledMapType = new google.maps.StyledMapType(
            [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],
            {name: 'Styled Map'});

			theMap.mapTypes.set('styled_map', styledMapType);
        theMap.setMapTypeId('styled_map');
      }


	// // find out where the user is
	// // make sure the device has Geolocation capabilities
	// if(navigator.geolocation){
	// 	// Yes, the device has geolocation capabilities
	// 	// ASK the user for the location
	// 	 navigator.geolocation.getCurrentPosition(function(position){
	// 	 	console.log(position);
	// 	 	var userData = {
	// 	 		lat: position.coords.latitude,
	// 	 		lng: position.coords.longitude
	// 	 	};
	// 	 	// prepare the user marker options
	// 	 	var userMarkerOptions = {
	// 	 		position: userData,
	// 	 		map: theMap
	// 	 	};
	// 	 	// create a marker to represent the user
	// 	 	var userMarker = new google.maps.Marker(userMarkerOptions);
	// 	 	userMarker.setAnimation(google.maps.Animation.DROP);
	// 	 	// focus on the users location
	// 	 	// pan over nicely if the two points are close enough
	// 	 	// instantly transition if points are distant
	// 	 	theMap.panTo(userData);
	// 	 	// prepare the nerd (good at calculating routes)
	// 	 	var directionsService = new google.maps.DirectionsService();
	// 	 	// prepare the artist (to draw directions on the map)
	// 	 	var directionsDisplay = new google.maps.DirectionsRenderer();
	// 	 	// tell the artist which map to paint on
	// 	 	directionsDisplay.setMap(theMap);
	// 	 	// direction settings
	// 	 	var directionSettings = {
	// 	 		origin: userData,
	// 	 		destination: socialMatrixData,
	// 	 		travelMode: google.maps.TravelMode['DRIVING'] // WALKING, BICYCLING, TRANSIT
	// 	 	};
	// 	 	// do the calculations (this actually gets sent to google)
	// 	 	directionsService.route(directionSettings, function(response, status){
	// 	 		// once the math is complete
	// 	 		if (status == 'OK') {
	// 	 			// tell the artist to draw on the map
	// 	 			directionsDisplay.setDirections(response);
	// 	 		}
	// 	 	});
	// 	 });
	// } else {
	// 	// No !!!
	// }
