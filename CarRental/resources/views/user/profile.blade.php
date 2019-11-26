@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Tài khoản</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Tài khoản</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prosuct-wrap">
        <div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ asset('storage/uploads/profile/'. $user->avatar) }}" width="245px" height="163px" alt=" {{$user->user_name}}"/>
                        <div class="file btn btn-lg btn-primary">
                            Đổi ảnh đại diện
                            <form action="{{action('UserController@changeAvatar')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file" name="avatar" onchange="this.form.submit()"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="profile-head ">
                        <h3>
                            {{$user->user_name}}
                        </h3>
                        <h6 class="mt-2">
                            Tham gia: {{ $user->created_at->toFormattedDateString()}}  -
                            @if($user->checkouts->count() > 0)
                                {{$user->checkouts->count()}} chuyến
                            @else
                                Chưa có chuyến
                            @endif
                        </h6>
                        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cơ bản</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đổi mật khẩu</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="button" class="profile-edit-btn" name="btnAddMore" value="Sửa thông tin" data-toggle="modal" data-target="#editProfile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <label></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Tên</label>
                                </div>
                                <div class="col-md-4">
                                    <p>{{$user->user_name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <label></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-4">
                                    <p> {{$user->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <label></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Điện thoại</label>
                                </div>
                                <div class="col-md-4">
                                    <p>{{$user->phone}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Địa chỉ</label>
                                </div>
                                <div class="col-md-4">
                                    <p>{{$user->address}}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <h1 class="title-list-car-profile">Your Car List ({{count($cars)}} xe)</h1>
                                <div class="container padd-lr0 xs-padd">
                                    <div class="product-list product-list2 wheel-bgt clearfix">
                                        <div class="row">
                                            @foreach($cars as $car)
                                                <div class="col-sm-3 mt-2">
                                                    <div class="casing">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" width="245px" height="164px"></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>{{$car->name}}</h4>
                                                            <div class="wheel-quote-stars col-lg-6">
                                                                @for($i = 0; $i <$car->rate; $i++)
                                                                    <span class="fa fa-star checked"></span>
                                                                @endfor
                                                                @for($i =0; $i < 5 -$car->rate; $i++)
                                                                    <span class="fa fa-star"></span>
                                                                @endfor
                                                            </div>
                                                            <p><i class="fa fa-map-marker"></i> Sơn trà, Đà Nẵng</p>
                                                            <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" class="text-decoration-none ml-2">» Chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="{{ action("UserController@changePassword") }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <label></label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mật khẩu mới</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="password" class="form-group" name="password_new"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 ">
                                        <label></label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nhập lại mật khẩu</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="password" class="form-group" name="password_again"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin: auto; display: block;" > Lưu mật khẩu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editProfile" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="row">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <form method="POST" action="{{action('UserController@editProfile')}}" class="edit-profile-modal " enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    <div class="form-group">
                                        <h2 class="title-modal-edit ">Sửa thông tin</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Tên</label>
                                        <input name="user_name" type="text" maxlength="50" class="form-control" value="{{$user->user_name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input name="email" type="email" maxlength="50" class="form-control" value="{{$user->email}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" >Điện thoại</label>
                                        <input name="phone"  type="text" maxlength="50" class="form-control" value="{{$user->phone}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" >Địa chỉ</label>
                                        <input name="address" type="text" maxlength="25" class="form-control" value="{{$user->address}}"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-block">Lưu lại</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.includes.footer')
@endsection
