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
                    <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>
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
                                        <li class="text-center"><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                    @else
                                        <li class="text-center"><a href="{{ route('getLogin') }}">Login</a></li>
                                        <li class="text-center"><a href="{{ route('getLogin') }}">Register</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wheel-navigation">
                    <nav id="dl-menu" style="float: right;">
                        <ul class="main-menu dl-menu">
                            <li class="menu-item   current-menu-parent menu-item-has-children">
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
                            <li class="menu-item   current-menu-parent menu-item-has-children">
                                <a href="">Xe</a>
                                <ul class="sub-menu">
                                    <li class="menu-item "><a href="{{ route('car.favorite') }}">Xe yêu thích</a></li>
                                    <li class="menu-item "><a href="{{ route('carRegister') }}">Đăng ký xe</a></li>
                                    <li class="menu-item "><a href="{{ route('myCar') }}">Xe của tôi</a></li>
                                </ul>
                            </li>
                            <li class="menu-item   ">
                                <a href="car.trip">Chuyến đi</a>
                            </li>
                        </ul>
                        <div class="nav-menu-icon"><i></i></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
