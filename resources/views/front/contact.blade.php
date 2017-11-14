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

<!-- Google Map -->
<!-- <div id="map" class="map margin-bottom-40"></div>-/map -->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
		<div class="span9">
            <div class="headline"><h3>Contacts</h3></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />
			<form />
                <label>Name</label>
                <input type="text" class="span7 border-radius-none" />
                <label>Email <span class="color-red">*</span></label>
                <input type="text" class="span7 border-radius-none" />
                <label>Message</label>
                <textarea rows="8" class="span10"></textarea>
                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->
        
		<div class="span3">
        	<!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>5B Streat, City 50987 New Town US</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>info@example.com</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>1(222) 5x86 x97x</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://www.example.com</a></li>
            </ul>

        	<!-- Business Hours -->
            <div class="headline"><h3>Business Hours</h3></div>
            <ul class="unstyled">
            	<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
            	<li><strong>Saturday:</strong> 11am to 3pm</li>
            	<li><strong>Sunday:</strong> Closed</li>
            </ul>

        	<!-- Why we are? -->
            <div class="headline"><h3>Why we are?</h3></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            <ul class="unstyled">
            	<li><i class="icon-ok color-green"></i> Odio dignissimos ducimus</li>
            	<li><i class="icon-ok color-green"></i> Blanditiis praesentium volup</li>
            	<li><i class="icon-ok color-green"></i> Eos et accusamus</li>
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