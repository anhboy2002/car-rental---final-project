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
    if (localStorage.getItem("searchIndex") !== null) {
        var data = JSON.parse(localStorage.getItem('searchIndex'));
        if (document.getElementsByName('addressSearch').length >0) {
            document.getElementsByName('addressSearch')[0].value = data.addressSearch;
        }
        if (document.getElementsByName('dateBegin').length >0) {
            document.getElementsByName('dateBegin')[0].value = data.dateBegin;
            document.getElementsByName('dateEnd')[0].value = data.dateEnd;
            document.getElementsByName('timeBegin')[0].value = data.timeBegin;
            document.getElementsByName('timeEnd')[0].value = data.timeEnd;
        }
    }
    if (document.getElementById('mapSingleCar') !== null) {
        var point = {lat: parseFloat(document.getElementById('mapSingleCar').dataset.lat), lng: parseFloat(document.getElementById('mapSingleCar').dataset.lng, 10)};
        var mapDetail = new google.maps.Map(document.getElementById('mapSingleCar'), {
            center:  point,
            zoom: 16,
            streetViewControl: false,
            gestureHandling: 'greedy',
            disableDoubleClickZoom: true,
            draggable: false
        });
        var car = JSON.parse(document.getElementById('mapSingleCar').dataset.car);
        var icon = "http://localhost:8000/" + document.getElementById('mapSingleCar').dataset.marker
        marker = new google.maps.Marker({
            position: point,
            map: mapDetail,
            icon: icon ,
            title: car.name,
            Index: car.id
        });
    }
    if (location.href === "http://localhost:8000/search-post") {
        var markers = [];
        localStorage.setItem('num_seat', "0");
        localStorage.setItem('brand_car', "0");
        var cars = JSON.parse(document.getElementById('dataAllCar').dataset.car);
        console.log(cars);
        $('ul.choose-num-seat-car li').click(function(e)
        {
            localStorage.setItem('num_seat', this.value.toString());
            numSeatSearch();
            // ajaxSearch1();
            // var carsDefault = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            // cars =  carsDefault;
            // removeAllCarOnMap();
            // setAllCarOnMap();
            // $('.car').show();
            // var i = 0;
            // if (this.value === 0) {
            //     setAllCarOnMap();
            //     $('.car').show();
            // }
            // else {
            //     while( i < carsDefault.length) {
            //         if (this.value.toString() !== carsDefault[i].num_seat) {
            //             target = ".car" + carsDefault[i].id;
            //             $(target).hide();
            //             carsDefault.splice(i,1);
            //             markers[i].setMap(null);
            //             markers.splice(i,1);
            //             i = 0;
            //         } else{
            //             i++;
            //         }
            //     }
            // }
            // cars = carsDefault;
            // Rectangle();
        });

        $('ul.choose-brand-car li').click(function(e) {
            localStorage.setItem('brand_car', this.value);
            brandCarSearch();
            // ajaxSearch1();
        });
        $('#btnSearch').click(function(e)
        {
            var data = {
                addressSearch : $('#inputLocationCar').val(),
                dateBegin :  $('#dateBegin2').val(),
                dateEnd :  $('#dateEnd2').val(),
                timeBegin :  $('#timeBegin2').val(),
                timeEnd :  $('#timeEnd2').val(),
            };
            localStorage.setItem('searchIndex', JSON.stringify(data));
        });

        var myLatLng = {lat: 16.0472484, lng: 108.1716865};
        var locationSearch = JSON.parse(localStorage.getItem('searchIndex')).addressSearch;
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
            disableDoubleClickZoom: true
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('input-val11');

        function setMarkers(map, carsNew) {
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
            for (var i = 0; i < carsNew.length; i++) {
                data = carsNew[i];
                marker = new google.maps.Marker({
                    position: {lat: cars[i].lat, lng: carsNew[i].long},
                    map: map,
                    icon: image,
                    shape: shape,
                    title: carsNew[i].name,
                    Index: carsNew[i].id
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

        function setAllCarOnMap(cars) {
            var point = {lat: 16.0472484, lng: 108.1716865};
            for (var i = 0; i < cars.length; i++) {
                point = {lat: cars[i].lat, lng: cars[i].long};
                createMarker(map, point, cars[i]);
            }
        }

        function removeAllCarOnMap() {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = [];
        }

        function showAllCarOnMap() {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setVisible(true);
            }
        }

        function createMarker(map, point, data) {
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
            var marker;
            marker = 0;
            marker = new google.maps.Marker({
                position: point,
                map: map,
                icon: image,
                shape: shape,
                title: data.name,
                index: data.id
            });
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

            var info_Window = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, "click", function () {
                info_Window.setContent(content);
                info_Window.open(map, marker);
            });

            markers.push(marker);
            return marker; //here i return only marker for the side bar.
        }

            var rectangle = new google.maps.Rectangle();

            function loadCar(cars) {
                map.addListener('zoom_changed', function () {
                    console.log("zoom_changed");
                    Rectangle(cars);
                });
                map.addListener('center_changed', function () {
                    console.log("center_changed");
                    Rectangle(cars)
                });
            }


            function Rectangle(carss) {
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

                for (var i = 0; i < carss.length; i++) {
                    var point = new google.maps.LatLng(carss[i].lat, carss[i].long);
                    var isWithinRectangle = rectangle.getBounds().contains(point);
                    var target;
                    if (isWithinRectangle === false) {
                        target = ".car" + carss[i].id;
                        console.log("HIDEEEEEEEEEEEE" + target);
                        $(target).hide();
                    } else {
                        target = ".car" + carss[i].id;
                        $(target).show();
                    }
                    console.log("Xe " + carss[i].id + ":  " + isWithinRectangle);
                }
            }
        // slider price
        function formatNumber(nStr, decSeperate, groupSeperate) {
            nStr += '';
            x = nStr.split(decSeperate);
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
            }
            return x1 + x2;
        }

        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = formatNumber(slider.value, '.', ',');

        slider.oninput = function() {
            output.innerHTML = formatNumber(slider.value, '.', ',');
            priceSearch();
        };

        function processSearch() {
            // var price = slider.value;
            // var num_seat = localStorage.getItem('num_seat');
            // var brand_car = localStorage.getItem('brand_car');
            // var carsDefault = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            // var i = 0;
            // if (this.value === 0) {
            //     setAllCarOnMap();
            //     $('.car').show();
            // }
            // else {
            //     while( i < carsDefault.length) {
            //         if (this.value.toString() !== carsDefault[i].num_seat) {
            //             target = ".car" + carsDefault[i].id;
            //             $(target).hide();
            //             carsDefault.splice(i,1);
            //             markers[i].setMap(null);
            //             markers.splice(i,1);
            //             i = 0;
            //         } else{
            //             i++;
            //         }
            //     }
            // }
            // cars = carsDefault;
            // Rectangle();
        }

        function priceSearch() {
            var price = slider.value;
            var carsDefault = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            showAllCarOnMap();
            var i = 0;
            while( i < carsDefault.length) {
                if (price < carsDefault[i].price) {
                    target = ".car" + carsDefault[i].id;
                    $(target).hide();
                    // for(var j = 0 ;j<markers.length; j++) {
                    //     if (markers[j].index === carsDefault[i].id) {
                    //         markers[j].setVisible(false);
                    //     }
                    // }
                    markers[i].setVisible(false);
                    //carsDefault.splice(i,1);
                } else {
                    target = ".car" + carsDefault[i].id;
                    // for(var j = 0 ;j<markers.length; j++) {
                    //     if (markers[j].index === carsDefault[i].id) {
                    //         markers[j].setVisible(true);
                    //     }
                    // }
                    markers[i].setVisible(true);
                    $(target).show();
                }
                i++;
            }
        }

        function numSeatSearch() {
            var num_seat = localStorage.getItem('num_seat');
            var carsDefault = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            for ( var i = 0; i<carsDefault.length; i++) {
                if (num_seat !== carsDefault[i].num_seat) {
                    target = ".car" + carsDefault[i].id;
                    $(target).hide();
                    markers[i].setVisible(false);
                } else if(num_seat === "0"){
                    $('.car').show();
                    showAllCarOnMap();
                } else {
                    target = ".car" + carsDefault[i].id;
                    $(target).show();
                    markers[i].setVisible(true);
                }
            }
        }

        function brandCarSearch() {
            var brand_car = localStorage.getItem('brand_car');
            var carsDefault = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            for ( var i = 0; i<carsDefault.length; i++) {
                if (parseInt(brand_car) !== carsDefault[i].car_category_id) {
                    target = ".car" + carsDefault[i].id;
                    $(target).hide();
                    markers[i].setVisible(false);
                } else if(brand_car === "0"){
                    $('.car').show();
                    showAllCarOnMap();
                } else {
                    target = ".car" + carsDefault[i].id;
                    $(target).show();
                    markers[i].setVisible(true);
                }
            }
        }

        function ajaxSearch1() {
            var token = $('meta[name="csrf-token"]').attr('content');
            var price = slider.value;
            var num_seat = localStorage.getItem('num_seat');
            var brand_car = localStorage.getItem('brand_car');
            var data = {
                price : price,
                num_seat : num_seat,
                brand_car : brand_car,
                _token: token
            };
            var url = "/search-1";
            var options = {
                url:url,
                method:"post",
                data: data,
                success:function(response) {
                cars.splice(1,1);
                },
                error: function (err) {
                    console.log(arguments);
                }
            };
            $.ajax(options);
        }
        setAllCarOnMap(cars);
        loadCar(cars);
    }
});

//search without map index
google.maps.event.addDomListener(window, 'load', init);
function init() {
    var input;
    if (location.href === "http://localhost:8000/search-post") {
        input = document.getElementById('inputAddressSearch1');
    } else if (location.href === "http://localhost:8000/index") {
        input = document.getElementById('inputAddressSearch1');
    }
    var autocomplete = new google.maps.places.Autocomplete(input);
}

