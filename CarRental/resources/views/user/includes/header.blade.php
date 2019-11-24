<div class="load-wrap">
    <div class="wheel-load">
        <img src="{{ asset('images/loader.gif') }}" alt="" class="image">
    </div>
</div>
<div class="wheel-menu-wrap ">
    <div class="container-fluid wheel-bg1">
        <div class="row">
            <div class="col-sm-3">
                <div class="wheel-logo">
                    <a href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12 padd-lr0">
                <div class="wheel-top-menu clearfix">
                    <div class="wheel-top-menu-info">
                        <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+61) 3214 546789</span></a></div>
                        <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>contact@wheel-rental.com</span></a></div>

                    </div>
                    <div class="wheel-top-menu-log">
                        <div class="top-menu-item">
                            <div class="dropdown wheel-ico">
                                <button class="btn btn-default dropdown-toggle notification" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Thông báo
                                    <span class="badge" style="top:-10px">3</span>
                                </button>
                                <ul class="dropdown-menu" style="  width: 460px;">
                                    <li class="head text-light bg-dark">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                <span>Thông báo (3)</span>
                                                <a href="" class="float-right text-light">Đánh dấu tất cả là đã đọc</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-box">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8">
                                                <strong class="text-info">David John</strong>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                </div>
                                                <small class="text-warning">27.11.2015, 15:00</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-box bg-gray">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8">
                                                <strong class="text-info">David John</strong>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                </div>
                                                <small class="text-warning">27.11.2015, 15:00</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-box">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8">
                                                <strong class="text-info">David John</strong>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                </div>
                                                <small class="text-warning">27.11.2015, 15:00</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="footer bg-dark text-center">
                                        <a href="" class="text-light">Xem tất cả</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-menu-item">
                            <div class="dropdown wheel-user-ico">
                                <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @if (Auth::check())
                                      {{auth()->user()->user_name}}
                                    @else
                                        Tài khoản
                                    @endif
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu account-nav">
                                    @if (Auth::check())
                                        <li class="text-center"><a href="{{ route('myProflie') }}">Tài khoản</a></li>
                                        <li class="text-center"><a href="{{ route('car.favorite') }}">Xe yêu thích</a></li>
                                        <li class="text-center"><a href="{{ route('myCar') }}">Xe của tôi</a></li>
                                        <li class="text-center"><a href="{{ route('carRegister') }}">Đăng ký xe</a></li>
                                        <li class="text-center"><a href="{{ route('car.trip') }}">Chuyến của tôi</a></li>
                                        <li class="text-center" id="logout-item"><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                    @else
                                        <li class="text-center"><a href="{{ route('getLogin') }}">Đăng nhập</a></li>
                                        <li class="text-center"><a href="{{ route('getLogin') }}">Đăng ký</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wheel-navigation">
                    <nav id="dl-menu" style="float: right;">
                        <ul class="main-menu dl-menu">
                            <li class="menu-item  menu-item-has-children">
                                <a href="/index">Trang chủ</a>
                            </li>
                            <li class="menu-item menu-item-has-children  ">
                                <a href="">Hãng xe</a>
                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">{{$category->name}}</a>
                                            <ul class="sub-menu">
                                                @foreach($category->childrens as $children)
                                                <li class="menu-item"><a href="#">{{$children->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item  menu-item-has-children">
                                <a href="">Xe</a>
                                <ul class="sub-menu">
                                    @if (Auth::check())
                                        <li class="menu-item "><a href="{{ route('car.favorite') }}">Xe yêu thích</a></li>
                                        <li class="menu-item "><a href="{{ route('carRegister') }}">Đăng ký xe</a></li>
                                        <li class="menu-item "><a href="{{ route('myCar') }}">Xe của tôi</a></li>
                                    @else
                                        <li class="menu-item " href="#loginModal" data-toggle="modal" data-target="#loginModal"><a>Xe yêu thích</a></li>
                                        <li class="menu-item " href="#loginModal" data-toggle="modal" data-target="#loginModal"><a>Đăng ký xe</a></li>
                                        <li class="menu-item " href="#loginModal" data-toggle="modal" data-target="#loginModal"><a>Xe của tôi</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="menu-item   ">
                                <a href="{{ route('car.trip') }}">Chuyến đi</a>
                            </li>
                        </ul>
                        <div class="nav-menu-icon"><i></i></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.loginModal')
