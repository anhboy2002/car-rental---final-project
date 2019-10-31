<div class="load-wrap">
    <div class="wheel-load">
        <img src="images/loader.gif" alt="" class="image">
    </div>
</div>
<div class="wheel-menu-wrap ">
    <div class="container-fluid wheel-bg1">
        <div class="row">
            <div class="col-sm-3">
                <div class="wheel-logo">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
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
                                        Account
                                    @endif
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    @if (Auth::check())
                                        <li><a href="{{ route('getLogin') }}">Profile</a></li>
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    @else
                                        <li><a href="{{ route('getLogin') }}">Login</a></li>
                                        <li><a href="{{ route('getLogin') }}">Register</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 ">
                <div class="wheel-navigation">
                    <nav id="dl-menu">
                        <!-- class="dl-menu" -->
                        <ul class="main-menu dl-menu">
                            <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                <a href="/index">Home</a>
                            </li>
                            <li class="menu-item   ">
                                <a href="/list-your-car">List your car</a>
                                <ul class="sub-menu">
                                    <li class="menu-item "><a href="/mycar">Your car</a></li>
                                    <li class="menu-item "><a href="/myfavorite">Your favorite car</a></li>
                                </ul>
                            </li>
                            <li class="menu-item   ">
                                <a href="/trip">Trips</a>
                            </li>
                            <li class="menu-item menu-item-has-children  ">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item "><a href="/profile">Profile</a></li>
                                    <li class="menu-item "><a href="/search">Search</a></li>
                                    <li class="menu-item "><a href="/checkout">Checkout</a></li>
                                    <li class="menu-item "><a href="/book">Book</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="nav-menu-icon"><i></i></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
