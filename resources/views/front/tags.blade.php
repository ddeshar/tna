@extends('front.layouts.newa')

@section('title', '')

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
                    <div class="blog margin-bottom-30">
                        <h3><a href="{{ route('article', ['slug' => $news->slug ]) }}"> {{ $news->title or "" }}</a></h3>
                        <ul class="unstyled inline blog-info">
                            <li><i class="icon-calendar"></i> February 02, 2013</li>
                            <li><i class="icon-pencil"></i> Diana Anderson</li>
                            <li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>
                        </ul>
                        <ul class="unstyled inline blog-tags">
                            <li>
                                <i class="icon-tags"></i> 
                                <a href="#">Technology</a> 
                                <a href="#">Education</a>
                                <a href="#">Internet</a>
                                <a href="#">Media</a>
                            </li>
                        </ul>

                        <div class="span4">
                            <div class="blog-img"><img src="{{ asset('images/posts/'. $news->image  ) }}" alt="{{ $news->title or "" }}" /></div>
                        </div>
                        <div class="span7">
                            <p>{!! str_limit($news->body, $limit = 700, $end = '...') !!}</p>
                            <p><a class="btn-u btn-u-small" href="blog_item_left_sidebar.html">Read More</a></p>
                        </div>
                    </div><!--/row-fluid-->

                    <hr>
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