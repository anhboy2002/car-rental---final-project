@extends('admin.layout.master')
@section('content2')
<!-- Main content -->
<div class="content-wrapper">
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="fa-home"></i> <span class="text-semibold">Home</span> - Trang Quản Lý</h4>
			</div>
		</div>
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><i class="icon-home2 position-left"></i> Trang chủ</li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-flat">
					<div class="panel-body">
						Chào mừng bạn đến với Trang quản trị Chia sẻ Xe
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<h3 class="no-margin">5</h3>
						Thành viên hoạt động
						<div class="text-muted text-size-small"> 5 bị khóa</div>
					</div>
					<div class="container-fluid">
						<div id="members-online"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="panel bg-pink-400">
					<div class="panel-body">
						<h3 class="no-margin">5</h3>
						 Xe đã duyệt
						<div class="text-muted text-size-small">trên tổng số 10 xe đã đăng ky</div>
					</div>

					<div id="server-load"></div>
				</div>
			</div>
			<div class="col-lg-4">
				<a href="admin/thongke">
					<div class="panel bg-blue-400">
						<div class="panel-body">
							<h3 class="no-margin">5</h3>
							Báo cáo
							<div class="text-muted text-size-small">từ người dùng</div>
						</div>
						<div id="today-revenue"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="footer text-muted">
			&copy; 2019. <a href="#">Project Chia sẻ xe</a> by <a href="" target="_blank">Mạnh Hùng</a>
		</div>
	</div>
</div>
@endsection
