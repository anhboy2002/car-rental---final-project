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
                        @if (Auth::check() && auth()->user()->notifications->count() > 0)
                            <div class="top-menu-item">
                                <div class="dropdown wheel-ico">
                                    <button class="btn btn-default dropdown-toggle notification" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Thông báo
                                        <span class="badge" style="top:-10px">{{auth()->user()->unreadnotifications()->count()}}</span>
                                    </button>
                                    <ul class="dropdown-menu" style="  width: 460px;">
                                        <li class="head text-light bg-dark">
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <span>Thông báo ({{auth()->user()->unreadnotifications()->count()}})</span>
                                                    <a href="" class="float-right text-light">Đánh dấu tất cả là đã đọc</a>
                                                </div>
                                            </div>
                                        </li>
                                        @foreach(auth()->user()->notifications as $notification)
                                            @if($notification->type == 'App\\Notifications\\NewReservation')
                                                <li class="notification-box @if($notification->unread()) bg-gray @endif" >
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                            <img  src="{{ asset('storage/uploads/car_photos/'. $notification->data['avatar_car']) }}" class="rounded-circle"  height="85" width="85"/>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-8 col-8">
                                                            <strong class="text-info">{{ $notification->data['user_name_2'] }}</strong>
                                                            <div>
                                                                Xe {{ $notification->data['car_name']  }} đã được đặt.
                                                                <a href="{{ route('trip.detail', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-warning badge"> Chờ duyệt</span></a>
                                                            </div>
                                                            <small class="text-warning">{{ $notification->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            @elseif($notification->type == 'App\\Notifications\\ChangeReservationStatus')
                                                <li class="notification-box @if($notification->unread()) bg-gray @endif" href="{{ route('trip.detail', [ 'id' =>$notification->data['transaction_id'] ]) }}">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-3 text-center">
                                                            <img  src="{{ asset('storage/uploads/car_photos/'. $notification->data['avatar_car']) }}" class="rounded-circle" height="85" width="85"/>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-8 col-8">
                                                            <strong class="text-info">{{ $notification->data['user_name_1'] }}</strong>
                                                            <div>
                                                                @if($notification->data['status_ck'] == 1)
                                                                    Chuyến của bạn đang chờ duyệt
                                                                    <a href="{{ route('trip.detail', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-warning badge"> Chờ duyệt</span></a>
                                                                @elseif($notification->data['status_ck'] == 0)
                                                                    Chuyến của bạn đã bị hủy
                                                                    <a href="{{ route('trip.detail', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-danger badge"> Bị hủy</span></a>
                                                                @elseif($notification->data['status_ck'] == 2)
                                                                    Chuyến của bạn đã bị hết hạn
                                                                    <a href="{{ route('trip.detail', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-dark badge"> Hết hạn</span></a>
                                                                @elseif($notification->data['status_ck'] == 3)
                                                                    Chuyến của bạn đang tiến hành
                                                                    <a href="{{ route('trip.process', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-info badge"> Tiến hành</span></a>
                                                                @elseif($notification->data['status_ck'] == 5)
                                                                    Chuyến của bạn đã được duyệt
                                                                    <a href="{{ route('trip.deposit', [ 'id' =>$notification->data['transaction_id'] ]) }}"><span class="badge-info badge"> Đặt cọc</span></a>
                                                                @elseif($notification->data['status_ck'] == 6)
                                                                    Chủ xe đã giao xe
                                                                    <a href="{{ route('trip.deposit', [ 'id' =>$notification->data['transaction_id'] ]) }}"></a>
                                                                @endif
                                                            </div>
                                                            <small class="text-warning">{{ $notification->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                        <li class="footer bg-dark text-center">
                                            <a href="" class="text-light">Xem tất cả</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
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
                                        <li class="text-center"><a href="{{ route('mywallet') }}">Thống kê</a></li>
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
                                            <a href="{{ route('category.index', ['id' => $category->id]) }}">{{$category->name}}</a>
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
