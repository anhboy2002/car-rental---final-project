@extends('admin.layout.master')
@section('content2')
<div class="content-wrapper">
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Danh sách xe đăng ký</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="admin"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
                <li class="active">Trang Quản Lý</li>
            </ul>
        </div>
    </div>
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Danh sách các xe đăng ký <span class="badge badge-primary">{{$cars->count()}}</span></h5>
                    </div>

                    <div class="panel-body">
                        Các <code>xe đăng ký</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
                    </div>
                    @if(session('thongbao'))
                        <div class="alert bg-success">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Well done!</span>  {{session('thongbao')}}
                        </div>
                    @endif
                    <div class="m-5 col-md-4">
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                    <table class="table datatable-show-all">
                        <thead>
                        <tr class="bg-blue">
                            <th>ID</th>

                            <th>Tên</th>
                            <th>Vị trí</th>
                            <th>Giá</th>
                            <th>Chủ xe</th>
                            <th>Chuyến</th>
                            <th>Trạng thái</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($cars as $car)
                            <tr>
                                <td>{{$car->id}}</td>

                                <td><a  target="_blank">{{$car->name}}</a></td>
                                <td>{{$car->location_name}}</td>

                                <td>{{$car->price}}</td>
                                <td><a href="#viewUser{{$car->user->id}}" data-toggle="modal" data-target="#viewUser{{$car->user->id}}">{{$car->user->user_name}}</a></td>
                                <td>{{$car->total_trip}}</td>
                                <td>
                                    @if($car->status == 1)
                                        <span class="label label-success">Đã kiểm duyệt</span>
                                    @elseif($car->status == 0)
                                        <span class="label label-danger">Chờ Phê Duyệt</span>
                                    @else
                                        <span class="label label-danger">Bị từ chối</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a  href="#viewCar{{$car->id}}" data-toggle="modal" data-target="#viewCar{{$car->id}}"><i class="icon-search4"></i> Xem chi tiêt</a></li>
                                                @if($car->status == 1)
                                                    <li><a href="{{route("admin.car.reject", ['id'=> $car->id])}}"><i class="icon-file-pdf"></i> Từ chối xe</a></li>
                                                @elseif($car->status == 0)
                                                    <li><a href="{{route("admin.car.accept", ['id'=> $car->id])}}"><i class="icon-file-pdf"></i> Kiểm duyệt</a></li>
                                                @else($car->status == -1)
                                                    <li><a href="{{route("admin.car.accept", ['id'=> $car->id])}}"><i class="icon-file-pdf"></i> Chấp nhận</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            {{--    Modal--}}
                            <div class="modal fade" id="viewCar{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center>
                                                <img  src="{{ asset('storage/uploads/car_photos/'. $car->photos[0]->feature) }}" alt="{{$car->name}}" width="300" height="200"></a>
                                                <h3 class="media-heading">{{$car->name}} <small>{{$car->address}}</small></h3>
                                                <span><strong>Thông tin: </strong></span>
                                                <span class="label label-warning">{{$car->trips->count()}} chuyến</span>
                                                <span class="label label-info">{{$car->price}} K</span>
                                                <span class="label label-success">{{$car->created_at->toFormattedDateString()}}</span>
                                            </center>
                                            <hr>
                                            <center>
                                                <p class="text-left"><strong>Bio: </strong><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                                <br>
                                            </center>
                                                <div class="marg-lg-b75 marg-sm-b0 padd-lr0">
                                                    <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $car->lat }}" data-lng="{{ $car->long }}" data-car="{{ $car }}" data-marker="images/marker.png"></div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <center>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--    Modal user--}}
                            <div class="modal fade" id="viewUser{{$car->user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center>
                                                <img  src="{{ asset('storage/uploads/profile/'. $car->user->avatar) }}" name="{{$car->user->user_name}}" width="140" height="140" border="0" class="img-circle"></a>
                                                <h3 class="media-heading">{{$car->user->user_name}} <small>{{$car->user->address}}</small></h3>
                                                <span><strong>Thông tin: </strong></span>
                                                <span class="label label-warning">{{$car->user->trips->count()}} chuyến</span>
                                                <span class="label label-info">{{$car->user->cars->count()}} xe</span>
                                                <span class="label label-success">{{$car->user->created_at->toFormattedDateString()}}</span>
                                            </center>
                                            <hr>
                                            <center>
                                                <p class="text-left"><strong>Bio: </strong><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                                <br>
                                            </center>
                                        </div>
                                        <div class="modal-footer">
                                            <center>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection
