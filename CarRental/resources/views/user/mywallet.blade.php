@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Tổng hợp giao dịch</h3>
                        <ol class="breadcrumb">
                            <li><a href="{{route('index')}}">Trang chủ</a></li>
                            <li class="active">Tổng hợp giao dịch</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reservation collapse multi-collapse show" id="reservation1">
        <div class="container padd-lr0 marg-lg-t100 marg-lg-b100 marg-xs-t0 marg-xs-b0">
            <div class="info-trip">
                <div class="status-wrap padd-lr0 pending-trip row ml-2 " style="height: 50px;">
                        <div class="countdown font-weight-bold col-md-10 mt-1">
                            <span style="color:#fff; margin-bottom: 0; display: block; font-size: 1.5em; text-transform: uppercase;">Bảng tổng hợp giao dịch</span>
                        </div>
                    <div class="line-form col-md-2 mt-1">
                        <div class="wrap-select custom-select--dark">
                            <select>
                                <option value="1572541200000">Tháng 12-2019</option>
                                <option value="1572541200000" selected>Tháng 11-2019</option>
                                <option value="1569862800000">Tháng 10-2019</option>
                                <option value="1567270800000">Tháng 09-2019</option>
                                <option value="1564592400000">Tháng 08-2019</option>
                                <option value="1561914000000">Tháng 07-2019</option>
                                <option value="1559322000000">Tháng 06-2019</option>
                                <option value="1556643600000">Tháng 05-2019</option>
                                <option value="1554051600000">Tháng 04-2019</option>
                                <option value="1551373200000">Tháng 03-2019</option>
                                <option value="1548954000000">Tháng 02-2019</option>
                                <option value="1546275600000">Tháng 01-2019</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start-form wheel-start-form2" style="background-color: #ffffff">
                        <form action="#">
                            <div class="modal-body">
                                <div class="balance-summary" style="padding: 1.5rem 0; margin: 0; text-align: center;">
                                    <h3 style="font-weight: 700;font-size: 3.25rem;color:#00a550;"><span>{{$totalPrice['totalPriceSuccess']}} 000 đ</span>
                                    </h3><p style="color:#67737f;font-size: 1.125rem;">Doanh thu hiện tại </p>
                                </div>
                                <div class="info-display row" style="text-align: center; margin-left: 130px">
                                    <div class="info-display--item col-md-2">
                                        <div class="group-ratings row">
                                            <span class="fa fa-star checked"></span>
                                            <span class="highlight">{{$ratingUser}}.0</span>
                                        </div>
                                        <p class="desc">Đánh giá</p>
                                    </div>
                                    <div class="info-display--item col-md-2">
                                        <span class="highlight">{{$countTripSuccess}} </span>
                                        <p class="desc">Chuyến đi thành công</p>
                                    </div>
                                    <div class="info-display--item d-flex col-md-5">
                                        <div class="response-desc">
                                            <span class="highlight">- </span>
                                            <p class="desc">Tỉ lệ phản hồi </p>
                                        </div>
                                        <div class="response-desc">
                                            <span class="highlight">- </span>
                                            <p class="desc">Thời gian phản hồi </p>
                                        </div>
                                        <div class="response-desc">
                                            <span class="highlight">- </span>
                                            <p class="desc">Tỉ lệ đồng ý</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="font-weight-bold">Mã chuyến đi</th>
                                            <th class="font-weight-bold">Ngày đi</th>
                                            <th class="font-weight-bold">Ngày về</th>
                                            <th class="font-weight-bold">Đơn giá thuê</th>
                                            <th class="font-weight-bold">Doanh thu chủ xe</th>
                                            <th class="font-weight-bold">Tiền đã nhận</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trips as $trip)
                                            @if($trip->status_ck == '4')
                                        <tr>
                                            <td>{{$trip->id}}</td>
                                            <td>{{ Carbon\Carbon::parse($trip->trip_start)->format('d/m/Y')}}</td>
                                            <td>{{ Carbon\Carbon::parse($trip->trip_end)->format('d/m/Y')}}</td>
                                            <td>{{$trip->car->price}}</td>
                                            <td>{{$trip->price}}</td>
                                            <td>{{$trip->price}}</td>
                                        </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="summary-change row">
                                        <p class="col-lg-9 m-1">Tổng Tiền - Chuyến đi hoàn thành</p>
                                        <p class="col-lg-2 m-1">
                                            <span>{{ $totalPrice['totalPriceSuccess']}} 000đ</span>
                                        </p>
                                    </div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="font-weight-bold">Mã chuyến đi</th>
                                            <th class="font-weight-bold">Ngày đi</th>
                                            <th class="font-weight-bold">Ngày về</th>
                                            <th class="font-weight-bold">Đơn giá thuê</th>
                                            <th class="font-weight-bold">Doanh thu chủ xe</th>
                                            <th class="font-weight-bold">Tiền đã nhận</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trips as $trip)
                                            @if($trip->status_ck != '4')
                                                <tr>
                                                    <td>{{$trip->id}}</td>
                                                    <td>{{ Carbon\Carbon::parse($trip->trip_start)->format('d/m/Y')}}</td>
                                                    <td>{{ Carbon\Carbon::parse($trip->trip_end)->format('d/m/Y')}}</td>
                                                    <td>{{$trip->car->price}}</td>
                                                    <td>{{$trip->price}}</td>
                                                    <td>{{$trip->price}}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="summary-change row">
                                        <p class="col-lg-9 m-1">Tổng Tiền- Giao dịch hủy chuyến</p>
                                        <p class="col-lg-2 m-1">
                                            <span>{{ $totalPrice['totalPriceReject']}} 000đ</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
