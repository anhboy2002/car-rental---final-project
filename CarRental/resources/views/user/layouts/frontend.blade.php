<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content=" Car Rental Website ">
        <meta name="keywords" content="">
        @if(auth()->check())
            <meta name="id_user" content="{{ auth()->id() }}">
            <meta name="count" content="{{auth()->user()->unreadnotifications()->count()}}">
            <meta name="name" content="{{auth()->user()->user_name}}">
        @endif
        <title>Car Rental Website</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        {!! Html::script('js/app.js') !!}
        {!! Html::style('app/css/app.css') !!}
        {!! Html::style('app/css/fileinput.css') !!}
        <!-- reset css -->
        {!! Html::style('assets/css/css_reset.css') !!}
        <!-- bootstrap -->
        {!! Html::style('app/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/jquery.datetimepicker.min.css') !!}
        <!-- Latest compiled and minified CSS -->
        {!! Html::style('assets/css/bootstrap-select.min.css') !!}
        <!-- preload -->
        {!! Html::style('assets/css/loaders.min.css') !!}
        {!! Html::style('assets/css/index.css') !!}
        <!--[if lt IE 9]>
        {!! Html::script('assets/js/html5shiv.min.js') !!}
        {!! Html::script('assets/js/respond.min.js') !!}
        <![endif]-->
    </head>
    <body>
        @include('user.includes.header')
        @yield('content')
    </body>
</html>
