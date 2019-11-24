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

