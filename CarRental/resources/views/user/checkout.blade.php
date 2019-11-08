@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Checkout</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <div class="wheel-register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 padd-l0">
                    <div class="container-checkout">
                        <header>
                            <div class="bio">
                                <img src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" alt="{{$car->user->user_name}}" class="bg">
                            </div>
                            <div class="avatarcontainer">
                                <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" class="avatar">
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
                                    <div class="col-lg-5"> <span class="trip ">. {{$car->total_trip}} trips</span></div>
                                </div>
                            </div>
                            <div class="tripTime">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul>
                                            <li class="day-tripTime" id ="dateBeginCheckout">{{$search['dateBegin']->toFormattedDateString()}}</li>
                                            <li class="time-tripTime" id ="timeBeginCheckout">{{$search['timeBegin']->toTimeString()}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="center-block">=></i>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul>
                                            <li  class="day-tripTime" id ="dateEndCheckout">{{$search['dateEnd']->toFormattedDateString()}}</li>
                                            <li class="time-tripTime" id ="timeEndCheckout">{{$search['timeEnd']->toTimeString()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="tripLocation">
                                <span>Địa điểm giao nhận xe</span>
                                <p><i> + </i>{{$car->location_name}}</p>
                            </div>
                            <div class="tripLocation">
                                <div class="">
                                    <ul>
                                        <li class="time-tripTime">Đơn giá : {{$car->price}}K/day</li>
                                        <li class="time-tripTime">Trip fee : CA$16.90/day </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tripLocation">
                                <div class="card price-card">
                                    <div class="card-body ">
                                        <ul>
                                            <li  class="time-tripTime">{{$checkoutDetail['totalDayRental']}}-day trip: {{$checkoutDetail['totalPrice']}}/k</li>
                                            <li class="priceTotal">Trip total : {{$checkoutDetail['totalPrice']}}/K </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tripLocation">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="">
                                    </div>
                                    <div class="col-sm-8 ">
                                        <span>
                                            Free cancellation
                                        </span>
                                        <p>
                                            Full refund before September 20, 10:00 AM in local time of the car
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-r0">
                    <div class=" marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h3>Your <span>infomation</span></h3>
                        </div>
                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree21">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree21"
                                       aria-expanded="false" aria-controls="collapseThree21">
                                        <h3 class="mb-0 title-list">
                                            Mobile number
                                        </h3>
                                    </a>
                                </div>
                                <!-- Card body -->
                                <div id="collapseThree21" class="collapse" role="tabpanel" aria-labelledby="headingThree21"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <form>
                                            <div class="row form-group">
                                                <div class="col-lg-10">
                                                    <label for="formGroupExampleInput2">Số điện thoại của bạn : <p class="font-weight-bold">{{ $car->user->phone }}</p></label>
                                                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Phone number">
                                                    <button class="btn-info mt-2" id="changePhoneNumber">Change</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree31">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
                                       aria-expanded="false" aria-controls="collapseThree31">
                                        <h3 class="mb-0 title-list">
                                            Driver’s license
                                        </h3>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
                                     data-parent="#accordionEx1">
                                    <div class="card-body">
                                        <form>
                                            <div class="row form-group">
                                                <div class="col-lg-3">
                                                    <label for="formGroupExampleInput2">First name</label>
                                                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="formGroupExampleInput2">Middle name</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="formGroupExampleInput2">Last name</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                            <div class=" row form-group m-1">
                                                <p class="text-black-50">Enter your name <strong class="text-danger">exactly as it appears on your driver's license
                                                    </strong></p>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-lg-3">
                                                    <label for="formGroupExampleInput2">Day of birth</label>
                                                    <input type="date" class="form-control h-75" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                            <button class="btn-info">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <button class="wheel-btn" id="bookCar" data-toggle="modal" data-target="#bookCarModal">Book</button>
                            </div>
                        </div>
                        </div>
                        <!-- Accordion wrapper -->
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
                                        <p>Điện thoại: *****************</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="title-list">ĐỊA CHỈ GIAO NHẬN XE</h6>
                        <p>Sơn Trà, Đà Nẵng, Việt Nam (địa chỉ cụ thể sẽ được hiển thị sau khi đặt cọc).</p>
                        <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $car->lat }}" data-lng="{{ $car->long }}" data-car="{{ $car }}" data-marker="images/marker.png" style="height: 231px; width: 760px "></div>
                    </div>
                    <div class="m-1 mt-3 row ">
                        <h6 class="title-list">BẢNG GIÁ</h6>
                        <table class="table table-borderless col-lg-6">
                            <thead>
                            <tr>
                                <th scope="col">Đơn giá thuê</th>
                                <th scope="col">800 000 / Ngày</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Phí dịch vụ</td>
                                <td>50 0000 / Ngày</td>
                            </tr>
                            <tr>
                                <td>Tổng phí thuê xe</td>
                                <td>850 000 x 1 Ngày</td>
                            </tr>
                            <tr>
                                <td>Tổng cộng</td>
                                <td>850 000 VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-lg-4 mt-5">
                            <h4>Tiền cọc <span class="badge badge-secondary">200 000</span></h4>

                            <h4 class="mt-2">Tiền trả sau <span class="badge badge-success">200 000</span></h4>
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

    <div class="wheel-subscribe wheel-bg2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-header">
                        <h5>Newsletter Signup </h5>
                        <h3>Subscribe & get<span> 20% </span> Off</h3>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <form action="#">
                        <input type="text" placeholder="Your Email Adddress">
                        <button class="wheel-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
