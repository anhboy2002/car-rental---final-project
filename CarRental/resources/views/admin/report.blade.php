@extends('admin.layout.master')
@section('content2')
<div class="content-wrapper">
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Danh sách các báo cáo</h4>
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
                        <h5 class="panel-title">Danh sách các báo cáo <span class="badge badge-primary">{{$reports->count()}}</span></h5>
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

                            <th>Tên xe</th>
                            <th>Nội dung</th>
                            <th>Ngày</th>
                            <th>Chủ xe</th>
                            <th>Trạng thái</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @if(count($reports) > 0)
                            @foreach($reports as $report)
                            <tr>
                                <td>{{$report->id}}</td>

                                <td><a href="{{ route('car.carDetail', [ 'id' => $report->car->id ]) }}" target="_blank">{{$report->car->name}}</a></td>
                                <td>{{$report->content}}</td>

{{--                                <td>{{$report->created_at->toFormattedDateString()}}</td>--}}
                                <td>4/11/2019</td>
                                <td><a href="#viewUser{{$report->car->user->id}}" data-toggle="modal" data-target="#viewUser{{$report->car->user->id}}">{{$report->car->user->user_name}}</a></td>
                                <td>
                                    @if($report->status == 0)
                                        <span class="label label-danger">Chờ xử lí</span>
                                    @else
                                        <span class="label label-success">Đã xử lí</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a  href="#viewCar{{$report->car->id}}" data-toggle="modal" data-target="#viewCar{{$report->car->id}}"><i class="icon-search4"></i> Xem chi tiêt</a></li>
                                                <li><a href=""><i class="icon-file-pdf"></i> Hủy chuyến</a></li>
                                                @if($report->car->user->status == 1)
                                                    <li><a href="{{route("admin.user.block", ['id'=>$report->car->user->id])}}"><i class="icon-file-pdf"></i>Khóa nguời dùng</a></li>
                                                @else($report->car->user->status == -1)
                                                    <li><a href="{{route("admin.user.accept", ['id'=> $report->car->user->id])}}"><i class="icon-file-pdf"></i>Mở khóa người dùng</a></li>
                                                @endif
                                                @if($report->car->status == 1)
                                                    <li><a href="{{route("admin.car.reject", ['id'=>$report->car->id])}}"><i class="icon-file-pdf"></i>Khóa xe</a></li>
                                                @else($report->car->status  == -1)
                                                    <li><a href="{{route("admin.car.accept", ['id'=> $report->user->id])}}"><i class="icon-file-pdf"></i>Mở Khóa xe</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            {{--    Modal--}}
                            <div class="modal fade" id="viewCar{{$report->car->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center>
                                                <img  src="{{ asset('storage/uploads/car_photos/'. $report->car->photos[0]->feature) }}" alt="{{$report->car->name}}" width="300" height="200"></a>
                                                <h3 class="media-heading">{{$report->car->name}} <small>{{$report->car->address}}</small></h3>
                                                <span><strong>Thông tin: </strong></span>
                                                <span class="label label-warning">{{($report->car->trips == null) ? 0 : $report->car->trips->count()}} chuyến</span>
                                                <span class="label label-info">{{$report->car->price}} K</span>
                                                <span class="label label-success">{{$report->car->created_at->toFormattedDateString()}}</span>
                                            </center>
                                            <hr>
                                            <center>
                                                <p class="text-left"><strong>Bio: </strong><br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                                <br>
                                            </center>
                                                <div class="marg-lg-b75 marg-sm-b0 padd-lr0">
                                                    <div class="wheel-map style-1" id = "mapSingleCar" data-lat="{{ $report->car->lat }}" data-lng="{{ $report->car->long }}" data-car="{{ $report->car }}" data-marker="images/marker.png"></div>
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
                            <div class="modal fade" id="viewUser{{$report->car->user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center>
                                                <img  src="{{ asset('storage/uploads/profile/'. $report->car->user->avatar) }}" name="{{$report->car->user->user_name}}" width="140" height="140" border="0" class="img-circle"></a>
                                                <h3 class="media-heading">{{$report->car->user->user_name}} <small>{{$report->car->user->address}}</small></h3>
                                                <span><strong>Thông tin: </strong></span>
                                                <span class="label label-warning">{{$report->car->user->trips->count()}} chuyến</span>
                                                <span class="label label-info">{{$report->car->user->cars->count()}} xe</span>
                                                <span class="label label-success">{{$report->car->user->created_at->toFormattedDateString()}}</span>
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
                        @endif
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
