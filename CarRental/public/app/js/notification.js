var id = $('meta[name="id_user"]').attr('content');
var count = $('meta[name="count"]').attr('content');
var name = $('meta[name="name"]').attr('content');
$(document).ready(function() {
    window.Echo.private(`App.Models.User.` + id)
        .notification((notification) => {
            addNotifications([notification], '.notification-box', '.count-notification', parseInt(count) );
        });
});

function addNotifications(newNotifications, target, count_target, count) {
    var notifications = _.concat(notifications, newNotifications);
    $(count_target).html(notifications.length + count - 1);
    notifications.slice(0, 5);
    showNotifications(notifications, target);
}

function showNotifications(notifications, target) {
    console.log(notifications);
    if(notifications.length) {
        var htmlElements = notifications.filter(notification => notification != undefined).map(function (notification) {
            return makeNotification(notification);
        });
        $(target).first().prepend(htmlElements.join(''));
    }
}

function makeNotification(notification) {
    if(notification.user_name_1 === name) {
        var content_name = '<strong class="text-info">' + notification.user_name_2 + '</strong><div> ' + notification.message_1;
    } else {
        var content_name = '<strong class="text-info">' + notification.user_name_1 + '</strong><div> ' + notification.message_2;
    }

    if(notification.status_ck === 1 || notification.status_ck === 2 || notification.status_ck === 0)  {
        var tag_a = '<a href="http://localhost:8000/trip/detail/"' + notification.transaction_id + '> <span class="badge-info badge"> Chi tiết</span></a>'
    }else if(notification.status_ck === 5 ) {
        var tag_a = '<a href="http://localhost:8000/trip/deposit/"' + notification.transaction_id + '> <span class="badge-info badge"> Chi tiết</span></a>'
    }else if(notification.status_ck === 3 ) {
        var tag_a = '<a href="http://localhost:8000/trip/process/"' + notification.transaction_id + '> <span class="badge-info badge"> Chi tiết</span></a>'
    }else if(notification.status_ck === 4 || notification.status_ck === 6) {
        var tag_a = '<a href="http://localhost:8000/trip/process/"' + notification.transaction_id + '> <span class="badge-info badge"> Chi tiết</span></a>'
    }
    return '<li class="notification-box bg-gray" id="'+ notification.id +'">' +
        '    <div class="row">' +
        '        <div class="col-lg-3 col-sm-3 col-3 text-center">' +
        '            <img  src="http://localhost:8000/storage/uploads/car_photos/'+ notification.avatar_car +'" class="rounded-circle" height="85" width="85"/>' +
        '        </div>' +
        '        <div class="col-lg-8 col-sm-8 col-8">' +
                content_name +
                tag_a   +
        '                        </div>' +
        '                        <small class="text-warning"> 1 giây trước</small>' +
        '                </div>' +
        '        </div>' +
        '</li>';
}

$(document).on('click', '.notification-box', function(){
    var id = $(this).attr('id');
    $(this).removeClass("bg-gray");
    var url = "/notification/mark/" + id;
    var options = {
        url:url,
        type:"get",
        data:{
            id : id,
        },
        success:function(response)
        {
            if($('.count-notification').html() > 0){
                $('.count-notification').html($('.count-notification').html() - 1);
            }
        },
        error: function (request, error) {
            alert( error);
        }
    };
    $.ajax(options);
});

$(document).on('click', '.seenAll', function(e){
    var url = "/notifications/marks";
    var options = {
        url:url,
        type:"get",
        success:function(response)
        {
            $('.count-notification').hide();
            $('.notification-box').removeClass('bg-gray');
        },
        error: function (request, error) {
            alert( error);
        }
    };
    e.preventDefault();
    $.ajax(options);
});
