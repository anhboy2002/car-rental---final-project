@extends('user.layouts.frontend')
@section('content')
    <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                         alt="Third slide">
                </div>
{{--                @for($i = 0; $i < count($car->photos); $i++)--}}
{{--                    <div class="carousel-item {{ $i == 0 ? "active" : "" }}">--}}
{{--                        <img class="d-block w-100" src="{{ asset('storage/uploads/car_photos/'. $car->photos[$i]->feature) }}" alt="{{$car->name}}">--}}
{{--                    </div>--}}
{{--                @endfor--}}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container padd-lr0 xs-padd">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="listing-hedlines t-center">
                                <h5 class="title">{{$car->name}}</h5>
                                <div class="subtitle">{{$car->user->user_name}}</div>
                                <div class="wheel-quote-stars col-lg-12">
                                    @for($i = 0; $i <$car->rate; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                    @for($i =0; $i < 5 -$car->rate; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 padd-lr0 xs-padd sm-addpadd">
                            <div class="wheel-collection style-2">
                                <div class="tabs">
                                    <div class="tabs-header">
                                        <ul>
                                            <li class="active"><a href="#">Thông tin</a></li>
                                            <li><a href="#">Mô tả</a></li>
                                            <li><a href="#">({{ $countReview }}) Nhận xét</a></li>
                                        </ul>
                                    </div>
                                    <div class="tabs-content marg-lg-b30">
                                        <div class="tabs-item text-item active group-car-detail">
                                            <span class="lstitle-new">Tính năng</span>
                                            <?php $featured = json_decode($car->featured,true); ?>
                                            <div>
                                                <ul class="tabslist">
                                                    @foreach($featured as $feat)
                                                    <li class="item">{{$feat}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <span class="lstitle-new">GIẤY TỜ THUÊ XE (BẢN GỐC)</span>
                                            <div class="group-car-detail">
                                                <div class="ctn-desc-new">
                                                    <ul class="required">
                                                        <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/cmnd.png" alt="Mioto - Thuê xe tự lái"> CMND và GPLX (đối chiếu)</li>
                                                        <li> <img style="width: 20px; height: 20px; margin-right: 10px;" class="img-ico" src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/passport.png" alt="Mioto - Thuê xe tự lái"> Hộ Khẩu hoặc KT3 hoặc Passport (giữ lại)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="lstitle-new">TÀI SẢN THẾ CHẤP</span>
                                            <div class="group-car-detail">
                                                <div class="ctn-desc-new">
                                                    <ul class="required">
                                                        <li>15 triệu tiền mặt hoặc Xe máy (cà vẹt gốc) giá trị 15 triệu</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="lstitle-new">VỊ TRÍ</span>
                                            <div class="row marg-lg-t55 marg-sm-t0 marg-sm-b0 marg-lg-b75">
                                                <div class="col-md-12 marg-lg-b75 marg-sm-b0 padd-lr0">
                                                    <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $car->lat }}" data-lng="{{ $car->long }}" data-car="{{ $car }}" data-marker="images/marker.png"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-item text-item">
                                            <p>
                                                {{$car->description }}
                                            </p>
                                        </div>
                                        <div class="tabs-item text-item">
                                            <div class="wheel-comments-area wheel-bg1">
                                                <div class="wheel-comments-list review__wrapper">
                                                    <ul>
                                                        @foreach ($feedbacks as $feedback)
                                                        <li>
                                                            <div class="wheel-comment-body">
                                                                <div class="clearfix">
                                                                    <div class="comment-author">
                                                                        <img height="90px" width="90px" src="{{ asset('storage/uploads/profile/'. $feedback->user->avatar) }}" alt="">
                                                                        <a href="">{{$feedback->user->user_name}}</a>
                                                                        <div class="wheel-quote-stars ratings">
                                                                            @for($i = 0; $i <$feedback->rate; $i++)
                                                                                <span class="fa fa-star checked"></span>
                                                                            @endfor
                                                                            @for($i =0; $i < 5 - $feedback->rate; $i++)
                                                                                <span class="fa fa-star"></span>
                                                                            @endfor
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-metadata">
                                                                        <time datetime="2015-01-10T20:15:40+00:00"> {{$feedback->created_at->diffForHumans()}}</time>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>{{$feedback->comment}}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            @if (Auth::check())
                                            <section class="wheel-reply-form wheel-bg1 single__review_user">
                                                <header>
                                                    <h3>Thêm nhận xét</h3>
                                                </header>
                                                <form>
                                                    <label placeholder="Your Name *">Đánh giá</label>
                                                    <div class="wheel-quote-stars col-lg-12 rating rating-review">
                                                        <span class="fa fa-star" data-rating="1"></span>
                                                        <span class="fa fa-star" data-rating="2"></span>
                                                        <span class="fa fa-star" data-rating="3"></span>
                                                        <span class="fa fa-star" data-rating="4"></span>
                                                        <span class="fa fa-star" data-rating="5"></span>
                                                        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                                    </div>
                                                    <textarea placeholder="Your Message *" class="review-text"></textarea>
                                                    <button class="review"  id="{{$car->id}}">Nhật xét</button>
                                                </form>
                                            </section>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padd-lr0 z-bg-1">
        <div class="row marg-lg-t75 marg-xs-t0">
            <div class="col-md-12 padd-lr0 xs-padd">
                <div class="container padd-lr0 xs-padd">
                    <div class="row">
                        <div class="col-md-12 padd-lr0 xs-padd marg-lg-b90 marg-lg-t70 marg-sm-t30">
                            <div class="wheel-header text-center">
                                <h5>book now</h5>
                                <h3>Make a <span>reservation</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row marg-lg-b20">
                        <div class="col-md-12 padd-lr0 xs-padd marg-lg-b60 marg-sm-b10">
                            <div class="wheel-start-form wheel-start-form2    ">
                                <form action="{{action("CheckoutController@checkoutCar", [$car->id]) }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    <div  class="clearfix">
                                        <input type="hidden" id='inputLocationCar3' name="addressSearch">
                                        <div class="row">
                                            <div class="wheel-date" style="width: 34%">
                                                <span style="width: auto">Bắt đầu</span>
                                                <label class="fa fa-calendar" for="input-val22"  style="width: 60%">
                                                    <input  class="date" id='dateBegin3' type="date"  value="10/26/2019" name="dateBegin">
                                                </label>
                                            </div>
                                            <div class="wheel-date ">
                                                <span>Thời gian</span>
                                                <label for="input-val23" class="fa fa-clock-o">
                                                    <input class="timepicker" type="text" id='timeBegin3' value="18:00" name="timeBegin">
                                                </label>
                                            </div>
                                            <label for="input-val26" class="promo">
                                                <input type="text" id="input-val26" placeholder="Promo Code (Optional)">
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="wheel-date" style="width: 34%">
                                                <span style="width: auto">Kết thúc</span>
                                                <label class="fa fa-calendar" for="input-val24"  style="width: 60%">
                                                    <input  class="date" id='dateEnd3' type="date"  value="10/26/2019" name="dateEnd">
                                                </label>
                                            </div>
                                            <div class="wheel-date">
                                                <span>Thời gian</span>
                                                <label for="input-val25" class="fa fa-clock-o">
                                                    <input class="timepicker" type="text" id='timeEnd3' value="18:00" name="timeEnd">
                                                </label>
                                            </div>
                                            {{--      @if($car->user_id != auth()->id())--}}
                                            <label for="input-val27" class="promo promo2">
                                                <button class="wheel-btn" >Checkout</button>
                                            </label>
                                            {{--                                        @endif--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
