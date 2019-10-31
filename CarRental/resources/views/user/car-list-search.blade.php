@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Listing - List View</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->
    <div class="body-search">
        <div class="container">
            <div class="row">
                <div class="wheel-start-form col-lg-6">
                    <div id="dataAllCar" style="display: none;" data-car="{{ $cars }}"></div>
                    <form>
                        <label for="input-val11"><span>Where</span>
                            <input type="text" id='inputLocationCar' placeholder="City, Airport or Address" required value="{{$search['location']}}">
                        </label>
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>From</span>
                                <label for="input-val13" class="fa fa-calendar">
                                    <input class="date" id='dateBegin11' type="date"  value="{{$search['dateBegin']}}" name="dateBegin">
                                </label>
                            </div>
                            <div class="wheel-date ">
                                <span>Time</span>
                                <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val14' type="text" value="{{$search['timeBegin']}}" name="timeBegin">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Until</span>
                                <label for="input-val15" class="fa fa-calendar">
                                    <input class="date" id='dateEnd1' type="date"  value="{{$search['dateEnd']}}" name="dateEnd">
                                </label>
                            </div>
                            <div class="wheel-date">
                                <span>Time</span>
                                <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val16' type="text" value="{{$search['timeBegin']}}" name="timeEnd">
                                </label>
                            </div>
                        </div>
                        <label for="input-val18" class="promo promo2">
                            <button class="btn wheel-btn" id="input-val18">Search</button>
                        </label>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="select select-1">
                        <span class="">All category</span>
                        <ul class="list">
                            <li>All category</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="select select-3">
                        <span class="">Any price</span>
                        <ul class="list">
                            <li>Any price</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="select select-2">
                        <span class="">All brands</span>
                        <ul class="list">
                            <li>All brands</li>
                            <li>Item1</li>
                            <li>Item2</li>
                            <li>Item3</li>
                            <li>Item4</li>
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
                                    <span>${{ $car->price }}</span><sup>00</sup>/Day
                                </div>
                            </div>
                            <div class="img-wrap img-wrap3 product-cell">
                                <a href="{{ route('carDetail', [ 'id' => $car->id ]) }}"><img width="400" height="300" src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}"></a>
                            </div>
                            <div class="row m-2">
                                <div class="wheel-quote-stars col-lg-3">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="col-lg-6"><h4 >.{{ $car->total_trip }} trips</h4></div>
                                <div class="col-lg-3">
                                    <button class="btn btn-success pull-right btnFavorite" id="{{$car->id}}">Yêu thích</button>
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
