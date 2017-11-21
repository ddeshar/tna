<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span6">
            <h1>{{ $aboutus->title }}</h1>
            <p>{!! $aboutus->body !!}</p>
        </div>
    	<div class="span6">
            {!! $aboutus->meta_description !!}
        </div>
    </div><!--/row-fluid-->

	<!-- Meer Our Team -->
        @include('front.layouts.partials.tnateam')
	<!-- //End Meer Our Team -->

    <!-- our partners -->
        @include('front.layouts.partials._ourpartners')
    <!-- //End Our partners -->

</div><!--/container-->	