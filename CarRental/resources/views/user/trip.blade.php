@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Chuyến</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Chuyến</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item  trip-title-tabs">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Chuyến hiện tại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lịch sử chuyến</a>
        </li>
    </ul>
    <div class="trip-container tab-content" id="myTabContent">
        <div class="has-trip tab-pane fade show active"  id="home" role="tabpanel" aria-labelledby="home-tab">
            @foreach($checkouts as $checkout)
                @if($checkout->status_ck == 1 || $checkout->status_ck == 3 )
                    <div class="trip-box new-box">
                        <div class="trip-header">
                            <h4 class="car-name">
                                <span>{{$checkout->car->name}}</span>
                            </h4>
                        </div>
                        <div class="trip-body trip-header">
                            <div class="left">
                                <div class="car-img">
                                    <a href="{{ route('trip.detail', [ 'id' => $checkout->id ]) }}">
                                        <div class="fix-img">
                                            <img src="{{ asset('storage/uploads/car_photos/'. $checkout->car->photos[0]->feature) }}" alt="{{$checkout->car->name}}" width="142px" height="107px">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="right">
                                <p> Bắt đầu: {{ Carbon\Carbon::parse($checkout->trip_start)->format('H:i ,l')}} , {{ Carbon\Carbon::parse($checkout->trip_start)->format('d/m/Y')}}</p>
                                <p> Kết thúc: {{ Carbon\Carbon::parse($checkout->trip_end)->format('H:i ,l')}} , {{ Carbon\Carbon::parse($checkout->trip_end)->format('d/m/Y')}}</p>
                                <p class="total-price">Tổng tiền {{$checkout->price}}K</p>
                            </div>
                        </div>
                        <a href="{{ route('trip.detail', [ 'id' => $checkout->id ]) }}">
                            <div class="trip-footer">
                                <div class="status-trips">
                                    @switch($checkout->status_ck)
                                        @case(1)
                                        <p>
                                            <span class="status yellow-dot"></span>
                                            Đang chờ chủ xe duyệt
                                        </p>
                                        @break

                                        @case(0)
                                        <p>
                                            <span class="status red-dot"></span>
                                            Khách thuê đã huỷ chuyến
                                        </p>
                                        @break

                                        @case(2)
                                        <p>
                                            <span class="status blue-dot"></span>
                                            Hết hạn
                                        </p>
                                        @break

                                        @case(3)
                                        <p>
                                            <span class="status green-dot"></span>
                                            Chủ xe đã duyệt
                                        </p>
                                        @break
                                        @default
                                        <span>Something went wrong, please try again</span>
                                    @endswitch
                                </div>
                                <div class="time">
                                    <p>{{$checkout->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="has-trip tab-pane fade show active"  id="home" role="tabpanel" aria-labelledby="home-tab">
                @foreach($checkouts as $checkout)
                    @if($checkout->status_ck == 2 || $checkout->status_ck == 0 || $checkout->status_ck == 4)
                        <div class="trip-box new-box">
                            <div class="trip-header"><h4 class="car-name"><span>{{$checkout->car->name}}</span></h4></div>
                            <div class="trip-body trip-header">
                                <div class="left">
                                    <div class="car-img">
                                        <a href="{{ route('trip.detail', [ 'id' => $checkout->id ]) }}">
                                            <div class="fix-img">
                                                <img src="{{ asset('storage/uploads/car_photos/'. $checkout->car->photos[0]->feature) }}" alt="{{$checkout->car->name}}" width="142px" height="107px">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="right">
                                    <p> Bắt đầu: {{ Carbon\Carbon::parse($checkout->trip_start)->format('H:i ,l')}} , {{ Carbon\Carbon::parse($checkout->trip_start)->format('d/m/Y')}}</p>
                                    <p> Kết thúc: {{ Carbon\Carbon::parse($checkout->trip_end)->format('H:i ,l')}} , {{ Carbon\Carbon::parse($checkout->trip_end)->format('d/m/Y')}}</p>
                                    <p class="total-price">Tổng tiền {{$checkout->price}}K</p>
                                </div>
                            </div>
                            <a href="{{ route('trip.detail', [ 'id' => $checkout->id ]) }}">
                                <div class="trip-footer">
                                    <div class="status-trips">
                                        @switch($checkout->status_ck)
                                            @case(0)
                                            <p>
                                                <span class="status red-dot"></span>
                                                Khách thuê đã huỷ chuyến
                                            </p>
                                            @break

                                            @case(2)
                                            <p>
                                                <span class="status blue-dot"></span>
                                                Hết hạn
                                            </p>
                                            @break
                                            @case(4)
                                            <p>
                                                <span class="status green-dot"></span>
                                                Hoàn thành chuyến
                                            </p>
                                            @break
                                            @default
                                            <span>Something went wrong, please try again</span>
                                        @endswitch
                                    </div>
                                    <div class="time">
                                        <p>{{$checkout->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
