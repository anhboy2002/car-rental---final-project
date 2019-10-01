@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Trips</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Trips</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>
    <div class="trip-container">
        <div class="has-trip">
            <div>
                <div class="trip-box new-box">
                    <div class="trip-header"><h4 class="car-name"><span>CHEVROLET CRUZE 2017</span></h4></div>
                    <div class="trip-body trip-header">
                        <div class="left">
                            <div class="car-img">
                                <a href="/trip/detail/MDUWGQ5J">
                                    <div class="fix-img">
                                        <img src="https://n1-pstg.mioto.vn/cho_thue_xe_tu_lai_tphcm/chevrolet_cruze_2017/p/g/2019/06/03/16/pPGKyOWd8MmjXBZRvSRMag.jpg" alt="Cho thuê xe tự lái CHEVROLET CRUZE 2017">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <p> Bắt đầu: 21:00 Thứ 2, 23/09/2019</p>
                            <p> Kết thúc: 20:00 Thứ 3, 24/09/2019</p>
                            <p class="total-price">Tổng tiền 803K</p>
                        </div>
                    </div>
                    <a href="/trip/detail/MDUWGQ5J">
                        <div class="trip-footer">
                            <div class="status-trips">
                                <p>
                                        <span class="status red-dot">

                                        </span>
                                    Khách thuê đã huỷ chuyến
                                </p>
                            </div>
                            <div class="time">
                                <p>8 ngày trước</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection
