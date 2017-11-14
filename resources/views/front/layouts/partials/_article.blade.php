<div class="span9">
    <div class="blog margin-bottom-30">
        <h3>{{ $article->title }}</h3>
        <ul class="unstyled inline blog-info">
            <li><i class="icon-calendar"></i>{{ $article->created_at->toFormattedDateString() }}</li>
            <li><i class="icon-pencil"></i> Diana Anderson</li>
            <a href="{{ route('category', ['slug' => $article->category->slug ]) }}">{{ $article->category->name }}</a>

            {{--  <li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>  --}}
        </ul>
        <ul class="unstyled inline blog-tags">
            <li>
                <i class="icon-tags"></i> 
                @foreach($article->tags as $tag)
                    <a href="#" >{{ $tag->tag }}</a>
                @endforeach
            </li>
        </ul>
        <div class="blog-img"><img src="{{ asset('images/posts/'. $article->image  ) }}" alt="{{ $article->title }}" /></div>
         <p>{!! $article->body !!}</p>
    </div><!--/blog-->
</div>