@extends('front.layouts.newa')

@section('title', 'TNA Thailand')

@section('keywords', '')
@section('description', '')
@section('author', '')

@section('og-url', '')
@section('og-image', '')
@section('og-description', '')

@section('content')
    <!--=== Header ===-->
        @include('front.layouts.partials._header')
    <!--=== End Header ===-->

    <!--=== Slider ===-->
        @include('front.layouts.partials.slider')
    <!--=== End Slider ===-->

    <!--=== Content Part ===-->
        @include('front.layouts.partials.index_content')
    <!--=== End Content Part ===-->

    <!--=== Footer ===-->
        @include('front.layouts.partials._footer')
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
        @include('front.layouts.partials._copyright')
    <!--=== End Copyright ===-->
@endsection


@section('footer_scripts')
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/horizontal-parallax/js/sequence.jquery-min.js"></script>
    <script type="text/javascript" src="assets/plugins/horizontal-parallax/js/horizontal-parallax.js"></script>
    <script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.js"></script>
@endsection