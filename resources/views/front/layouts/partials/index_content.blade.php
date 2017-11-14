<div class="container">

	<!-- Service blocks -->
    <div class="headline"><h3>Our Services</h3></div>
	<div class="row-fluid service-alternative">    	
        <div class="span4">
    		<div class="service">
                <h4>{{ $first_post->title }}</h4>
                <p>{{ $first_post->body }}</p>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service">
                <h4>{{ $second_post->title }}</h4>
                <p>{{ $second_post->body }}</p>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service">
                <h4>{{ $third_post->title }}</h4>
                <p>{{ $third_post->body }}</p>
    		</div>	
    	</div>			    
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->


    <div class="row-fluid">
        <!-- Left Sidebar(Content Part) -->
        <div class="span9">

            <!-- News -->
            <div class="headline"><h3>News</h3></div>
            <div class="row-fluid margin-bottom-40">
                <ul id="list" class="bxslider recent-work">

                @foreach ($newss as $news)
                    <li>
                        <a href="{{ route('article', ['slug' => $news->slug ]) }}">
                            <em class="overflow-hidden"><img src="{{ asset('images/posts/'. $news->image  ) }}" alt="{{ $news->title }}" /></em>
                            <span>
                                <strong>{{ $news->title or "" }}</strong>
                                <i>{{ str_limit($news->body, $limit = 30, $end = '...')}}</i>
                            </span>
                        </a>
                    </li>
                @endforeach




                </ul>
            </div><!--/row-->
            <!-- //End News  -->
    
            <!-- Example Blocks  -->
            <div class="row-fluid">
                <!-- Testimonials -->
                <div class="span6">
                    <div class="headline"><h3>Client Testimonals</h3></div>
                    <div id="testimonal_carousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="testimonial">
                                <div class="testimonial-body">
                                    <p>I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.</p>
                                </div>
                                <div class="testimonial-author">
                                    <span class="arrow"></span>
                                    <span class="name">Dipendra Deshar</span>, Web Administrator, Wami On Code. 
                                </div>
                            </div>
                        </div><!--/carousel-inner-->

                    @foreach ($quotes as $quote)
                        <div class="item">
                            <div class="testimonial">
                                <div class="testimonial-body">
                                <p>{{ $quote->quote_detail or "" }}</p>
                                </div>
                                <div class="testimonial-author">
                                    <span class="arrow"></span>
                                    <span class="name">{{ $quote->Boardmembers->board_name or "" }}</span>, {{ $quote->Boardmembers->board_position or "" }}
                                </div>
                            </div>
                        </div><!--/carousel-inner-->
                    @endforeach
                    </div><!--/testimonal_carousel-->
                    
                    <!-- Carousel nav -->						  
                    <div class="testimonal-arrow">
                        <a class="icon-angle-right" href="#testimonal_carousel" data-slide="next"></a> 
                        <a class="icon-angle-left" href="#testimonal_carousel" data-slide="prev"></a>	
                    </div>
                    </div>			
                </div><!--/span6-->
                <!-- Latest Shots -->
                <div class="span6">
                    <div class="headline"><h3>Latest Shots</h3></div>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            @if(count($gallerys == null))
                                @foreach ($gallerys as $gallery)
                                    <div class="item">
                                        <img src="{{ asset('images/banners/'. $gallery->banner_image  ) }}" alt="{{ $gallery->banner_description or "" }}">
                                        <div class="carousel-caption">
                                        <p>{{ $gallery->banner_name or "" }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="item active">
                                <img src="assets/img/carousel/3.jpg" alt="">
                                <div class="carousel-caption">
                                <p>Welcome to tna official</p>
                                </div>
                            </div>
                            </div>
                        
                        <div class="carousel-arrow">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div><!--/span6-->
            </div><!--/row-fluid-->

        </div><!--/span9-->

        <!-- Right Sidebar -->
        <div class="span3">
            <!-- Posts -->
                @include('front.layouts.partials._Latest_Update')

            <!-- TNA in Media -->
            {{--  <div class="blog-twitter">
                <div class="headline"><h3>TNA in Media</h3></div>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
                <p><a href="#">At vero eos et accusamus et iusto odio.</a><span>5 hours ago</span></p>
            </div>  --}}

        </div><!--/span3-->
    </div><!--/row-fluid-->
    <!-- //End Container -->

    <!-- our partners -->
        @include('front.layouts.partials._ourpartners')
    <!-- //End Our partners -->
</div><!--/container-->