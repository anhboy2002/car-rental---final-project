@include('include.errors')

<!-- Scripts project -->
{!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
{!! Html::script('app/js/bootstrap.min.js') !!}
<!-- count -->
{!! Html::script('assets/js/jquery.countTo.js') !!}
<!-- google maps -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places"></script>--}}
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8&libraries=places') !!}
{{--<script type="text/javascript" src='app/js/gmap.js'></script>--}}
{!! Html::script('app/js/gmap.js') !!}
<!-- swiper -->
{!! Html::script('assets/js/idangerous.swiper.min.js') !!}
{!! Html::script('assets/js/equalHeightsPlugin.js') !!}
{!! Html::script('assets/js/jquery.datetimepicker.full.min.js') !!}
{!! Html::script('assets/js/bootstrap-select.min.js') !!}
{!! Html::script('assets/js/index.js') !!}
{!! Html::script('app/js/app.js') !!}
{!! Html::script('app/js/notification.js') !!}
{!! Html::script('app/js/fileinput/fileinput.js') !!}
{!! Html::script('app/js/fileinput/vi.js') !!}
