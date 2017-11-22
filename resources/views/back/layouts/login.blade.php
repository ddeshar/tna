<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- CSS-->
      <link rel="stylesheet" href="{{ asset('back/css/main.css') }}">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
      <!--if lt IE 9
      script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
      script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
      -->
        {{--  
      <!--  favicon -->
      <link rel="shortcut icon" href="{{ asset('front/img/ico/favicon.png') }}">
      <!--  apple-touch-icon -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('front/img/ico/apple-touch-icon-144-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('front/img/ico/apple-touch-icon-114-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('front/img/ico/apple-touch-icon-72-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" href="{{ asset('front/img/ico/apple-touch-icon-57-precomposed.png') }}">  --}}

      @yield('style')
  </head>
  <body>
      @yield('content')
      <!-- jQuery -->
      <script src="{{ asset('back/js/jquery-2.1.4.min.js') }}"></script>
      <script src="{{ asset('back/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('back/js/plugins/pace.min.js') }}"></script>
      <script src="{{ asset('back/js/main.js') }}"></script>
      @yield('script')
  </body>
</html>
