"use strict";

window.initMap = function() {
  var customMapType = new google.maps.StyledMapType([
    {
      stylers: [
        {'saturation': -100},
        {'lightness': 50},
        {'visibility': 'simplified'}
      ]
    },
    {
      elementType: 'labels',
      stylers: [{visibility: 'on'}]
    },
    {
      featureType: 'road',
      stylers: [{color: '#bbb'}]
    }
  ], {
    name: 'Dublin'
  });

  var image = new google.maps.MarkerImage(
  	'img/widgets/gmap-pin.png',
  	new google.maps.Size(48,54),
  	new google.maps.Point(0,0),
  	new google.maps.Point(24,54)
	);

  var customMapTypeId = 'custom_style';

    var content1 = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h3 id="firstHeading" class="firstHeading">Ideal Trade Center</h3>'+
        '<div id="bodyContent">'+
        '<p>Shop No. 2, Sect. 11, <br>CBD Belapur, <br>Navi Mumbai – 400614</p>'+
        '</div>'+
        '</div>';

    var content2 = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h3 id="firstHeading" class="firstHeading">Shree Samarth Krupa Apt</h3>'+
        '<div id="bodyContent">'+
        '<p>Plot- B/181, Sect. 20, <br>CBD Belapur, <br>Navi Mumbai – 400614</p>'+
        '</div>'+
        '</div>';

    var locations = [
        [content1,19.015070,73.038464, 1],
        [content2, 19.015513, 73.029406, 2]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: new google.maps.LatLng(19.0155, 73.0345),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });


  var infowindow = new google.maps.InfoWindow({
    maxWidth: 300
  });
  var i=0;
    for (i = 0; i < locations.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            clickable: true,
            icon: image
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }





  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);
};