//search-car-index
// $(document).on('click', '#searchCarIndex', function(e){
//     var token = $('meta[name="csrf-token"]').attr('content');
//     var addressLocationSearch = $('#inputAddressSearch1').val();
//     var dateBegin = $('#dateBegin1').val();
//     var dateEnd = $('#dateEnd1').val();
//     var timeBegin = $('#timeBegin1').val();
//     var timeEnd = $('#timeEnd1').val();
//     alert(addressLocationSearch + " " + dateBegin + " " + dateEnd + " " + timeBegin + " " + timeEnd);
//     var date1 = new Date(dateBegin + " " + timeBegin);
//     var date2 = new Date(dateEnd + " " + timeEnd);
//
// // To calculate the time difference of two dates
//     var Difference_In_Time = date2.getTime() - date1.getTime();
//
// // To calculate the no. of days between two dates
//     var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
//
//     var options = {
//         url:'/search-post',
//         method:'post',
//         data:{
//             _token: token,
//         },
//         success:function(response)
//         {
//             window.location.href = '/search';
//             $('.list-car-search').append(
//                 "<div class='col-lg-6  col-md-10'>" +
//                 "                        <div class='product-table wheel-bg1 marg-lg-b35'>" +
//                 "                            <div class='text-wrap text-wrap2 product-cell'>" +
//                 "                                <div class='title'>2016 Marcedes-Benz SLK</div>" +
//                 "                                <div class='price-wrap product-cell'>" +
//                 "                                    <span>$79</span><sup>00</sup>/Day" +
//                 "                                </div>" +
//                 "                            </div>" +
//                 "                            <div class='img-wrap img-wrap3 product-cell'>" +
//                 "                                <img src='images/i40.jpg' alt='img' class='img-responsive'>" +
//                 "                            </div>" +
//                 "                            <div class='row m-2'>" +
//                 "                                <div class='wheel-quote-stars col-lg-3'>" +
//                 "                                    <span class='fa fa-star checked'></span>" +
//                 "                                    <span class='fa fa-star checked'></span>" +
//                 "                                    <span class='fa fa-star checked'></span>" +
//                 "                                    <span class='fa fa-star'></span>" +
//                 "                                    <span class='fa fa-star'></span>" +
//                 "                                </div>" +
//                 "                                <div class='col-lg-6'><h4 >.30 trips</h4></div>" +
//                 "                                <div class='col-lg-3'>" +
//                 "                                    <button class='btn btn-success pull-right'>Yêu thích</button>" +
//                 "                                </div>" +
//                 "                            </div>" +
//                 "                        </div>" +
//                 "                    </div>"
//             );
//             console.log(response);
//         },
//         error: function () {
//             alert('error');
//         }
//     };
//     e.preventDefault();
//     $.ajax(options);
// });

$( document ).ready(function() {
    if (location.href === "http://localhost:8000/search-post") {
        console.log(JSON.parse(document.getElementById('dataAllCar').dataset.car));
        var cars = JSON.parse(document.getElementById('dataAllCar').dataset.car);
        var myLatLng = {lat: 16.0472484, lng: 108.1716865};
        var locationSearch = $('#inputLocationCar').val();
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'address':locationSearch}, function (results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                myLatLng = {lat: results[0].geometry.location.lat, lng: results[0].geometry.location.lat().lng};

            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });

        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 14,
            streetViewControl: false,
            gestureHandling: 'greedy',
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('input-val11');

        function setMarkers(map) {
            // Adds markers to the map.
            var image = {
                url: 'http://localhost:8000/storage/uploads/car-icon.jpg',
                // This marker is 20 pixels wide by 32 pixels high.
                scaledSize: new google.maps.Size(40, 42),
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
            var marker, data;
            for (var i = 0; i < cars.length; i++) {
                data = cars[i];
                marker = new google.maps.Marker({
                    position: {lat: cars[i].lat, lng: cars[i].long},
                    map: map,
                    icon: image,
                    shape: shape,
                    title: cars[i].name,
                    Index: cars[i].id
                });
                var infowindow = new google.maps.InfoWindow();
                (function(marker, data){
                    var content = '<div id="iw-container">' +
                        '<img height="200px" width="300" src="http://localhost:8000/storage/uploads/'+ data.name +'">'+
                        '<a href="car/'+data.id+'"><div class="iw-title">' + data.name +'</div></a>' +
                        ' <div class="wheel-quote-stars">' +
                        '     <span class="fa fa-star checked"></span>' +
                        '     <span class="fa fa-star checked"></span>' +
                        '     <span class="fa fa-star checked"></span>' +
                        '     <span class="fa fa-star"></span>' +
                        '     <span class="fa fa-star"></span>' +
                        '</div>'+
                        '<p><i class="" style="color:#003352"></i> '+ data.total_trip +' trip'+'<p>'+
                        '</div>';

                    google.maps.event.addListener(marker, "click", function(e){

                        infowindow.setContent(content);
                        infowindow.open(map, marker);
                    });
                })(marker,data);
            }
        }
            var rectangle = new google.maps.Rectangle();

            map.addListener('zoom_changed', function () {
                console.log("zoom_changed");
                Rectangle();
            });
            map.addListener('center_changed', function () {
                console.log("center_changed");
                Rectangle()
            });

            function Rectangle() {
                // Get the current bounds, which reflect the bounds before the zoom.
                rectangle.setOptions({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map: map,
                    bounds: map.getBounds()

                });

                for (var i = 0; i < cars.length; i++) {
                    var point = new google.maps.LatLng(cars[i].lat, cars[i].long);
                    var isWithinRectangle = rectangle.getBounds().contains(point);
                    var target;
                    if (isWithinRectangle === false) {
                        target = ".car" + cars[i].id;
                        console.log("HIDEEEEEEEEEEEE" + target);
                        $(target).hide();
                    } else {
                        target = ".car" + cars[i].id;
                        $(target).show();
                    }
                    console.log("Xe " + cars[i].id + ":  " + isWithinRectangle);
                }
            }

            setMarkers(map);
        }
});

//search without map index
google.maps.event.addDomListener(window, 'load', init);
function init() {
    var input = document.getElementById('inputAddressSearch1');
    var autocomplete = new google.maps.places.Autocomplete(input);
}


