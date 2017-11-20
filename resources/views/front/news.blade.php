@extends('front.layouts.newa')

@section('title', 'News & Events')

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

    <!--=== Breadcrumbs ===-->
        @include('front.layouts.partials._breadcrumbs')
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
        <div class="container">		
            <div class="row-fluid blog-page">
                <!-- Right Sidebar -->
                    @include('front.layouts._right_sidebar')

                        
                <!-- Left Sidebar -->
                <div class="span9">
        
                    @foreach ($newss as $news)
                        @include('front.layouts.partials._article_blog')
                    @endforeach
                </div><!--/span9-->
            </div><!--/row-fluid-->        
                    {{$newss->links()}}
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