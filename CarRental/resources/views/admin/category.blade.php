@extends('admin.layout.master')
@section('content2')
<div class="content-wrapper">
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">Home</span> - Danh sách hãng xe</h4>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="admin"><i class="icon-home2 position-left"></i> Trang chủ</a></li>
                <li class="active">Danh sách hãng xe</li>
            </ul>
        </div>
    </div>
	<div class="content">
		<div class="row">
			<div class="col-12">.
				<div class="panel panel-flat">
                        <ul id="tabsJustified" class="nav nav-tabs">
                            <li class="nav-item active"><a data-target="#list" href="#list" role="tab" data-toggle="tab"  aria-controls="list" class="nav-link small text-uppercase active">Danh sách hãng xe</a></li>
                            <li class="nav-item"><a data-target="#create" href="#create"  role="tab" data-toggle="tab"  aria-controls="create" class="nav-link small text-uppercase ">Thêm mới hãng xe</a></li>
                        </ul>
                    <div class="trip-container tab-content" id="myTabContent">
                        <div class="has-trip tab-pane fade in active"  id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="panel-body">
                                Các <code>Hãng xe</code> được liệt kê tại đây. <strong>Dữ liệu đang cập nhật.</strong>
                            </div>
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
                                                            <li><a href="#editBrandParent{{$category->parent->id}}" data-toggle="modal" data-target="#editBrandParent{{$category->parent->id}}"><i class="icon-database-edit2"></i> Sửa Hãng xe</a></li>
                                                            <li><a href="#editBrandChildren{{$category->id}}" data-toggle="modal" data-target="#editBrandChildren{{$category->id}}"><i class="icon-database-edit2"></i> Sửa Mẫu xe</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
{{--                                        Modal--}}
                                        <div class="modal fade" id="editBrandParent{{$category->parent->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sửa hãng xe {{$category->parent->name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('admin.category.edit_brand',  ['id' => $category->parent->id])}}" method="POST" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="modal-body">
                                                            <input  type="text" class="form-control mt-3" id="reasonSelectText" placeholder = "{{$category->parent->name}}" name="name_parent"/>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" id="btnRejectTrip" type="submit">Lưu</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="editBrandChildren{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sửa mẫu xe {{$category->name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('admin.category.edit_brand', ['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="modal-body">
                                                            <input  type="text" class="form-control mt-3" id="reasonSelectText" placeholder = "{{$category->name}}" name="name_children"/>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" id="btnRejectTrip" type="submit">Lưu</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
                            <div class="panel-body">
                                <div class="row">
                                    Đăng ký mới  <code>Mẫu xe</code>
                                </div>
                                <form class="mt-5" action="{{route('admin.category.register')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên mẫu xe</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chọn hãng xe</label>
                                        {{ Form::select('parent_id', $categoriesSelect->put(config('setting.default_value_0'), 'Parent'), old('parent_id', config('setting.default_value_0')), ['class' => 'form-control']) }}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
