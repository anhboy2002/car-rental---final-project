@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Đặt xe</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('index')}}">Trang chủ</a></li>
                            <li class="active">Đặt xe</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="step-wrap">
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <ul class="steps">
                        <li class="title-wrap " data-toggle="collapse" href="#reservation1" aria-expanded="false" aria-controls="reservation1">
                            <div class="title">
                                <a href="/trip/detail/{{$checkout->id}}"><span>1.</span>Duyệt yêu cầu</a>
                            </div>
                        </li>
                        <li class="title-wrap active">
                            <div class="title">
                                <a  href='{{ ($checkout->status_ck == 5) ? "/trip/deposit/" .$checkout->id: ""}}'><span>2.</span>Thanh toán cọc</a>
                            </div>
                        </li>
                        <li class="title-wrap ">
                            <div class="title">
                                <a  href='{{ ($checkout->status_ck == 3 || $checkout->status_ck == 4 || $checkout->status_ck == 6) ? "/trip/process/" .$checkout->id: ""}}'><span>3.</span>Khởi hành</a>
                            </div>
                        </li>
                        <li class="title-wrap ">
                            <div class="title">
                                <a  href='{{ ($checkout->status_1 == 6 && $checkout->status_2 == 6) ? "/trip/end/" .$checkout->id: ""}}'><span>4.</span>Kết thúc</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="reservation collapse multi-collapse show" id="reservation1">
        <div class="container padd-lr0 marg-lg-t100 marg-lg-b100 marg-xs-t0 marg-xs-b0">
            <div class="row info-trip">
                <input type="hidden" value="{{$checkout->created_at}}" id="created_at_checkout" data-createdat ="{{$checkout->status_ck}}" data-idcheckout = "{{$checkout->id}}"/>
                @switch($checkout->status_ck)
                    @case(5)
                        <div class="status-wrap col-md-12 padd-lr0 status-trip deposit-trip">
                            <p>
                                <span class="status yellow-dot"></span>
                                @if($checkout->user_id_1 == auth()->id())
                                    <span>Chờ khách cọc</span></br>
                                @else
                                    <span>Vui lòng hoàn thành tiền cọc theo bên dưới</span></br>
                                @endif
                            </p>
                        </div>
                        @break
                    @case(3)
                    <div class="status-wrap col-md-12 padd-lr0 status-trip">
                        <p>
                            <span class="status green-dot"></span>
                            <span>Khách hàng đã đặt cọc</span></br>
                        </p>
                    </div>
                    @break
                    @case(4)
                    <div class="status-wrap col-md-12 padd-lr0 status-trip">
                        <p>
                            <span class="status green-dot"></span>
                            <span>Đã hoàn thành</span></br>
                        </p>
                    </div>
                    @break
                    @case(6)
                    <div class="status-wrap col-md-12 padd-lr0 status-trip">
                        <p>
                            <span class="status green-dot"></span>
                            <span>Xe đang được thuê</span></br>
                        </p>
                    </div>
                    @break
                @endswitch
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start-form wheel-start-form2" style="background-color: #ffffff">
                        <form action="#">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/uploads/car_photos/'. $checkout->car->photos[0]->feature) }}" alt="{{$checkout->car->name}}" class="" width="316px" height="230px">
                                    </div>
                                    <div class="col-md-3">
                                        <h5> {{ $checkout->car->name }}</h5>
                                        <div class="wheel-quote-stars">
                                            @for($i = 0; $i <$checkout->car->rate; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                            @for($i =0; $i < 5 - $checkout->car->rate; $i++)
                                                <span class="fa fa-star"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    @if($checkout->user_id_1 != auth()->id())
                                        <div  class="col-md-5">
                                            <div class="row">
                                                <div class="card profile" style="width: 23rem;">
                                                    <div class="card-body">
                                                        <img src="{{ asset('storage/uploads/profile/'. $checkout->user1->avatar) }}" alt="{{$checkout->user1->user_name}}">
                                                        <h5 class="card-title">{{$checkout->user1->user_name}}</h5>
                                                        <h6 class="card-subtitle mb-2 text-muted">CHỦ XE</h6>
                                                        <div>
                                                            <h6 class="title-bill float-left"><strong>Số điện thoại :</strong></h6>
                                                            <span class="mt-5">{{ $checkout->user1->phone }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div  class="col-md-5">
                                            <div class="row">
                                                <div class="card profile" style="width: 23rem;">
                                                    <div class="card-body">
                                                        <img src="{{ asset('storage/uploads/profile/'. $checkout->user2->avatar) }}" alt="{{$checkout->user2->user_name}}">
                                                        <h5 class="card-title">{{$checkout->user2->user_name}}</h5>
                                                        <h6 class="card-subtitle mb-2 text-muted">KHÁCH HÀNG</h6>
                                                        <div>
                                                            <h6 class="title-bill float-left"><strong>Số điện thoại :</strong></h6>
                                                            <span class="mt-5">{{ $checkout->user2->phone}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row ml-1">
                                    <div class="group-info mt-3" style="width: 100%;">
                                        <h6 class="title-list">THỜI GIAN THUÊ XE</h6>
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <p>Bắt đầu: {{Carbon\Carbon::parse($checkout->trip_start)->format('H:i')}} - {{Carbon\Carbon::parse($checkout->trip_start)->format('d/m/Y')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kết thúc: {{Carbon\Carbon::parse($checkout->trip_end)->format('H:i')}} - {{Carbon\Carbon::parse($checkout->trip_end)->format('d/m/Y')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h6 class="title-list">ĐỊA CHỈ GIAO NHẬN XE</h6>
                                    <p class="mt-2">{{$checkout->car->location_name}}.</p>
                                    <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $checkout->car->lat }}" data-lng="{{ $checkout->car->long }}" data-car="{{ $checkout->car }}" data-marker="images/marker.png" style="height: 331px; width: 100% "></div>
                                </div>
                                <div class="m-1 mt-3 row ">
                                    <h6 class="title-list">BẢNG GIÁ</h6>
                                    <table class="table table-borderless border-table col-lg-6 mt-5">
                                        <thead>
                                        <tr>
                                            <th>Đơn giá thuê</th>
                                            <th>{{$checkout->car->price}} K / Ngày</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr >
                                                <td>Phí dịch vụ</td>
                                                <td>0 / Ngày</td>
                                            </tr>
                                            <tr class="rule-row">
                                                <td >Tổng phí thuê xe</td>
                                                <td>{{$checkout->car->price}} K x <strong>2 Ngày</strong></td>
                                            </tr>
                                            <tr>
                                                <th><strong>Tổng cộng</strong></th>
                                                <th><strong>{{$checkout->price}} K VNĐ</strong></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-4 mt-5">
                                        <h4>Tiền cọc <span class="badge badge-secondary">{{ (float) $checkout->price * 0.3}} K</span></h4>

                                        <h4 class="mt-2">Tiền trả sau <span class="badge badge-success">{{ (float) $checkout->price * 0.7 }} K</span></h4>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h6 class="title-list">GIẤY TỜ THUÊ XE (BẢN GỐC)</h6>
                                    <div class="group-car-detail mt-2">
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
                                    <div class="group-car-detail mt-2">
                                        <div class="ctn-desc-new ml-3">
                                            <ul class="required">
                                                <li>15 triệu tiền mặt hoặc Xe máy (cà vẹt gốc) giá trị 15 triệu</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if($checkout->status_ck == 5 && $checkout->user_id_2 == auth()->id())
                    <button class="btn btn-primary status-wrap ol-xs-12 padd-lr0 mt-2 " data-toggle="modal" data-target="#modalConfirmDepositTrip" >Đặt cọc</button>
                @elseif($checkout->user_id_1 == auth()->id() && $checkout->status_ck == 5)
                    <button class="btn btn-primary status-wrap ol-xs-12 padd-lr0 mt-2 btnDepositTrip" data-toggle="modal" data-target="#modalConfirmAcceptProcessTrip" >Khách đã đặt cọc</button>
                @endif
            </div>
        </div>
    </div>
{{--    modal confirm--}}
    <div class="modal fade" id="modalConfirmDepositTrip" tabindex="-1" role="dialog" aria-labelledby="modalConfirmViewDetailCheckout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin đặt cọc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-md-4">
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='form-row'>
                                        <div class='col-xs-12 form-group'>
                                            <label class='control-label font-weight-bold'>Chuyển khoản ngân hàng:</label>
                                            </br>
                                            <span>Ngân hàng Vietcombank Đà Nẵng</span>    </br>
                                            <span>STK : 00410000111111</span>    </br>
                                            <span>Tên : Trần Mạnh Hùng</span>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-xs-12 form-group '>
                                            <label class='control-label font-weight-bold'>Thanh toán tiền mặt</label> </br>
                                            <span>Đ/c : 58 Cù Chính Lan</span> </br>
                                            <span>SĐT : 0905192156</span>
                                        </div>
                                    </div>
                                    <div class='form-row'>
                                        <div class='col-md-12'>
                                            <div class='form-control total btn btn-info'>
                                                Tổng:
                                                <span class='amount'>$300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalConfirmAcceptProcessTrip" tabindex="-1" role="dialog" aria-labelledby="modalConfirmViewDetailCheckout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <label>Khách đã hoàn thành tiền cọc cho bạn?</label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnProcessTrip">Đã cọc</button>
                </div>
            </div>
        </div>
    </div>
@endsection
