@extends('front.layouts.newa')

@section('title', $article->title )

@section('keywords', $article->meta_keywords )
@section('description', $article->meta_description )
@section('author', $article->user->name)

@section('og-url', '')
@section('og-image', '')
@section('og-description', '')

@section('header_styles')
<style>
    .heading { border-bottom:3px solid #ddd; }
    .twitter-hover {
        background-image: url('https://lut.im/SRoUJUn7V4/cORSlFIVBlR7M8Zv.png');
    }
    .facebook-hover {
        background-image: url('https://lut.im/9LlTfOBMjB/ccPwdiudyoF3x1wE.png');
    }
    .google-hover {
        background-image: url('https://lut.im/qGelLnYHZ3/dL1Hrnzyl7cMz14e.png');
    }
    .linkedin-hover {
        background-image: url('https://lut.im/JNIybEyJDx/6gAE6YPt35e7qMAB.png');
    }
    .pinterest-hover {
        background-image: url('https://lut.im/fU1GnJ1cOw/d0iRmklZgk2l6o5W.png');
    }
    .instagram-hover {
        background-image: url('https://lut.im/0LARg4VaCM/bWRJ8RbjK0r14RdO.png');
    }
    .tumblr-hover {
        background-image: url('https://lut.im/wJDqfDmhLL/YZoci8VwKz37qwv4.png');
    }
    .reddit-hover {
        background-image: url('https://lut.im/zfzy0kvZKw/BJBLoz6FyoLLFZGg.png');
    }
    .stumbleupon-hover {
        background-image: url('https://lut.im/sdOPL3LP6d/VMRYTaE6cZxHa3Hq.png');
    }
    .social-slide {
        height: 48px;
        width: 48px;
        margin: 10px;
        float: left;
        -webkit-transition: all ease 0.3s;
        -moz-transition: all ease 0.3s;
        -o-transition: all ease 0.3s;
        -ms-transition: all ease 0.3s;
        transition: all ease 0.3s;
    }
    .social-slide:hover {
        background-position: 0px -48px;
        box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
    }

</style>
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
            <div class="row-fluid blog-page">
                <!-- Right Sidebar -->
                    @include('front.layouts._right_sidebar')

                <!-- Left Sidebar -->
                    @include('front.layouts.partials._article')

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