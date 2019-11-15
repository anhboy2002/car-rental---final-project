<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản Trị Chia Sẻ Xe</title>
	<base href="{{asset('')}}">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

    {!! Html::style('admin/assets/css/icons/icomoon/styles.css') !!}
    {!! Html::style('admin/assets/css/bootstrap.css') !!}
    {!! Html::style('admin/assets/css/core.css') !!}
    {!! Html::style('admin/assets/css/components.css') !!}
    {!! Html::style('admin/assets/css/colors.css') !!}
    {!! Html::style('admin/assets/css/custom.css') !!}
	<!-- /global stylesheets -->

	<!-- Core JS files -->
    {!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places') !!}
    {!! Html::script('app/js/fileinput/fileinput.js') !!}
    {!! Html::script('app/js/fileinput/vi.js') !!}
    {!! Html::script('assets/js/bootstrap-select.min.js') !!}
    {!! Html::script('admin/assets/js/plugins/loaders/pace.min.js') !!}

	<!-- /core JS files -->

	<!-- Theme JS files -->
    {!! Html::script('admin/assets/js/plugins/visualization/d3/d3.min.js') !!}
    {!! Html::script('admin/assets/js/plugins/visualization/d3/d3_tooltip.js') !!}
    {!! Html::script('admin/assets/js/plugins/forms/styling/switchery.min.js') !!}
    {!! Html::script('admin/assets/js/plugins/ui/moment/moment.min.js') !!}
    {!! Html::script('admin/assets/js/plugins/forms/selects/select2.min.js') !!}
    {!! Html::script('admin/assets/js/plugins/forms/styling/uniform.min.js') !!}
    {!! Html::script('admin/assets/js/core/app.js') !!}
    {!! Html::script('admin/assets/js/core/bootstrap.min.js') !!}
{!! Html::script('admin/assets/js/pages/form_layouts.js') !!}
	<!-- /theme JS files -->
    {!! Html::script('app/js/gmap.js') !!}
</head>

<body>

	<!-- Main navbar -->
	@include('admin.layout.nav')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			@include('admin.layout.menu')

			<!-- Main content -->
			@yield('content2')
			<!-- /Main content -->
		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
