@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Đăng ký - Đăng nhập</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Đăng ký - Đăng nhập</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.errors')
    <div class="wheel-register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 padd-l0">
                    <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h5>Bạn đã có tài khoản? Đăng nhập</h5>
                        </div>
                        <form action="{{ action('UserController@postLogin') }}" method="POST">
                            {{ csrf_field()}}
                            @include('include.toast')
                            <label for="userName" class="fa fa-user"><input type="text" id="userName" name="emailLogin" placeholder='Email'></label>
                            <label for="userPass" class="fa fa-lock"><input type="password" id='userPass' name="passwordLogin" placeholder='Passsword'></label>
                            <button type="submit" class="wheel-btn">Đăng nhập</button>
                            <label class="password-sing clearfix" for="input-val2">
                                <a href="">Quên mật khẩu?</a>
                            </label>
                        </form>
                        <div class="wheel-register-link">
                            <a href="" class="wheel-btn-link wheel-bg11">Đăng nhập với Facebook</a>
                            <a href="" class="wheel-btn-link wheel-bg12">ăng nhập với Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-r0">
                    <div class="wheel-register-sign marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h5>Đăng ký </h5>
                            <h3>Hãy <span>Đăng ký</span></h3>
                        </div>
                        <form action="{{ action('UserController@postRegister') }}" method="POST">
                            {{ csrf_field()}}
                            <input type="text" placeholder="Username" name="userName">
                            <input type="text" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <input type="password" placeholder="Confirm Password" name="confirm_password">
                            <label for="input-val1">
                                <input type="checkbox" id='input-val1' name="checkTerms"> <span>Tôi đồng ý với</span>
                                <a href="">các điều khoản và điều kiện </a>
                            </label>
                            <button class="wheel-btn" type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
