// $("#SelectCarCategoryParent").change(function(e){
//     var idCategory =  $(this).val();
//     var url = '/getCategoryChildren/' + idCategory;
//     var options = {
//         url:url,
//         method:'GET',
//         data:{
//             id : idCategory,
//         },
//         success:function(response) {
//             var category = response.category;
//             var newOption = '';
//             $('#SelectCarCategoryChilren')
//                 .find('option')
//                 .remove()
//                 .end()
//                 .append('<option value="whatever">text</option>')
//                 .val('whatever')
//             ;
//         },
//         error: function (err) {
//                alert('error');
//         }
//     }
//     e.preventDefault();
//     $.ajax(options);
// });

// Code goes here

$(document).ready(function() {
    // // Re-init map before show modal
    $('#myModal').on('show.bs.modal', function(event) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(initializeGMap);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
        $("#location-map").css("width", "100%");
        $("#map_canvas").css("width", "100%");
    });

    function initializeGMap(location) {
        myLatlng = new google.maps.LatLng(location.coords.latitude, location.coords.longitude);
        var myOptions = {
            zoom: 15,
            zoomControl: true,
            center: myLatlng,
            streetViewControl : false,
            gestureHandling: 'greedy',
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
        var geocoder = new google.maps.Geocoder;
        var myMarker = new google.maps.Marker({
                                position: myLatlng,
                                draggable: true
                            });
        myMarker.setMap(map);
        map.setCenter(myMarker.position);
        geocodeLatLng(geocoder, map, myMarker);
        google.maps.event.addListener(myMarker, 'dragend', function(evt) {
            document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
            myLatlngNew = new google.maps.LatLng(evt.latLng.lat().toFixed(3), evt.latLng.lng().toFixed(3));
            myMarker.setPosition(myLatlngNew);
            geocodeLatLng(geocoder, map, myMarker);
        });
        google.maps.event.addListener(myMarker, 'dragstart', function(evt) {
            document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
        });

    }

    function geocodeLatLng(geocoder, map, myMarker) {
        geocoder.geocode({'location': myMarker.getPosition()}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    myMarker.setMap(map);
                    $('#carLocationName').text(results[0].formatted_address);
                    $('#inputCarLocation').val(results[0].formatted_address);
                    $('#inputLatCar').val(myMarker.getPosition().lat());
                    $('#inputLongCar').val(myMarker.getPosition().lng());
                    // $('#mapSingleCar').data('lat', myMarker.getPosition().lat());
                    // $('#mapSingleCar').data('long', myMarker.getPosition().lng());
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }

});

//select my-car
$(document).ready(function(){
    $("#choice").change(function(){
        var textselected =  document.getElementById("choice").value ;
        target = '.choice' + textselected;
        if (textselected !== 'all'){
            $('.choice').hide();
            $(target).show();
        } else {
            $('.choice').show();
        }
    });
});

//rating car
var $rating = $('.rating-review span');
var point;

var setRatingStar = function() {
    return $rating.each(function() {
        if (parseInt($('.rating-value').val()) >= parseInt($(this).data('rating'))) {
            return $(this).removeClass('fa fa-star').addClass('fa fa-star checked');
        } else {
            return $(this).removeClass('fa fa-star checked').addClass('fa fa-star');
        }
    });
};

$rating.on('click', function() {
    $('.rating-value').val($(this).data('rating'));
    point =  $('.rating-value').val();
    return setRatingStar();
});

$(document).on('click', '.review', function(e){
    var token = $('meta[name="csrf-token"]').attr('content');
    var content = $('.review-text').val();
    var id = $(this).attr('id');
    var url = "/feedback/" + id + "/" + point;
    var options = {
        url:url,
        method:"post",
        data:{
            content:content,
            rating : point,
            id : id,
            _token: token,
        },
        success:function(response) {
            // $('.single__review_user').remove();
            $('.review__wrapper ul').append(
                "<li>" +
                "    <div class='wheel-comment-body'>" +
                "        <div class='clearfix'>" +
                "            <div class='comment-author'>" +
                "                <img src='http://localhost:8000/"+ response.avatar +"'alt='"+ response.user_name +"'>" +
                "                    <a href=''> " + response.user_name + "</a>" +
                "                        <div class='ratings'>" +
                "                            <img src='images/stars.png' alt=''>" +
                "                        </div>" +
                "            </div>" +
                "            <div class='comment-metadata'>" +
                "                 <time datetime='2015-01-10T20:15:40+00:00'> "+ response.feedback.created_at +"</time>" +
                "            </div>" +
                "        </div>" +
                "        <div class='comment-content'>" +
                "            <p>"+ response.feedback.comment +"</p>" +
                "        </div>" +
                "    </div>" +
                "</li>"
            );
        },
        error: function (err) {
            console.log(arguments);
        }
    };
    e.preventDefault();
    $.ajax(options);
});

$(document).on('click', '#searchCarIndex', function(){
    var data = {
        addressSearch : $('#inputAddressSearch1').val(),
        dateBegin :  $('#dateBegin1').val(),
        dateEnd :  $('#dateEnd1').val(),
        timeBegin :  $('#timeBegin1').val(),
        timeEnd :  $('#timeEnd1').val(),
    };
    localStorage.setItem('searchIndex', JSON.stringify(data));
});

$(document).on('click', '#policyCheckout', function(){
    if ($('.bookCar').attr('disabled')) $('.bookCar').removeAttr('disabled');
    else $('.bookCar').attr('disabled', 'disabled');
});

$(document).on('click', '.bookCar', function(e){

    var token = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).attr('id');
    var totalDayRental =  $('#totalDayRental').val();
    var totalPrice =  $('#totalPrice').val();
    var search =  $('#search').val();
    var url = "/book/" + id;
    var options = {
        url:url,
        method:"post",
        data:{
            totalDayRental: totalDayRental,
            totalPrice: totalPrice,
            search: search,
            _token: token,
        },
        success:function(response) {
            //show confirm view detail

            $('#bookCarModal').modal('hide');
            $('#modalConfirmViewDetailCheckout').modal('show');
            $('#btnViewDetailTrip').attr("href", "http://localhost:8000/trip/detail/" + response.checkoutId);
        },
        error: function (err) {
            console.log(arguments);
        }
    };
    e.preventDefault();
    $.ajax(options);
});

