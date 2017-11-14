@extends('front.layouts.newa')

@section('title', '')

@section('keywords', '')
@section('description', '')
@section('author', '')

@section('og-url', '')
@section('og-image', '')
@section('og-description', '')

@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/css/img-hover-effect.css')}}" />    
@endsection

@section('content')
    <!--=== Header ===-->
        @include('front.layouts.partials._header')
    <!--=== End Header ===-->

    <!--=== Breadcrumbs ===-->
        @include('front.layouts.partials._breadcrumbs')
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
        <div class="container portfolio-columns portfolio-responsive">
            @foreach ($members as $member)
                <div class="view view-tenth span3">
                    <img src="{{ asset('images/board/'. $member->board_image  ) }}" alt="" />
                    <div class="mask">
                        <h2>{{ $member->board_name or "" }}</h2>
                        <p>{{ $member->board_position or "" }}</p>
                        {{--  <a href="portfolio_item.html" class="info">Read More</a>  --}}
                    </div>
                </div>
            @endforeach
        </div><!--/container-->
    <!--=== End Content Part ===-->

    <!--=== Footer ===-->
        @include('front.layouts.partials._footer')
    <!--=== End Footer ===-->

    <!--=== Copyright ===-->
        @include('front.layouts.partials._copyright')
    <!--=== End Copyright ===-->
@endsection

@section('footer_scripts')

@endsection