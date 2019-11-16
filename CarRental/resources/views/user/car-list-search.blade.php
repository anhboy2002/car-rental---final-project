@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Tìm kiếm - Danh sách</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Tìm kiếm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-search">
        <div class="container">
            <div class="row">
                <div class="wheel-start-form col-lg-8" style="max-width: 790px">
                    <div id="dataAllCar" style="display: none;" data-car="{{ $cars }}" data-photos="{{ $photos }}"></div>
                        <form action="{{ action("SearchController@searchCar") }}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field()}}
                            <label for="input-val11"style="width: 82%"><span>Địa điểm</span>
                                <input type="text" id='inputAddressSearch1' placeholder="Thành phố, sân bay" required value="{{$search['location']}}" name="addressSearch">
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span style="width: 32%">Ngày bắt đầu</span>
                                    <label for="input-val13" class="fa fa-calendar" style="width: 60%">
                                        <input class="date" id='dateBegin1' type="date"  value="{{$search['dateBegin']}}" name="dateBegin">
                                    </label>
                                </div>
                                <div class="wheel-date" style="width: 31%">
                                    <span  style="width: 22%">Giờ</span>
                                    <label for="input-val14" class="fa fa-clock-o" style="width: 50%">
                                        <input class="timepicker" id='timeBegin1' type="text" value="{{$search['timeBegin']}}" name="timeBegin">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span style="width: 32%">Ngày kết thúc</span>
                                    <label for="input-val15" class="fa fa-calendar" style="width: 60%">
                                        <input class="date" id='dateEnd1' type="date"  value="{{$search['dateEnd']}}" name="dateEnd">
                                    </label>
                                </div>
                                <div class="wheel-date" style="width: 31%">
                                    <span  style="width: 22%">Giờ</span>
                                    <label for="input-val16" class="fa fa-clock-o" style="width: 50%">
                                        <input class="timepicker" id='timeEnd1' type="text" value="{{$search['timeBegin']}}" name="timeEnd">
                                    </label>
                                </div>
                            </div>
                            <label for="input-val18" class="promo promo2">
                                <button class="btn wheel-btn" id="searchCarIndex" type="submit">Search</button>
                            </label>
                        </form>
                </div>
                <div class="col-md-4 col-sm-4 col-md-4 mt-5">
                    <h5 class="header--6">Giá xe</h5>
                    <div class="slidecontainer">
                        <input type="range" min="100" max="3000"  value="3000" class="slider" id="myRange" step="100">
                        <span class="header--5">Dưới <strong id="demo"></strong> K VNĐ</span>
                    </div>
                    <div class="select select-1 mt-2">
                        <span class="">Loại xe</span>
                        <ul class="list choose-num-seat-car">
                            <li value="0">Tất cả</li>
                            <li value="4">4 chỗ</li>
                            <li value="7">7 chỗ</li>
                        </ul>
                    </div>
                    <div class="select select-2">
                        <span class="">Hãng xe</span>
                        <ul class="list choose-brand-car">
                            <li value="0">Tất cả</li>
                            @foreach($categories as $category)
                                <li value={{ $category->id }}>{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-search row m-3">
            <div class="product-list product-list2 wheel-bgt clearfix searchResultsGrid col-lg-7">
                <div class="row list-car-search">
                    @foreach($cars as $car)
                    <div class="col-lg-6  col-md-10 car{{ $car->id }}">
                        <div class="product-table wheel-bg1 marg-lg-b35">
                            <div class="text-wrap text-wrap2 product-cell">
                                <div class="title">{{ $car->name }}</div>
                                <div class="price-wrap product-cell">
                                    <span>{{ $car->price }}</span><sup>K</sup>/Ngày
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <a href="{{ route('car.carDetail', [ 'id' => $car->id ]) }}" target="_blank"><img width="400" height="300" src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}"></a>
                            </div>
                            <div class="row m-2">
                                <div class="wheel-quote-stars col-lg-3">
                                    @for($i = 0; $i <$car->rate; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                    @for($i =0; $i < 5 -$car->rate; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                </div>
                                <div class="col-lg-5 mt-1"><span class="vehicleRatingAndTrips-trips">{{$car->total_trip}} trips</span></div>
                                <div class="col-lg-4">
                                    <button class="btn btn-success btnFavorite btnFavorite{{$car->id}}" id="{{$car->id}}">Yêu thích</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="searchResultsMap col-lg-5" id="map">
            </div>
        </div>
    </div>
@endsection
