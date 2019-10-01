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
                <select>
                    <option>
                        Dang cho
                    </option>
                    <option>
                        Dang hoat dong
                    </option>
                </select>
            </div>
            <div class="col-lg-8 list-my-car">
                <div class="box-car row">
                    <div class="col-sm-7">
                        <div class="img-my-car">
                            <img width="400" height="300" src="https://media.wired.com/photos/5d09594a62bcb0c9752779d9/master/w_2560%2Cc_limit/Transpo_G70_TA-518126.jpg">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="desc-car">
                            <h2>2016 Marcedes-Benz SLK</h2>
                            <span class="badge badge-warning">Waitng</span>
                            <div class="price-mycar">
                                <span>$79</span><sup>00</sup>/Day
                            </div>
                        </div>
                        <hr class="line-mycar">
                        <button class="btn-detail btn-mycar">Detail</button>
                        <button class="btn-manage btn-mycar">Manage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
