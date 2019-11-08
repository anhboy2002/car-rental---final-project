@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>List car</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> My car </a></li>
                            <li class="active">List car</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 status-list">
                <h1>
                    Status
                </h1>
                <select id="choice">
                    <option value="all">
                        Tất cả
                    </option>
                    <option value="0">
                        Đang chờ duyệt
                    </option>
                    <option value="1">
                        Đang hoạt động
                    </option>
                    <option value="2">
                        Đã bị từ chối
                    </option>
                    <option value="3">
                        Đang tạm ngừng
                    </option>
                </select>
            </div>
            <div class="col-lg-8 list-my-car">
{{--                @if($cars)--}}
                    @foreach($cars as $car)
                    <div class="box-car row choice choice{{$car->status}}">
                        <div class="col-sm-7">
                            <div class="img-my-car">
                                <img width="400" height="300" src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="desc-car">
                                <h2>{{$car->name}}</h2>

                                    @switch($car->status)
                                        @case(0)
                                        <span class="badge badge-warning">
                                            Đang chờ duyệt
                                        </span>
                                        @break
                                        @case(1)
                                        <span class="badge badge-success">
                                            Đang hoạt động
                                        </span>
                                        @break
                                        @case(2)
                                        <span class="badge badge-danger">
                                            Đã bị từ chối
                                        </span>
                                        @break
                                        @case(3)
                                        <span class="badge badge-dark">
                                            Đang tạm ngừng
                                        </span>
                                        @break
                                    @endswitch

                                <div class="price-mycar">
                                    <span>${{$car->price}}</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <hr class="line-mycar">
                            <button class="btn-detail btn-mycar">Detail</button>
                            <button class="btn-manage btn-mycar">Manage</button>
                        </div>
                    </div>
                    @endforeach
{{--                @else--}}
{{--                        Bạn chưa đăng ký xe nào cả~--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
@endsection
