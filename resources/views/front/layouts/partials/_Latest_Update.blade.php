<div class="posts margin-bottom-20">
    <div class="headline"><h3>Latest Update</h3></div>
    @foreach ($posts as $post)
        <dl class="dl-horizontal">
            <dt><a href="{{ route('article', ['slug' => $post->slug ]) }}"><img src="{{ asset('images/posts/'. $post->image  ) }}" alt="{{ $post->title }}" /></a></dt>
            <dd>
                <p><a href="{{ route('article', ['slug' => $post->slug ]) }}">{{ $post->title or "" }}</a></p> 
            </dd>
        </dl>
    @endforeach
</div>