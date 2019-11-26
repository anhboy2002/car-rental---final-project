@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start">
        <img src="http://eskipaper.com/images/car-nature-wallpapers-1.jpg" alt="" class="wheel-img">
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-8 col-lg-pull-8  padd-lr0">
                    <div class="wheel-start-form" style="max-width: 790px">
                        <form action="{{ action("SearchController@searchCar") }}" method="GET" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <label for="input-val11" style="width: 82%; padding-top: 6px;"><span>Địa điểm</span>
                                <input type="text" id='inputAddressSearch1' placeholder="Thành phố, sân bay" name="addressSearch">
                                <input type="hidden" name="hasCategory" value="0">
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span style="width: 32%; ">Ngày bắt đầu</span>
                                    <label for="input-val13" class="fa fa-calendar" style="width: 60%">
                                        <input class="date" id='dateBegin1' type="date"  value="10/26/2019" name="dateBegin">
                                    </label>
                                </div>
                                <div class="wheel-date " style="width: 31%">
                                    <span style="width: 22%">Giờ</span>
                                    <label for="input-val14" class="fa fa-clock-o" style="width: 50%">
                                        <input class="timepicker" id='timeBegin1' type="text" value="18:00" name="timeBegin">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span  style="width: 32%">Ngày kết thúc</span>
                                    <label for="input-val15" class="fa fa-calendar" style="width: 60%">
                                        <input  class="" id='dateEnd1' type="date" value="10/26/2019" data-date-format="DD MMMM YYYY" name="dateEnd">
                                    </label>
                                </div>
                                <div class="wheel-date " style="width: 31%">
                                    <span  style="width: 22%">Giờ</span>
                                    <label for="input-val16" class="fa fa-clock-o"  style="width: 50%">
                                        <input class="timepicker" id='timeEnd1' type="text" value="18:00" name="timeEnd">
                                    </label>
                                </div>
                            </div>
                            <label for="input-val18" class="promo promo2">
                                <button class="wheel-btn" id="searchCarIndex" type="submit">Tìm kiếm</button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-push-4 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t50  marg-md-b0 marg-md-t0">
                        <h2>Way better than a rental car</h2>
                        <span>We Help you Rent Car</span>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                        <h5>Trang web online lớn nhất </h5>
                        <h3>về  Dịch vụ  <span>thuê xe</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-clients">
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-md-4 padd-r0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-bg3">
                        <div class="wheel-service-logo">
                            <img src="images/ico1.png" alt="">
                        </div>
                        <h5>Giá cả phải chăng</h5>
                        <p>Luôn có mức giá tốt nhất Bảo đảm giá tốt. Giá cả được xét duyệt một cách hợp lí, phù hợp với thị trường hiện tại</p>
                    </div>
                </div>
                <div class="col-md-4 padd-lr0 padd-md-lr15">
                    <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                        <div class="wheel-service-logo">
                            <img src="images/ico2.png" alt="">
                        </div>
                        <h5>Xếp hạng tốt nhất</h5>
                        <p>Mỗi chiếc xe được thuê ở đây đều được đánh giá cao. Từ mẫu xe tới chủ xe</p>
                    </div>
                </div>
                <div class="col-md-4 padd-l0 padd-md-lr15">
                    <div class="wheel-service-item  text-center wheel-bg5">
                        <div class="wheel-service-logo">
                            <img src="images/ico3.png" alt="">
                        </div>
                        <h5>Dịch vụ xuất xắc</h5>
                        <p>Dịch vụ thuê xe chuyên nghiệp, dễ dàng thuê xe, dễ dàng trải nghiệm 1 cách tốt nhất </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="wheel-service-img">
                    <img src="https://demos.jeweltheme.com/wheel/images/i1.png" alt="" class="wheel-img">
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-collection wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wheel-header text-center marg-lg-t140 marg-lg-b65  marg-md-t50 ">
                        <h5>Chúng tôi có  </h5>
                        <h3>nhiều <span>hãng xe</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="tabs">
                        <div class="tabs-header">
                            <ul>
                                <li class="active"><a href="#">Lựa chọn hãng xe</a></li>
                            </ul>
                        </div>
                        <div class="tabs-content  marg-lg-b30">
                            <div class="tabs-item active ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><a href="{{route('category.index', ['id' => '1'])}}"><img src="{{ asset('images/audi.jpg') }}" alt="Audi"></a></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><a href="{{route('category.index', ['id' => '2'])}}"><img  src="{{ asset('images/honda.jpg') }}" alt="Honda"></a></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><img src="{{ asset('images/mitsubisi.jpg') }}" alt="mitsubisi"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><img src="{{ asset('images/mercedes.jpg') }}" alt="mercedes"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left fa fa-angle-left"></div>
                                    <div class="swiper-arrow-right fa fa-angle-right"></div>
                                    <div class="pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container padd-lr0">
        <div class="row">
            <div class="col-md-6 ">
                <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                    <img src="https://d84g7x7n0gri.cloudfront.net/img/home/carculator.2d537bba.jpg" alt="" class="wheel-img">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                    <div class="wheel-header">
                        <h3>Bạn muốn cho thuê xe<span> tự lái</span></h3>
                    </div>
                    <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                    <p>Make a dent in your monthly car payments — on average, Turo hosts can cover their payments by sharing their cars just nine days per month.

                        As a host, you’re covered by our CA$2 million insurance policy and we’ll be here to guide you every step of the way. Or bring your own commercial rental insurance and take a bigger piece of the pie.* </p>
                    @if (Auth::check())
                        <a href="{{route('carRegister')}}" class="wheel-btn">Đăng ký xe</a>
                    @else
                        <a class="wheel-btn"  href="#loginModal" data-toggle="modal" data-target="#loginModal">Đăng ký xe</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-quote text-center">
        <img src="images/bg3.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                        <div class="swiper-wrapper">
                            @foreach($feedbacks as $feedback)
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="{{ asset('storage/uploads/profile/'. $feedback->user->avatar) }}" alt="" width="90px" height="90px"></div>
                                        <p>{{$feedback->comment}}</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>{{$feedback->user->user_name}}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination"></div>
                    </div>
                    <div class="swiper-outer-left fa fa-angle-left"></div>
                    <div class="swiper-outer-right fa fa-angle-right"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wheel-quote-partners">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <a href=""><img src="images/p3.png" alt=""></a>
                        <a href=""><img src="images/p4.png" alt=""></a>
                        <a href=""><img src="images/p5.png" alt=""></a>
                        <a href=""><img src="images/p6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-subscribe wheel-bg2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-header">

                    </div>
                </div>
                <div class="col-md-6 padd-lr0">

                </div>
            </div>
        </div>
    </div>
    @include('user.includes.footer')
@endsection

