function initAutocomplete() {
    var cars = [
        ['Vinfast 1', 16.071893, 108.148149],
        ['Vinfast 2',16.073079, 108.148482],
        ['Vinfast 3', 16.073976, 108.150832],
        ['Vinfast 4', 16.076986, 108.147882],
        ['Vinfast 5', 16.078326, 108.147582]
    ];
    var point = new google.maps.LatLng(16.071893, 108.148149);

    var myLatLng = {lat: 16.0472484, lng: 108.1716865};

    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 18,
        streetViewControl : false,
        gestureHandling: 'greedy',
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('input-val11');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.addListener('zoom_changed', function() {
            console.log( map.getBounds());
        });

        map.fitBounds(bounds);

    });

    function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };
        for (var i = 0; i < cars.length; i++) {
            var car = cars[i];
            var marker = new google.maps.Marker({
                position: {lat: car[1], lng: car[2]},
                map: map,
                icon: image,
                shape: shape,
                title: car[0],
                zIndex: car[3]
            });
        }

    }
    var rectangle = new google.maps.Rectangle();

    map.addListener('zoom_changed', function() {
        Rectangle();
    });
    map.addListener('center_changed', function() {
        Rectangle()
    });

    function Rectangle() {
        console.log(map.getBounds());
        // Get the current bounds, which reflect the bounds before the zoom.
        rectangle.setOptions({
            strokeOpacity: 0,
            strokeWeight: 0,
            fillOpacity: 0,
            map: map,
            bounds: map.getBounds()
        });
        var isWithinRectangle = rectangle.getBounds().contains(point);
        console.log(isWithinRectangle);
    }
    setMarkers(map);
    }
initAutocomplete();

