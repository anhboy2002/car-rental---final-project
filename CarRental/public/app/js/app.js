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
            console.log(response);
            console.log(response.feedback.comment);
            // $('.single__review_user').remove();
            $('.review__wrapper ul').append(
                "<li>" +
                "    <div class='wheel-comment-body'>" +
                "        <div class='clearfix'>" +
                "            <div class='comment-author'>" +
                "                <img src='http://localhost:8000/"+ response.avatar +"'alt='"+ response.user_name +"'>" +
                "                    <a href=''> HHHHHHHHHHHHHHHHHH </a>" +
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
