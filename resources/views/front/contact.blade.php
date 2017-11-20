@extends('front.layouts.newa')

@section('title', 'Contact Us')

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

<!-- Google Map -->
<!-- <div id="map" class="map margin-bottom-40"></div>-/map -->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
		<div class="span9">
            <div class="headline"><h3>Contacts</h3></div>
             <form method="POST" action="{{ url('/postcontact') }}">
                {{ csrf_field() }}
                <label>Name</label>
                <input type="text" name="subject" class="span7 border-radius-none" />
                <label>Email <span class="color-red">*</span></label>
                <input type="text" name="email" class="span7 border-radius-none" />
                <label>Message</label>
                <textarea rows="8" name="message" class="span10"></textarea>
                <p><button type="submit"  class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->
        
		<div class="span3">
        	<!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="https://www.google.co.th/maps/place/Thai+Nepali+Association/@13.7085626,100.6054228,15z/data=!4m5!3m4!1s0x0:0x2eafff1fe3d19f2e!8m2!3d13.7085626!4d100.6054228"><i class="icon-home"></i>75 On Nut Rd, Khwaeng Suan Luang, Khet Suan Luang, Krung Thep Maha Nakhon 10250</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>jedeshar@gmail.com</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>061 919 5057</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://tnathailand.org</a></li>
            </ul>

        	<!-- Opening Hours -->
            <div class="headline"><h3>Opening Hours</h3></div>
            <ul class="unstyled">
            	<li><strong>Monday-Friday:</strong> 8am to 5pm</li>
            	<li><strong>Sunday:</strong> Closed</li>
            </ul>

        </div><!--/span3-->
    </div><!--/row-fluid-->     

    <!-- our partners -->
        @include('front.layouts.partials._ourpartners')
    <!-- //End Our partners -->

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
    <script type="text/javascript" src="{{ asset('assets/plugins/flexslider/jquery.flexslider-min.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZoXvFadLW3GC8Dd1Vc9AY1VhrFHCfxdM&callback=initMap"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/gmap/gmap.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/pages/contact.js')}}"></script>
@endsection