$(document).on('click', '#btnRejectTripContinue', function(){
    $('#modalConfirmRejectTrip').modal('hide');
    $('#modalSelectReasonRejectTrip').modal('show');
});

$(document).on('click', '#btnRejectTrip', function(){
    changeStatusTrip(0,1,0);
    var valueSelect = $('#reasonSelect :selected').text();
    if ($('#reasonSelect :selected').val() ==="1") {
        valueSelect = $('#reasonSelectText').val();
    }
    $('#modalSelectReasonRejectTrip').modal('hide');
    $('.info-trip').prepend(
    "  <div class='status-wrap col-md-12 padd-lr0'>" +
            "                            <p style='background-color: black;'>" +
            "                                <span class='status red-dot'></span>" +
            "                                <span>Chuyến đã bị huỷ. Lý do: " + valueSelect +"</span>" +
            "                            </p>" +
            "                        </div>"
    );
    $('.btnRejectTrip').hide();
    $('.pending-trip').hide();
    $("html, body").animate({ scrollTop: 600 }, "slow");
});

// set count down time and change status

$(document).ready(function() {
    if (document.getElementById('created_at_checkout') !== null) {
        var status_ck = document.getElementById('created_at_checkout').dataset.createdat;
        if (status_ck === "1") {
            var date = document.getElementById('created_at_checkout').value;
            var countDownDate = new Date(date).getTime() + 28800000;

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("pending-text").innerHTML = hours + " tiếng "
                    + minutes + " phút " + seconds + " giây ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("pending-text").innerHTML = "Hết hạn";
                    changeStatusTrip(2,1,1);
                }
            }, 1000);
        }
    }
});


//change status checkout
function changeStatusTrip(status, status_1, status_2) {
    var token = $('meta[name="csrf-token"]').attr('content');
    var idCheckout = document.getElementById('created_at_checkout').dataset.idcheckout;
    var url = '/change-status-checkout/' + idCheckout;
    var options = {
        url:url,
        method:"post",
        data:{
            status : status,
            status_1 : status_1,
            status_2 : status_2,
            _token: token,
        },
        success:function(response) {
        },
        error: function (err) {
            console.log(arguments);
        }
    };
    $.ajax(options);
}
//favotire car

$(document).on('click', '.btnFavorite', function(e){
    var token = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).attr('id');
    var url = "my-favorite-car/" + id;
    var options = {
        url:url,
        method:"post",
        data:{
            _token: token
        },
        success:function(response) {
            if(response.status === "1") {
                $('.btnFavorite'+ id).text('Đã yêu thích');
            }else {
                $('.btnFavorite'+ id).text('Yêu thích');
            }

        },
        error: function (err) {
            console.log(arguments);
        }
    };
    e.preventDefault();
    $.ajax(options);
});

$(document).on('click', '.btnRemoveFavorite', function(e){
    var token = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).attr('id');
    var url = "remove-favorite-car/" + id;
    var options = {
        url:url,
        method:"post",
        data:{
            _token: token
        },
        success:function(response) {
            if(response.status === "0") {
                $('.favorite'+ id).hide();
            }
        },
        error: function (err) {
            console.log(arguments);
        }
    };
    e.preventDefault();
    $.ajax(options);
});
$(document).on('click', '.btnHideCar', function(e){
    var token = $('meta[name="csrf-token"]').attr('content');
    var id = $(this).attr('id');
    var url = "/hide-car/" + id;
    var options = {
        url:url,
        method:"post",
        data:{
            _token: token
        },
        success:function(response) {
            if(response.status === "1") {
                $('#modalConfirmHideCar').modal('hide');
                $('#btnDisableCar').text('Đã tạm ngưng');
            }
        },
        error: function (err) {
            console.log(arguments);
        }
    };
    e.preventDefault();
    $.ajax(options);
});
