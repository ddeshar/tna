<div class="footer">
	<div class="container">
		<div class="row-fluid">

			<div class="span8">
                <div class="posts">
                    <div class="headline"><h3>Recent Blog Entries</h3></div>
                    @foreach ($postfooters as $postfooter)
                        <dl class="dl-horizontal">
                            <dt><a href="{{ route('article', ['slug' => $postfooter->slug ]) }}"><img src="{{ asset('images/posts/'. $postfooter->image  ) }}" alt="{{ $postfooter->title }}" /></a></dt>
                            <dd>
                                <p><a href="{{ route('article', ['slug' => $postfooter->slug ]) }}">{{ $postfooter->title or "" }}</a></p> 
                            </dd>
                        </dl>
                    @endforeach
                </div>
			</div><!--/span4-->

			<div class="span4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contact Us</h3></div>
                <address>
					75 On Nut Rd, Khwaeng Suan Luang, <br />
					Khet Suan Luang, Krung Thep Maha Nakhon 10250<br />
					Phone: 061 919 5057 <br /
					Email: <a href="mailto:jedeshar@gmail.com" class="">jedeshar@gmail.com</a>
                </address>

			</div><!--/span4-->
		</div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/footer-->