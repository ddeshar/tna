<div class="row">
    <div class="col-md-8">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('title', 'The title for your pages :', ['class' => 'control-label']) !!}
                    {!! Form::text('title', $pages->title, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'The title for your pages']) !!}
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">Content</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::textarea('body', isset($pages->body) ? $pages->body : null, ['class' => 'form-control', 'rows' => '14']); !!}
                </div>
            </div>

            <h4 class="card-title">excerpt</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::textarea('excerpt', isset($pages->excerpt) ? $pages->excerpt : null, ['class' => 'form-control', 'rows' => '14']); !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h4 class="card-title">pages Details</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('slug', 'URL slug :', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $pages->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL slug']) !!}
                </div> 
                <div class="form-group">
                    {!! Form::label('status', 'pages Status') !!}
                    {!! Form::select('status', $status, $pages->status, array('class' => 'form-control', 'id' => 'status')); !!}
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">pages Image</h4>
            <div class="card-body">
                <div class="form-group">
                    <input name="image" class="form-control" type="file" id="logo-id" >
                    @if(!$pages->id)
                        <img class="thumbnail img-preview" src="#" title="" width="100%" height="auto">
                    @else
                        <img src="{{ asset('images/page/'. $pages->image) }}" alt="photo" width="100%" height="auto">
                    @endif
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-title">SEO Content</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('meta_description', 'Meta Description') !!}
                    {!! Form::textarea('meta_description', isset($pages->meta_description) ? $pages->meta_description : null, ['class' => 'form-control', 'rows'=>'2']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_keywords', 'Meta Keywords') !!}
                    {!! Form::textarea('meta_keywords', isset($pages->meta_keywords) ? $pages->meta_keywords : null, ['class' => 'form-control', 'rows'=>'2']); !!}
                </div>
            </div>
        </div>
    </div>
</div>
