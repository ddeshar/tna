<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html>
  <head>
    <title>@yield('title') - TNA Thai Nepali Association</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">

    <meta property="og:url" content="@yield('og-url')">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:description" content="@yield('og-description')">

    <meta property="og:site_name" content="http://tnathailand.org/">
    <meta property="og:image:width" content="800px">
    <meta property="og:image:height" content="500px">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/headers/header2.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style_responsive.css')}}" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/flexslider/flexslider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/bxslider/jquery.bxslider.css')}}" />             
    <link rel="stylesheet" href="{{ asset('assets/plugins/horizontal-parallax/css/horizontal-parallax.css')}}" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/themes/default.css')}}" id="style_color" />
    <link rel="stylesheet" href="{{ asset('assets/css/themes/headers/default.css')}}" id="style_color-header-2" />
    
    @yield('header_styles')

  </head>

    <body>
    
            @yield('content')
    
    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        App.initBxSlider();
        });
    </script>
    <!--[if lt IE 9]>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109955654-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109955654-1');
    </script>

    @yield('footer_scripts')

    </body>
</html>