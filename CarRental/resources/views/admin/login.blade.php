<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<base href="{{asset('')}}">
    {!! Html::style('admin/assets/css/icons/icomoon/styles.css') !!}
    {!! Html::style('admin/assets/css/bootstrap.css') !!}
    {!! Html::style('admin/assets/css/core.css') !!}
    {!! Html::style('admin/assets/css/components.css') !!}
    {!! Html::style('admin/assets/css/colors.css') !!}
    {!! Html::style('admin/assets/css/custom.css') !!}
</head>
<body class="login-container bg-slate-800">
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
				<div class="content">
					<form action="{{ route('admin.login') }}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="panel panel-body login-form">
							<div class="text-center">
                                <img src="http://localhost:8000/images/logo.png" alt="">
								<h3 class="content-group-lg mt-2 text-secondary">Please Login to Admin Panel</h3>
							</div>
							@if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif
							@if(session('thongbao'))
		                        <div class="alert bg-danger">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Error!</span>  {{session('thongbao')}}
								</div>
		            		@endif
							<div class="form-group has-feedback has-feedback-left">
								<input type="email" name="emailLogin" class="form-control" placeholder="Email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="passwordLogin" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-circle-right2 position-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
