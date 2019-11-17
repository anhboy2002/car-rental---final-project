@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
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
                        <li class="title-wrap active" data-toggle="collapse" href="#reservation1" aria-expanded="false" aria-controls="reservation1">
                            <div class="title">
                                <a><span>1.</span>Duyệt yêu cầu</a>
                            </div>
                        </li>
                        <li class="title-wrap ">
                            <div class="title">
                                <a  href='{{ ($checkout->status_ck == 3 || $checkout->status_ck == 4 || $checkout->status_ck == 5 || $checkout->status_ck == 6) ? "/trip/deposit/" .$checkout->id: ""}}'><span>2.</span>Thanh toán cọc</a>
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
                    @case(1)
                        <div class="status-wrap ol-xs-12 padd-lr0 pending-trip" style="height: 70px;">
                            <p>
                                <span class="status yellow-dot"></span>
                                @if($checkout->user_id_1 == auth()->id())
                                    <span>Đang chờ bạn duyệt ...</span></br>
                                @else
                                    <span>Đang chờ chủ xe duyệt...</span></br>
                                @endif
                                <span class="countdown font-weight-bold">Thời gian còn lại: <strong id="pending-text" ></strong></span>
                            </p>
                        </div>
                    @break

                    @case(0)
                        <div class="status-wrap col-md-12 padd-lr0">
                            <p style="background-color: black;">
                                <span class="status red-dot"></span>
                                <span>Chuyến đã bị huỷ. Lý do: Thay đổi lịch trình</span>
                            </p>
                        </div>
                    @break

                    @case(2)
                        <div class="status-wrap col-md-12 padd-lr0">
                            <p>
                                <span class="status blue-dot"></span>
                                <span>Hết hạn</span>
                            </p>
                        </div>
                    @break

                    @case(5)

                    @case(3)
                    <div class="status-wrap col-md-12 padd-lr0 status-trip">
                        <p>
                            <span class="status green-dot"></span>
                            @if($checkout->user_id_1 == auth()->id())
                                <span>Đã duyệt</span></br>
                            @else
                                <span>Chủ xe đã duyệt</span></br>
                            @endif
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
                                                            <span class="mt-5">{{ ($checkout->status_ck == 3 || $checkout->status_ck == 4 || $checkout->status_ck == 5) ? $checkout->user1->phone : Str::limit($checkout->user1->phone,$limit = 5 , $end = '*****')}}</span>
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
                                                            <span class="mt-5">{{$checkout->user2->phone}}</span>
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
                                    @if($checkout->user_id_1 != auth()->id())
                                        <p class="mt-2"><i class="fa fa-map-marker"></i> {{Str::limit($checkout->car->location_name,$limit = 9 , $end = '...')}}. (Địa chỉ cụ thể sẽ hiện thị sau khi đặt cọc thành công)</p>
                                    @else
                                        <p class="mt-2"><i class="fa fa-map-marker"></i> {{$checkout->car->location_name}}.</p>
                                    @endif

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
                                                <th><strong>{{$checkout->price}} K</strong></th>
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
                @if($checkout->status_ck == 1)
                    @if($checkout->user_id_1 != auth()->id())
                        <button class="btn btn-danger status-wrap ol-xs-12 padd-lr0 mt-2 btnRejectTrip" data-toggle="modal" data-target="#modalConfirmRejectTrip" >Hủy chuyến</button>
                    @elseif ($checkout->status_ck != 3)
                        <button class="btn btn-danger status-wrap ol-xs-12 padd-lr0 mt-2 "  id="btnRejectTrip2" >Hủy chuyến</button>
                        <button class="btn btn-success status-wrap ol-xs-12 padd-lr0"  id="btnAcceptTrip" >Đồng ý</button>
                    @endif
                @endif
            </div>
        </div>
    </div>
{{--    modal confirm--}}
    <div class="modal fade" id="modalConfirmRejectTrip" tabindex="-1" role="dialog" aria-labelledby="modalConfirmViewDetailCheckout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hủy chuyến</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <span>Bạn có chắc muốn hủy chuyến?</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnRejectTripContinue">Tiếp tục</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSelectReasonRejectTrip" tabindex="-1" role="dialog" aria-labelledby="modalConfirmViewDetailCheckout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hủy chuyến</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="browser-default custom-select" id="reasonSelect">
                        <option value="3">Thay đổi lịch trình</option>
                        <option value="2">Lựa chọn xe khác phù hợp hơn</option>
                        <option selected  value="1">Lý do khác</option>
                    </select>
                    <input  class="form-control mt-3" id="reasonSelectText" placeholder = "  Vui lòng nhập lý do khác"/>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnRejectTrip" >Hủy chuyên</button>
                </div>
            </div>
        </div>
    </div>
@endsection
