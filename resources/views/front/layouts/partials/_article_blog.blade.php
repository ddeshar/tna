    <div class="blog margin-bottom-30">
        <h3><a href="{{ route('article', ['slug' => $news->slug ]) }}"> {{ $news->title or "" }}</a></h3>
        <ul class="unstyled inline blog-info">
            <li><i class="icon-calendar"></i> {{ $news->created_at->toFormattedDateString() }}</li>
            <a href="{{ route('category', ['slug' => $news->category->slug ]) }}">{{ $news->category->name }}</a>
            {{--  <li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>  --}}
        </ul>
        <ul class="unstyled inline blog-tags">
            <li>
                <i class="icon-tags"></i> 
                @foreach($news->tags as $tag)
                    <a href="{{ route('tags', ['tag' => $tag->tag ]) }}" >{{ $tag->tag }}</a>
                @endforeach
            </li>
        </ul>

        <div class="span4">
            <div class="blog-img"><img src="{{ asset('images/posts/'. $news->image  ) }}" alt="{{ $news->title or "" }}" /></div>
        </div>
        <div class="span7">
            <p>{!! str_limit($news->body, $limit = 700, $end = '...') !!}</p>
            <p><a class="btn-u btn-u-small" href="{{ route('article', ['slug' => $news->slug ]) }}">Read More</a></p>
        </div>
    </div><!--/row-fluid-->

    <hr>