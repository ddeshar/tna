<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('header_styles')

    <title> @yield('title') | Munivihar admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      @include('back.layouts.partials._navbar')

      <!-- Side-Nav-->
      @include('back.layouts.partials._side_nav')
      
      <div class="content-wrapper">
        @include('back.layouts.partials._breadcrumb')
        <div class="row">
          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="{{ asset('back/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back/js/plugins/pace.min.js') }}"></script>
    <script src="{{ asset('back/js/main.js') }}"></script>
    
    @yield('footer_scripts')

  </body>
</html>