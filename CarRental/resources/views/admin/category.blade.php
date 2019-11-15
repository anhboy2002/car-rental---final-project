@extends('admin.layout.master')
@section('content2')

<div class="content-wrapper">
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Danh sách báo cáo từ người dùng</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="admin"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
                <li class="active">Danh sách báo cáo từ người dùng</li>
            </ul>
        </div>
    </div>
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh sách báo cáo từ người dùng <span class="badge badge-primary">5</span></h5>
						</div>

						<div class="panel-body">
							Các <code>Báo cáo</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
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
									<th>STT</th>
									<th>Hãng xe</th>
									<th>Mẫu xe</th>
                                    <th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody id="myTable">
								@foreach($categories as $key => $category)
                                    @if($category->id_parent > 0)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td><a>{{$category->parent->name}}</a></td>
                                            <td>{{$category->name}}</td>
                                            <td class="text-center">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a ><i class="icon-database-edit2"></i> Sửa Hãng xe</a></li>
                                                            <li><a ><i class="icon-database-edit2"></i> Sửa Mẫu xe</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endif
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
