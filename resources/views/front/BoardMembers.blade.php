@extends('front.layouts.newa')

@section('title', 'Board Members')

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
    <div class="container">	
        @include('front.layouts.partials.tnateam')
    </div>
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