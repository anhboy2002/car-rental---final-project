@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Xe của tôi</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Xe của tôi </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(count($cars) > 0)
            <div class="row">
                <div class="col-lg-3 status-list">
                    <h1>
                       Trạng thái
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
                                        <span>{{$car->price}}</span><sup>K</sup>/Ngày
                                    </div>
                                </div>
                                <hr class="line-mycar">
                                <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" class="btn btn-dark mb-2 btn-detail btn-mycar" role="button">Chi tiết</a>
                                <a href="{{route('carSetting', ['id' => $car->id])}}" class="btn btn-success mb-2 btn-manage btn-mycar" role="button">Quản lí</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-info mt-5" role="alert" style="width: 100%">
                Bạn chưa đăng ký xe! <a href="{{ route('carRegister') }}">Nhấn</a> để đăng ký.
            </div>
        @endif
    </div>
@endsection
