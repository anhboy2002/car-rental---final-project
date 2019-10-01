@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Register</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////// -->
    <div class="wheel-register-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 padd-l0">
                    <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h5>have an account? Log In</h5>
                        </div>
                        <form action="#">
                            <label for="userName" class="fa fa-user"><input type="text" id="userName" placeholder='Username / Email'></label>
                            <label for="userPass" class="fa fa-lock"><input type="text" id='userPass' placeholder='Passsword'></label>
                            <button class="wheel-btn">Login Now</button>
                            <label class="password-sing clearfix" for="input-val2">
                                <input type='checkbox' id='input-val2'> <span>Keep me signed in</span>
                                <a href="">Forgot password?</a>
                            </label>
                        </form>
                        <div class="wheel-register-link">
                            <a href="" class="wheel-btn-link wheel-bg11">Sign in With Facebook</a>
                            <a href="" class="wheel-btn-link wheel-bg12">Sign in With Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 padd-r0">
                    <div class="wheel-register-sign marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                        <div class="wheel-header">
                            <h5>Sign up Now </h5>
                            <h3>Get <span>Registered</span></h3>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Username">
                            <input type="text" placeholder="Password">
                            <input type="text" placeholder="Confirm Password">
                            <label for="input-val1">
                                <input type="checkbox" id='input-val1'> <span>I agree with the </span>
                                <a href="">Terms and Conditions</a>
                            </label>
                            <button class="wheel-btn">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////// -->
    <div class="wheel-subscribe wheel-bg2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-header">
                        <h5>Newsletter Signup </h5>
                        <h3>Subscribe & get<span> 20% </span> Off</h3>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <form action="#">
                        <input type="text" placeholder="Your Email Adddress">
                        <button class="wheel-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
