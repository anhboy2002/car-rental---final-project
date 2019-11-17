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
                        <li class="title-wrap" data-toggle="collapse" href="#reservation1" aria-expanded="false" aria-controls="reservation1">
                            <div class="title">
                                <a href="/trip/detail/{{$checkout->id}}"><span>1.</span>Duyệt yêu cầu</a>
                            </div>
                        </li>
                        <li class="title-wrap">
                            <div class="title">
                                <a  href='{{"/trip/deposit/" .$checkout->id}}'><span>2.</span>Thanh toán cọc</a>
                            </div>
                        </li>
                        <li class="title-wrap ">
                            <div class="title">
                                <a  href='{{"/trip/process/" .$checkout->id}}'><span>3.</span>Khởi hành</a>
                            </div>
                        </li>
                        <li class="title-wrap active">
                            <div class="title">
                                <a  href='{{"/trip/end/" .$checkout->id}}'><span>4.</span>Kết thúc</a>
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
                    @case(6)
                        <div class="status-wrap col-md-12 padd-lr0 status-trip no-handing-end-car">
                            <p>
                                <span class="status yellow-dot"></span>
                                <span>Đang tiến hành cho thuê.</span></br>
                            </p>
                        </div>
                        @break
                    @case(4)
                        @if($checkout->status_1 == 9)
                        <div class="status-wrap col-md-12 padd-lr0 status-trip">
                            <p>
                                @if($checkout->user_id_1 == auth()->id())
                                    <span class="status yellow-dot"></span>
                                    <span>Khách hàng đã trả xe, bạn đã nhận được xe? Nếu chưa hãy báo cáo</span></br>
                                @else
                                    <span class="status red-dot"></span>
                                    <span>Chờ chủ xe xác nhận </span></br>
                                @endif
                            </p>
                        </div>
                        @else
                            <div class="status-wrap col-md-12 padd-lr0 status-trip">
                                <p>
                                    <span class="status yellow-dot"></span>
                                    <span>Chuyến đã hoàn thành.</span></br>
                                </p>
                            </div>
                        @endif
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
                                                            <span class="mt-5">{{ $checkout->user2->phone }}</span>
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
                                    <p class="mt-2"><i class="fa fa-map-marker"></i> {{$checkout->car->location_name}}.</p>
                                    <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $checkout->car->lat }}" data-lng="{{ $checkout->car->long }}" data-car="{{ $checkout->car }}" data-marker="images/marker.png" style="height: 331px; width: 100% "></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if($checkout->user_id_1 == auth()->id())
                    @if($checkout->status_ck != 4)
                        <button class="btn btn-primary status-wrap ol-xs-12 padd-lr0 mt-2 btnReceiveEndCar" data-toggle="modal" data-target="#modalReceiveEndCar" >Đã nhận lại xe</button>
                    @endif
                    @if($checkout->status_1 == 9)
                            <button class="btn btn-primary status-wrap ol-xs-12 padd-lr0 mt-2 btnReceiveEndCar" data-toggle="modal" data-target="#modalReceiveEndCar" >Đã nhận lại xe</button>
                        <button class="btn btn-danger status-wrap ol-xs-12 padd-lr0 mt-2 btnReportEnd" data-toggle="modal" data-target="#modalReportEndCar" >Báo xấu</button>
                    @endif
                @else
                    @if($checkout->status_ck != 4)
                        <button class="btn btn-primary status-wrap ol-xs-12 padd-lr0 mt-2 btnHandingEndCar" data-toggle="modal" data-target="#modalHandingEndCar">Đã giao lại xe</button>
                    @endif
                @endif
            </div>
        </div>
    </div>
{{--    modal confirm--}}
    <div class="modal fade" id="modalReceiveEndCar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmHandingCar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Bạn đã nhận lại xe từ khách hàng?</label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnReceiveEndCar" >Đã nhận</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalHandingEndCar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmHandingCar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đánh giá chuyến đi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wheel-quote-stars col-lg-12 rating rating-review">
                        <span class="fa fa-star" data-rating="1"></span>
                        <span class="fa fa-star" data-rating="2"></span>
                        <span class="fa fa-star" data-rating="3"></span>
                        <span class="fa fa-star" data-rating="4"></span>
                        <span class="fa fa-star" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                    </div>
                    <textarea class="col-md-12 review-text"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary review-end-car" id="{{$checkout->id}}">Đánh giá</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalReportEndCar" tabindex="-1" role="dialog" aria-labelledby="modalReportCar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Báo cáo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <label>Bạn chưa nhận được ô tô? Báo xấu chủ xe.  </label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" id="btnReport" >Báo xấu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
