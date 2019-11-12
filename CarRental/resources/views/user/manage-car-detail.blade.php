@extends('user.layouts.frontend')
@section('content')
    <div class="header-background-manage">
        <div class="container padd-lr0">
            <div class="row"><div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t100  marg-md-b0 marg-md-t0">
                        <span class="lstitle">DÒNG XE</span>
                        <h2>{{$car->name}}</h2>
                        <div class="star-profile-car">
                            @for($i = 0; $i <$car->rate; $i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            @for($i =0; $i < 5 -$car->rate; $i++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>
                        <button class="btn btn-secondary mt-5 " id="btnDisableCar" style="width: 25%" data-toggle="modal" data-target="#modalConfirmHideCar" >{{ ($car->status == 3) ? "Đã tạm ngưng" : "Ẩn xe" }}</button>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                        <img src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" width="384px" height="288px">
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="container-manage settings">
                <div class="row collapse show no-gutters d-flex h-100 position-relative">
                    <div class="col-3 p-0 h-100 w-sidebar navbar-collapse collapse d-none d-md-flex sidebar">
                        <!-- fixed sidebar -->
                        <div class="navbar-dark text-white h-100 align-self-start w-sidebar">
                            <ul class="nav flex-column flex-nowrap menu-list-manage">
                                <li class="nav-item">
                                    <a class="nav-link heading">  <p class="title-list">THÔNG TIN CHUNG</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="image-tab" data-toggle="tab" href="#changeImage" role="tab" aria-controls="image" aria-selected="false">Hình ảnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Quản lí chuyến</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link heading text-dark"> <p class="title-list">CHO THUÊ XE TỰ LÁI</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#">Giao xe tận nơi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="#">Thủ tục cho thuê</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-manage">
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show active">
                            <form action="{{action('CarController@carSettingUpdate', ['id' => $car->id])}}" method="POST" enctype="multipart/form-data" role="form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Biển số:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{$car->plate_number}}" type="text"  readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Địa chỉ xe:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{$car->location_name}}" type="text" id="inputCarLocation" name="carLocation">
                                        <input type="hidden" id="inputLatCar" name="lat">
                                        <input type="hidden" id="inputLongCar" name="lng">
                                        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">
                                            Location
                                        </button>
                                    </div>
                                    <div class="row marg-lg-t55 marg-sm-t0 marg-sm-b0 marg-lg-b5">
                                        <div class="col-md-12 marg-lg-b75 marg-sm-b0 padd-lr0">
                                            <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{$car->lat}}" data-lng="{{$car->long}}" data-car="{{$car}}" data-marker="images/marker.png"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Thông tin cơ bản:</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="col-lg-3" >Số ghê:</label>
                                            <input class="form-control" value="{{$car->num_seat}}" type="text" readonly>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-lg-4">Chuyển động:</label>
                                            <input class="form-control" value="{{$car->movement}}" type="text" readonly/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="col-lg-5" >Loại nhiên liệu:</label>
                                            <input class="form-control" value="{{$car->fuel_type}}" type="text" readonly>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-lg-4">Đơn giá thuê:</label>
                                            <input class="form-control" value="{{$car->price}} K" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Mô tả:</label>
                                    <div class="col-lg-12">
                                        <textarea class="textarea-describe" name="description" placeholder="{{$car->description}}" type="text"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Tính năng:</label>
                                        <div class="row form-group">
                                            <?php $featured = json_decode($car->featured,true); ?>
                                            <div class="col-lg-3">
                                                <input type="checkbox" name="featured[]" value="Cửa sổ trời"
                                                @foreach($featured as $feat)
                                                    @if($feat == "Cửa sổ trời")
                                                        checked
                                                    @endif
                                                @endforeach> Cửa sổ trời<br>
                                                <input type="checkbox" name="featured[]" value="GPS"
                                                @foreach($featured as $feat)
                                                    @if($feat == "GPS")
                                                          checked
                                                    @endif
                                                @endforeach>GPS<br>
                                                <input type="checkbox" name="featured[]" value="Ghế trẻ em"
                                                @foreach($featured as $feat)
                                                    @if($feat == "Ghế trẻ em")
                                                        checked
                                                    @endif
                                                @endforeach> Ghế trẻ em<br>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="checkbox" name="featured[]" value="Camera sau"
                                                @foreach($featured as $feat)
                                                    @if($feat == "Camera sau")
                                                       checked
                                                    @endif
                                                @endforeach> Camera sau<br>
                                                <input type="checkbox" name="featured[]" value="Bluetooth"
                                                @foreach($featured as $feat)
                                                    @if($feat == "Bluetooth")
                                                       checked
                                                    @endif
                                                @endforeach> Bluetooth<br>
                                                <input type="checkbox" name="featured[]" value="USB port"
                                                @foreach($featured as $feat)
                                                    @if($feat == "USB port")
                                                       checked
                                                    @endif
                                                @endforeach> USB port<br>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="checkbox" name="featured[]" value="Map"
                                                @foreach($featured as $feat)
                                                    @if($feat == "Map")
                                                       checked
                                                    @endif
                                                @endforeach> Map<br>
                                            </div>
                                        </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Lưu thay đổi" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="changeImage" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade"  >
                            <form action="{{action('CarController@updateImageCar', ['id' => $car->id])}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="file-loading">
                                    <input id="file-5" type="file" class="file " name="photoCar[]" id="profilePhoto"  data-preview-file-type="any" data-upload-url="#" multiple onchange="this.form.submit()">
                                </div>
                            </form>
                        </div>
                        <div id="manage" role="tabpanel" aria-labelledby="manage-tab" class="tab-pane fade"  >
                            <div class="row">
                                <section class="content">
                                    <h1>Quản lí chuyến</h1>
                                    <div class="col-md-12 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success btn-filter" data-target="success">Hoàn thành</button>
                                                        <button type="button" class="btn btn-primary btn-filter" data-target="process">Tiến hành</button>
                                                        <button type="button" class="btn btn-warning btn-filter" data-target="pending">Chờ duyệt</button>
                                                        <button type="button" class="btn btn-dark btn-filter" data-target="later">Bị trễ</button>
                                                        <button type="button" class="btn btn-danger btn-filter" data-target="reject">Bị hủy</button>
                                                        <button type="button" class="btn btn-secondary btn-filter" data-target="all">Tất cả</button>
                                                    </div>
                                                </div>
                                                <div class="table-container">
                                                    <table class="table table-filter">
                                                        <tbody>
                                                        @foreach($trips as $key => $trip)
                                                            @switch($trip->status_ck)
                                                                @case(0)
                                                                <tr data-status="reject">
                                                                    <td style="width: 5%">{{$key}}</td>
                                                                    <td>
                                                                        <div class="media">
                                                                            <a href="{{ route('trip.detail', [ 'id' => $trip->id ]) }}" class="pull-left">
                                                                                <img src="{{ asset('storage/uploads/profile/'. $trip->user2->avatar) }}" class="media-photo" width="35px" height="35px">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="media-meta pull-right">{{ $trip->created_at->toFormattedDateString() }}</span>
                                                                                <h4 class="title ml-2">
                                                                                    {{ $trip->user2->user_name }}
                                                                                    <span class="pull-right text-danger">(Bị hủy)</span>
                                                                                </h4>
        {{--                                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>--}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <h4 class="title">
                                                                                    <span class="pull-right "> {{ $trip->price }} K</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @break
                                                                @case(1)
                                                                <tr data-status="pending">
                                                                    <td style="width: 5%">{{$key}}</td>
                                                                    <td>
                                                                        <div class="media">
                                                                            <a href="{{ route('trip.detail', [ 'id' => $trip->id ]) }}" class="pull-left">
                                                                                <img src="{{ asset('storage/uploads/profile/'. $trip->user2->avatar) }}" class="media-photo" width="35px" height="35px">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="media-meta pull-right">{{ $trip->created_at->toFormattedDateString() }}</span>
                                                                                <h4 class="title ml-2">
                                                                                    {{ $trip->user2->user_name }}
                                                                                    <span class="pull-right text-warning">(Đang chờ duyệt)</span>
                                                                                </h4>
                                                                                {{--  <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>--}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <h4 class="title">
                                                                                    <span class="pull-right "> {{ $trip->price }} K</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @break
                                                                @case(2)
                                                                <tr data-status="later">
                                                                    <td style="width: 5%">{{$key}}</td>
                                                                    <td>
                                                                        <div class="media">
                                                                            <a href="{{ route('trip.detail', [ 'id' => $trip->id ]) }}" class="pull-left">
                                                                                <img src="{{ asset('storage/uploads/profile/'. $trip->user2->avatar) }}" class="media-photo" width="35px" height="35px">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="media-meta pull-right">{{ $trip->created_at->toFormattedDateString() }}</span>
                                                                                <h4 class="title ml-2">
                                                                                    {{ $trip->user2->user_name }}
                                                                                    <span class="pull-right text-dark">(Bị hết hạn)</span>
                                                                                </h4>
                                                                                {{--  <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>--}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <h4 class="title">
                                                                                    <span class="pull-right "> {{ $trip->price }} K</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @break
                                                                @case(3)
                                                                <tr data-status="process">
                                                                    <td style="width: 5%">{{$key}}</td>
                                                                    <td>
                                                                        <div class="media">
                                                                            <a href="{{ route('trip.detail', [ 'id' => $trip->id ]) }}" class="pull-left">
                                                                                <img src="{{ asset('storage/uploads/profile/'. $trip->user2->avatar) }}" class="media-photo" width="35px" height="35px">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="media-meta pull-right">{{ $trip->created_at->toFormattedDateString() }}</span>
                                                                                <h4 class="title ml-2">
                                                                                    {{ $trip->user2->user_name }}
                                                                                    <span class="pull-right later">(Tiến hành)</span>
                                                                                </h4>
{{--                                                                                <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>--}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <h4 class="title">
                                                                                    <span class="pull-right "> {{ $trip->price }} K</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @break
                                                                @case(4)
                                                                <tr data-status="success">
                                                                    <td style="width: 5%">{{$key}}</td>
                                                                    <td>
                                                                        <div class="media">
                                                                            <a href="{{ route('trip.detail', [ 'id' => $trip->id ]) }}" class="pull-left">
                                                                                <img src="{{ asset('storage/uploads/profile/'. $trip->user2->avatar) }}" class="media-photo" width="35px" height="35px">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="media-meta pull-right">{{ $trip->created_at->toFormattedDateString() }}</span>
                                                                                <h4 class="title ml-2">
                                                                                    {{ $trip->user2->user_name }}
                                                                                    <span class="pull-right text-success">(Hoàn thành)</span>
                                                                                </h4>
                                                                                {{-- <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>--}}
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <h4 class="title">
                                                                                    <span class="pull-right "> {{ $trip->price }} K</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @break
                                                                @endswitch
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
{{--    Modal edit location--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 modal_body_content">
                            <p id="carLocationName"> Location :</p>
                            <div id="current">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 modal_body_map">
                            <div class="location-map" id="location-map">
                                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 modal_body_end">
                            <button class="btn btn-info" id="saveCarLocation">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    modal confirm--}}
    <div class="modal fade" id="modalConfirmHideCar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmHideCar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        @if($car->status == 2)
                            Xe của bạn đã bị từ chối. Bạn không thể thực hiện chức năng này.
                        @else
                            <span>
                            Xe của bạn sẽ chuyển sang trạng thái tạm ngưng hoạt động và không được tìm thấy trên hệ thống.
                            <strong class="text-danger">Lưu ý: Toàn bộ các yêu cầu đặt xe này (nếu có) sẽ được huỷ.</strong>
                        </span>
                        @endif

                    </p>
                </div>
                <div class="modal-footer">
                    @if($car->status == 2)
                        <a class="btn btn-primary" data-dismiss="modal" aria-label="Close">Hủy</a>
                    @else
                        <a class="btn btn-primary btnHideCar" role="button" id="{{$car->id}}">Xác nhận</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    {!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
<script type="text/javascript">
    $(document).ready(function () {

        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });

    });
</script>
@endsection
