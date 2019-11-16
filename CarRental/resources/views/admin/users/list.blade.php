@extends('admin.layout.master')
@section('content2')
<div class="content-wrapper">
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Danh sách thành viên</h4>
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
                        <h5 class="panel-title">Danh sách tài khoản <span class="badge badge-primary">{{$users->count()}}</span></h5>
                    </div>

                    <div class="panel-body">
                        Các <code>Tài khoản</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
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
                            <th>Họ Tên</th>
                            <th>Chuyến</th>
                            <th>Ngày tham gia</th>
                            <th>Thông báo</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>

                                <td>{{$user->user_name}}</td>
                                <td>{{$user->total_trip}}</td>
                                <td>
                                    {{$user->created_at->toFormattedDateString()}}
                                </td>
                                <th>
                                    @if($user->status == 1)
                                        <span class="badge-success badge">Không có</span>
                                    @else($user->status == -1)
                                        <span class="badge-danger badge">Bị khóa</span>
                                    @endif
                                    @foreach($user->cars as $car)
                                        @if($car->status == 0)
                                                <span class="badge-warning badge">Có xe cần duyệt</span>
                                            @break
                                        @endif
                                    @endforeach
                                </th>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#viewUser{{$user->id}}" data-toggle="modal" data-target="#viewUser{{$user->id}}"><i class="icon-zoomin3"></i> Xem chi tiêt</a></li>
                                                <li><a href="{{route('admin.user.delete', ['id' => $user->id])}}"><i class="icon-file-excel"></i> Xóa</a></li>
                                                @if($user->status == 1)
                                                    <li><a href="{{route("admin.car.reject", ['id'=> $user->id])}}"><i class="icon-file-pdf"></i>Khóa nguời dùng</a></li>
                                                @else($user->status == -1)
                                                    <li><a href="{{route("admin.car.accept", ['id'=> $user->id])}}"><i class="icon-file-pdf"></i>Mở khóa người dùng</a></li>
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            {{--    Modal--}}
                            <div class="modal fade" id="viewUser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <center>
                                                <img  src="{{ asset('storage/uploads/profile/'. $user->avatar) }}" name="{{$user->user_name}}" width="140" height="140" border="0" class="img-circle"></a>
                                                <h3 class="media-heading">{{$user->user_name}} <small>{{$user->address}}</small></h3>
                                                <span><strong>Thông tin: </strong></span>
                                                <span class="label label-warning">{{$user->trips->count()}} chuyến</span>
                                                <span class="label label-info">{{$user->cars->count()}} xe</span>
                                                <span class="label label-success">{{$user->created_at->toFormattedDateString()}}</span>
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
