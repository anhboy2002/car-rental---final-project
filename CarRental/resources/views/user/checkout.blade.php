@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Checkout</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 padd-l0">
                    <div class="container-checkout">
                        <header>
                            <div class="bio">
                                <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" class="bg" width="320" height="250">
                            </div>
                            <div class="avatarcontainer">
                                <a href="#viewUser" data-toggle="modal" data-target="#viewUser"><img src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" alt="{{$car->user->user_name}}"  class="avatar"></a>
                            </div>
                        </header>
                        <div class="content">
                            <div class="data">
                                {{$car->user->user_name}}’s
                                <span class="name-car-checkout">{{$car->name}}</span>
                                <div class="row">
                                    <div class="wheel-quote-stars col-lg-5">
                                        @for($i = 0; $i <$car->rate; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                        @for($i =0; $i < 5 -$car->rate; $i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                    </div>
                                    <div class="col-lg-5"> <span class="trip ">. {{$car->total_trip}} chuyến</span></div>
                                </div>
                            </div>
                            <div class="tripTime">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <ul>
                                            <li class="day-tripTime" id ="dateBeginCheckout">{{$search['dateBegin']->toFormattedDateString()}}</li>
                                            <li class="time-tripTime" id ="timeBeginCheckout">{{$search['timeBegin']->format('h:i')}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="col-sm-5">
                                        <ul>
                                            <li  class="day-tripTime" id ="dateEndCheckout">{{$search['dateEnd']->toFormattedDateString()}}</li>
                                            <li class="time-tripTime" id ="timeEndCheckout">{{$search['timeEnd']->format('h:i') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="tripLocation">
                                <span>Địa điểm giao nhận xe</span>
                                <p><i> + </i>{{Str::limit($car->location_name,$limit = 9 , $end = '...')}}</p>
                            </div>
                            <div class="tripLocation">
                                <div class="">
                                    <ul>
                                        <li class="time-tripTime">Đơn giá : {{$car->price}}K/day</li>
                                        <li class="time-tripTime">Dịch vụ: 0/day </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tripLocation">
                                <div class="card price-card">
                                    <div class="card-body ">
                                        <ul>
                                            <li  class="time-tripTime">{{$checkoutDetail['totalDayRental']}} - ngày: {{$checkoutDetail['totalPrice']}}/k</li>
                                            <li class="priceTotal">Tổng : {{$checkoutDetail['totalPrice']}}/K </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-r0">
                    <div class=" marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h3><span>Thông tin </span></h3>
                        </div>
                        <div class="accordion md-accordion mt-5" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree21">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree21"
                                       aria-expanded="false" aria-controls="collapseThree21">
                                        <h3 class="mb-0 title-list">
                                            Số điện thoại
                                        </h3>
                                    </a>
                                </div>
                                <div id="collapseThree21" class="collapse" role="tabpanel" aria-labelledby="headingThree21"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-lg-10">
                                                <label for="formGroupExampleInput2">Số điện thoại của bạn : <p class="font-weight-bold">{{ $car->user->phone }}</p></label>
                                                <div class="row">
                                                    <input type="text" class="form-control col-md-4" id="formGroupExampleInput">
                                                    <button class="btn-info ml-2 col-md-3 btn" id="changePhoneNumber">Thay đổi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <button class="wheel-btn" id="bookCar" data-toggle="modal" data-target="#bookCarModal">Book</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="bookCarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Xác nhận đặt xe</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5> {{ $car->name }}</h5>
                        </div>
                        <div  class="col-md-6">
                            <div class="wheel-quote-stars">
                                @for($i = 0; $i <$car->rate; $i++)
                                    <span class="fa fa-star checked"></span>
                                @endfor
                                @for($i =0; $i < 5 -$car->rate; $i++)
                                    <span class="fa fa-star"></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" class="" width="216px" height="162px">
                        </div>
                        <div class="col-md-8">
                            <div class="group-info">
                                <h6 class="title-list">THỜI GIAN THUÊ XE</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Bắt đầu: {{date_format($search['timeBegin'],"H:i") . ' - ' . date_format($search['dateBegin'] ,"d/m/Y") }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Kết thúc: {{date_format($search['timeEnd'],"H:i") . ' - ' . date_format($search['dateEnd'] ,"d/m/Y")  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" alt="{{$car->user->user_name}}" class="rounded-circle ml-5" width="95px" height="95px">
                        </div>
                        <div class="col-md-8">
                            <div class="group-info">
                                <h6 class="title-list">CHỦ XE</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Tên: Hung Tran</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Điện thoại: {{Str::limit($car->user->phone,$limit = 5 , $end = '*****')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="title-list">ĐỊA CHỈ GIAO NHẬN XE</h6>
                         <p><i class="fa fa-map-marker"></i>  {{Str::limit($car->location_name,$limit = 9 , $end = '...')}} (địa chỉ cụ thể sẽ được hiển thị sau khi đặt cọc).</p>
                        <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $car->lat }}" data-lng="{{ $car->long }}" data-car="{{ $car }}" data-marker="images/marker.png" style="height: 231px; width: 760px "></div>
                    </div>
                    <div class="m-1 mt-3 row ">
                        <h6 class="title-list">BẢNG GIÁ</h6>
                        <table class="table table-borderless col-lg-6">
                            <thead>
                            <tr>
                                <th scope="col">Đơn giá thuê</th>
                                <th scope="col"> {{$car->price}} K/ Ngày</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Phí dịch vụ</td>
                                <td>0/ Ngày</td>
                            </tr>
                            <tr>
                                <td>Tổng phí thuê xe</td>
                                <td>{{$car->price}} K x {{$checkoutDetail['totalDayRental']}} Ngày</td>
                            </tr>
                            <tr>
                                <td>Tổng cộng</td>
                                <td>{{$checkoutDetail['totalPrice']}} VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-lg-4 mt-5">
                            <h4>Tiền cọc <span class="badge badge-secondary">{{ (float) $checkoutDetail['totalPrice']*0.3 * 1000}} K</span></h4>

                            <h4 class="mt-2">Tiền trả sau <span class="badge badge-success">{{ (float) $checkoutDetail['totalPrice']*0.7*1000}} K</span></h4>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="title-list">GIẤY TỜ THUÊ XE (BẢN GỐC)</h6>
                        <div class="group-car-detail">
                            <div class="ctn-desc-new ml-3">
                                <ul class="required">
                                    <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/cmnd.png" alt="Mioto - Thuê xe tự lái"> CMND và GPLX (đối chiếu)</li>
                                    <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/passport.png" alt="Mioto - Thuê xe tự lái"> Hộ Khẩu hoặc KT3 hoặc Passport (giữ lại)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="title-list">TÀI SẢN THẾ CHẤP</h6>
                        <div class="group-car-detail">
                            <div class="ctn-desc-new ml-3">
                                <ul class="required">
                                    <li>15 triệu tiền mặt hoặc Xe máy (cà vẹt gốc) giá trị 15 triệu</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-3">
                    <input type="checkbox" id="policyCheckout"/>
                    <label class="label" style="color: red;" for="policyCheckout">Tôi đã có đầy đủ giấy tờ chủ xe yêu cầu.</label>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <input type="hidden" value="{{$checkoutDetail['totalDayRental']}}" id="totalDayRental">
                        <input type="hidden" value="{{$checkoutDetail['totalPrice']}}" id="totalPrice">
                        <input type="hidden" value="{{json_encode($search)}}" id="search">
                        <button type="submit" class="btn btn-primary bookCar" id="{{$car->id}}" disabled="true">Đặt xe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal confirm view detail checkout-->
    <div class="modal fade" id="modalConfirmViewDetailCheckout" tabindex="-1" role="dialog" aria-labelledby="modalConfirmViewDetailCheckout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yêu cầu đặt xe của bạn đã được gửi tới chủ xe. Vui lòng chờ chủ xe xác nhận sau đó tiến hành đặt cọc để hoàn tất việc đặt xe</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="" role="button" id="btnViewDetailTrip">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>
    {{--    Modal user--}}
    <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="center-block">
                        <img  src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" name="{{$car->user->user_name}}" width="140" height="140" border="0" class="img-circle"></a>
                        <h3 class="media-heading">{{$car->user->user_name}} <small>{{$car->user->address}}</small></h3>
                        <span><strong>Thông tin: </strong></span>
                        <span class="badge badge-warning">{{$car->user->trips->count()}} chuyến</span>
                        <span class="badge badge-info">{{$car->user->cars->count()}} xe</span>
                        <span class="badge badge-success">{{$car->user->created_at->toFormattedDateString()}}</span>
                    </div>
                    <hr>
                    <div class="feedback-recent m-2">
                        <p class="text-left m-2"><strong>Nhận xét gần nhất: </strong><br>
                            {{$car->feedbacks[0]->comment}}</p>
                        <div class="gutter--0 row u-marginTop2 m-2">
                            <div class="media media--center">
                                <div class="media-item u-marginTopSmallest">
                                    <img src="{{ asset('storage/uploads/profile/'. $car->feedbacks[0]->user->avatar) }}" alt="{{$car->user->user_name}}"  style="border-radius: 100%" width="32" height="32">
                                </div>
                                <div class="media-body hostFeedbackDetails-authorDetails m-2">
                                    <span class="hostFeedbackDetails-authorName">{{$car->feedbacks[0]->user->user_name}} — </span><span class="text-secondary" style="font-size: 14px">{{$car->feedbacks[0]->created_at->toFormattedDateString()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
@endsection
