<div class="row">
    <div class="col-md-8">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('title', 'The title for your post :', ['class' => 'control-label']) !!}
                    {!! Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'The title for your post']) !!}
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">Content</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::textarea('body', isset($post->body) ? $post->body : null, ['class' => 'form-control', 'rows' => '31']); !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h4 class="card-title">Post Details</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('slug', 'URL slug :', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $post->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL slug']) !!}
                </div> 
                <div class="form-group">
                    {!! Form::label('status', 'Post Status') !!}
                    {!! Form::select('status', $status, $post->status, array('class' => 'form-control', 'id' => 'status')); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Post Category') !!}
                    {!! Form::select('category_id', $categories, $post->category_id, array('class' => 'form-control', 'id' => 'select')); !!}
                </div>
                <div class="checkbox">
                    <label>
                        <input type="hidden" name="featured" value="0">
                        <input type="checkbox" name="featured" value="1">
                    </label>
                </div>
                <div class="form-group">
                        <label for="tags">Select tags</label>
                            @if(!$post->id)
                                @foreach($tags as $tag)
                                    <div class="checkbox">
                                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>
                                    </div>
                                @endforeach
                            @else
                                @foreach($tags as $tag)
                                    <div class="checkbox">
                                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                            @foreach($post->tags as $t)
                                                @if($tag->id == $t->id)
                                                        checked
                                                @endif
                                            @endforeach
                                            
                                            >{{ $tag->tag }}</label>
                                    </div>
                                @endforeach
                            @endif

                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">Post Image</h4>
            <div class="card-body">
                <div class="form-group">
                    <input name="image" class="form-control" type="file" id="logo-id" >
                    @if(!$post->id)
                    <img class="thumbnail img-preview" src="#" title="" width="100%" height="auto">
                    @else
                    <img src="{{ asset('images/posts/'. $post->image) }}" alt="photo" width="100%" height="auto">
                    @endif
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">SEO Content</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('meta_description', 'Meta Description') !!}
                    {!! Form::textarea('meta_description', isset($post->meta_description) ? $post->meta_description : null, ['class' => 'form-control', 'rows'=>'2']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_keywords', 'Meta Keywords') !!}
                    {!! Form::textarea('meta_keywords', isset($post->meta_keywords) ? $post->meta_keywords : null, ['class' => 'form-control', 'rows'=>'2']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('seo_title', 'Seo Title') !!}
                    {!! Form::text('seo_title', $post->seo_title, ['class' => 'form-control', 'id' => 'seo_title', 'placeholder' => 'Seo Title']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
