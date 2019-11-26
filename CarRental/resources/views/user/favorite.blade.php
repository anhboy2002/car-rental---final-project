@extends('user.layouts.frontend')
@section('content')
    <div class="wheel-start3">
        <img src="https://demos.jeweltheme.com/wheel/images/bg7.jpg" alt="" class="wheel-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd-lr0">
                    <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                        <h3>Xe yêu thích</h3>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
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
                    @if(count($favorites) > 0)
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
                                    <div class="title badge badge-light">{{$favorite->car->name }}</div>
                                    <div class="price-wrap product-cell text-white">
                                        <span class="">{{ $favorite->car->price }}</span><sup class="text-white">K</sup>/Ngày
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
                                        <a href="{{ route('car.carDetail', [ 'id' => $favorite->car->id ]) }}">Xem chi tiết</a>
                                        <a class="float-right btnRemoveFavorite" id="{{$favorite->car->id}}" >Bỏ thích</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="alert alert-info" role="alert" style="width: 100%">
                            Bạn chưa yêu thích xe nào!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('user.includes.footer')
@endsection
