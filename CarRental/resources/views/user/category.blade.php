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
                            <label for="input-val11" style="width: 82%"><span>Địa điểm</span>
                                <input type="text" id='inputAddressSearch1' placeholder="Thành phố, sân bay" required name="addressSearch">
                                <input type="hidden" name="hasCategory" @if(count($cars) > 0 ) value="{{$cars[0]->category->id}}" @else value="0" @endif>
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span style="width: 32%">Ngày bắt đầu</span>
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
    <div class="prosuct-wrap">
        <div class="container padd-lr0 xs-padd">
            <div class="row">
                <div class="col-sm-8">
                    <header class="wheel-header marg-lg-t25 marg-lg-b65">
                        @if(count($cars) > 0 )
                            <h3>Những xe hãng {{$cars[0]->category->name}} được đánh giá cao</h3>
                        @else
                            <h3>Chưa có xe nào đăng ký ứng dụng</h3>
                        @endif
                    </header>
                </div>
            </div>
        </div>
        <div class="container padd-lr0 xs-padd">
            <div class="product-list product-list2 wheel-bgt clearfix">
                <div class="row">
                    @if(count($cars) > 0)
                        @foreach($cars as $car)
                            <div class="col-lg-4  col-md-6">
                                <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                    <div class="product-table2">
                                        <div class="img-wrap img-wrap2 product-cell">
                                            <img src="images/i29.jpg" alt="img" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="product-table3  ">
                                        <div class="text-wrap text-wrap2 product-cell">
                                            <div class="title">{{$car->name}}</div>
                                            <div class="price-wrap product-cell">
                                                <span>{{$car->price}}</span><sup>K</sup>/Ngày
                                            </div>
                                        </div>
                                        <div class="img-wrap img-wrap3 product-cell">
                                            <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" alt="img" class="img-responsive" width="370" height="292.1">
                                        </div>
                                        <div class="text-wrap  text-wrap3 product-cell">
                                            <?php $featured = json_decode($car->featured,true); ?>
                                            <ul class="metadata metadata2">
                                                @foreach($featured as $feat)
                                                    <li class="item">{{$feat}}</li>
                                                @endforeach
                                            </ul>
                                            <div class="wheel-view-link">
                                                <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" target="_blank">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        @if(count($cars) > 0)
            @if(count($cars[0]->feedbacks) > 0)
                <div class="container padd-lr0 xs-padd">
                    <div class="row">
                        <div class="col-sm-12">
                            <header class="wheel-header marg-lg-t25 marg-lg-b65">
                                <h3 class="text-center">Những nhận xét của khách hàng</h3>
                            </header>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
    @if(count($cars) > 0)
        @if(count($cars[0]->feedbacks) > 0 )
            <div class="container-feedback">
            <div class="row">
                @if(count($cars) != null )
                    @foreach($cars as $car)
                        @foreach($car->feedbacks as $feedback)
                            @if($feedback->rate > 3)
                                <div class="col-lg-4  col-md-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/uploads/profile/'. $feedback->user->avatar) }}" class="avatar-user" alt="..." width="125" height="125">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" target="_blank"><h5 class="title-car-feedback">{{$car->name}}</h5></a>
                                                    </div>
                                                    <div class="wheel-quote-stars ratings">
                                                        @for($i = 0; $i <$feedback->rate; $i++)
                                                            <span class="fa fa-star checked"></span>
                                                        @endfor
                                                        @for($i =0; $i < 5 - $feedback->rate; $i++)
                                                            <span class="fa fa-star"></span>
                                                        @endfor
                                                    </div>
                                                    <p class="card-text">{{$feedback->comment}}</p>
                                                    <p class="card-text"><strong>{{$feedback->user->user_name}}.</strong> - <small class="text-muted">{{$feedback->created_at->diffForHumans()}}</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                @endif
            </div>
            <div>
                <button class="btn btn-dark">Show more</button>
            </div>
        </div>
        @endif
    @endif
    <div class="wheel-collection wheel-bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="tabs">
                        <div class="tabs-header">
                            <ul>
                                <li class="active">
                                    <a href="#">Lựa chọn hãng xe</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-content  marg-lg-b30">
                            <div class="tabs-item active ">
                                <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><img src="{{ asset('images/audi.jpg') }}" alt="Audi"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="wheel-collect"><img  src="{{ asset('images/honda.jpg') }}" alt="Honda"></div>
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
@endsection
