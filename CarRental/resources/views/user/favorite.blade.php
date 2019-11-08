@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>List your car</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> pages </a></li>
                            <li class="active">Xe yêu thích</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prosuct-wrap">
        <div class="container padd-lr0 xs-padd">
            <div class="product-list product-list2 wheel-bgt clearfix">
                <div class="row">
                    @foreach($favorites as $favorite)
                        <div class="col-lg-4  col-md-6 favorite{{$favorite->car->id}}">
                        <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                            <div class="product-table2">
                                <div class="img-wrap img-wrap2 product-cell">
                                    <img src="{{ asset('storage/uploads/car_photos/'. $favorite->car->photos[0]->feature) }}" alt="{{$favorite->car->name}}" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-table3  ">
                                <div class="text-wrap text-wrap2 product-cell">
                                    <div class="title">{{$favorite->car->name}}</div>
                                    <div class="price-wrap product-cell">
                                        <span>{{$favorite->car->price}}</span><sup>00</sup>/Day
                                    </div>
                                </div>
                                <div class="img-wrap img-wrap3 product-cell">
                                    <img src="{{ asset('storage/uploads/car_photos/'. $favorite->car->photos[0]->feature) }}" alt="{{$favorite->car->name}}" class="img-responsive" width="360" height="284">
                                </div>
                                <?php $featured = json_decode($favorite->car->featured,true); ?>
                                <div class="text-wrap  text-wrap3 product-cell">
                                    <ul class="metadata metadata2">
                                        @foreach($featured as $feat)
                                            <li>{{$feat}}</li>
                                        @endforeach
                                    </ul>
                                    <div class="wheel-view-link">
                                        <a href="{{ route('car.carDetail', [ 'id' => $favorite->car->id ]) }}">View Details</a>
                                        <a class="float-right btnRemoveFavorite" id="{{$favorite->car->id}}" >Bỏ thích</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
