@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Tìm kiếm - Danh sách</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Tìm kiếm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-search">
        <div class="container">
            <div class="row">
                <div class="wheel-start-form col-lg-8" style="max-width: 790px">
                    <div id="dataAllCar" style="display: none;" data-car="{{ $cars }}" data-photos="{{ $photos }}"></div>
                        <form action="{{ action("SearchController@searchCar") }}" method="GET" enctype="multipart/form-data" >
                            {{ csrf_field()}}
                            <label for="input-val11"style="width: 82%"><span>Địa điểm</span>
                                <input type="text" id='inputAddressSearch1' placeholder="Thành phố, sân bay" value="{{$search['location']}}" name="addressSearch">
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span style="width: 32%">Ngày bắt đầu</span>
                                    <label for="input-val13" class="fa fa-calendar" style="width: 60%">
                                        <input class="date" id='dateBegin1' type="date"  value="{{$search['dateBegin']}}" name="dateBegin">
                                    </label>
                                </div>
                                <div class="wheel-date" style="width: 31%">
                                    <span  style="width: 22%">Giờ</span>
                                    <label for="input-val14" class="fa fa-clock-o" style="width: 50%">
                                        <input class="timepicker" id='timeBegin1' type="text" value="{{$search['timeBegin']}}" name="timeBegin">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span style="width: 32%">Ngày kết thúc</span>
                                    <label for="input-val15" class="fa fa-calendar" style="width: 60%">
                                        <input class="date" id='dateEnd1' type="date"  value="{{$search['dateEnd']}}" name="dateEnd">
                                    </label>
                                </div>
                                <div class="wheel-date" style="width: 31%">
                                    <span  style="width: 22%">Giờ</span>
                                    <label for="input-val16" class="fa fa-clock-o" style="width: 50%">
                                        <input class="timepicker" id='timeEnd1' type="text" value="{{$search['timeBegin']}}" name="timeEnd">
                                    </label>
                                </div>
                            </div>
                            <label for="input-val18" class="promo promo2">
                                <button class="btn wheel-btn" id="searchCarIndex" type="submit">Search</button>
                            </label>
                        </form>
                </div>
                <div class="col-md-4 col-sm-4 col-md-4 mt-5">
                    <h5 class="header--6">Giá xe</h5>
                    <div class="slidecontainer">
                        <input type="range" min="100" max="3000"  value="3000" class="slider" id="myRange" step="100">
                        <span class="header--5">Dưới <strong id="demo"></strong> K VNĐ</span>
                    </div>
                    <div class="select select-1 mt-2">
                        <span class="">Loại xe</span>
                        <ul class="list choose-num-seat-car">
                            <li value="0">Tất cả</li>
                            <li value="4">4 chỗ</li>
                            <li value="7">7 chỗ</li>
                        </ul>
                    </div>
                    <div class="select select-2">
                        <span class="">Hãng xe</span>
                        <ul class="list choose-brand-car">
                            <li value="0">Tất cả</li>
                            @foreach($categories as $category)
                                <li value={{ $category->id }}>{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-search row m-3">
            <div class="product-list product-list2 wheel-bgt clearfix searchResultsGrid col-lg-7">
                <div class="row list-car-search">
                    @foreach($cars as $car)
                    <div class="col-lg-6  col-md-10 car{{ $car->id }}">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title badge badge-light">{{ $car->name }}</div>
                                <div class="price-wrap product-cell text-white">
                                    <span class="">{{ $car->price }}</span><sup class="text-white">K</sup>/Ngày
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" target="_blank"><img width="400" height="300" src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}"></a>
                            </div>
                            <div class="row m-2">
                                <div class="wheel-quote-stars col-lg-8">
                                    @for($i = 0; $i <$car->rate; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                    @for($i =0; $i < 5 -$car->rate; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                    <span class="vehicleRatingAndTrips-trips ml-2">  .{{$car->total_trip}} chuyến</span>
                                </div>
                                <div class="col-lg-4">
                                    @if (Auth::check())
                                        <button class="btn btn-success btnFavorite btnFavorite{{$car->id}}" id="{{$car->id}}">Yêu thích</button>
                                    @else
                                        <button class="btn btn-success"  href="#loginModal" data-toggle="modal" data-target="#loginModal">Yêu thích</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <div class="searchResultsMap col-lg-5" id="map">
                </div>
        </div>
    </div>

@extends('include.loginModal')
{!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
<script>
    $( document ).ready(function() {
            var markers = [];
            localStorage.setItem('num_seat', "0");
            localStorage.setItem('brand_car', "0");
            var cars = JSON.parse(document.getElementById('dataAllCar').dataset.car);
            var photos = JSON.parse(document.getElementById('dataAllCar').dataset.photos);

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
            if(locationSearch !== '') {
                var geocoder = new google.maps.Geocoder;
                geocoder.geocode({'address':locationSearch}, function (results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        myLatLng = {lat: results[0].geometry.location.lat, lng: results[0].geometry.location.lat().lng};
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }
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
                            '<img height="200px" width="300" src="http://localhost:8000/storage/uploads/car_photos/'+ data.name +'">'+
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

            function setAllCarOnMap(cars, photos) {
                var point = {lat: 16.0472484, lng: 108.1716865};
                for (var i = 0; i < cars.length; i++) {
                    point = {lat: cars[i].lat, lng: cars[i].long};
                    createMarker(map, point, cars[i], photos[i].feature);
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

            function createMarker(map, point, data, photo) {
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
                    '<img height="200px" width="300" src="http://localhost:8000/storage/uploads/car_photos/'+ photo +'">'+
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
            setAllCarOnMap(cars, photos);
            loadCar(cars);
        });
</script>
@endsection
