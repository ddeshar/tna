@extends('front.layouts.newa')

@section('title', '')

@section('keywords', '')
@section('description', '')
@section('author', '')

@section('og-url', '')
@section('og-image', '')
@section('og-description', '')

@section('header_styles')
    <link rel="stylesheet" href="assets/css/img-hover-effect.css" />    
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
            <div class="row-fluid"> 
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/1.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item1</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/2.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item2</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/3.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item3</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/4.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item4</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
            </div><!--/row-fluid-->         
            <div class="row-fluid"> 
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/5.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item1</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/6.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item2</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/7.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item3</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/8.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item4</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
            </div><!--/row-fluid-->         
            <div class="row-fluid"> 
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/9.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item1</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/10.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item2</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/3.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item3</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
                <div class="view view-tenth span3">
                    <img src="assets/img/carousel/4.jpg" alt="" />
                    <div class="mask">
                        <h2>Portfolio Item4</h2>
                        <a href="portfolio_item.html" class="info">Read More</a>
                    </div>
                </div>
            </div><!--/row-fluid-->         
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