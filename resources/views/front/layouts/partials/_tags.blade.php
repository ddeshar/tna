<div class="headline"><h3>Tags</h3></div>
<ul class="unstyled inline blog-tags">
@foreach($tags as $tag)    
    <li><a href="#"><i class="icon-tags"></i> {{ $tag->tag }}</a></li>
@endforeach
</ul>