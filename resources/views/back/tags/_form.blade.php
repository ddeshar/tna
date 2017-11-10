<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('tag', 'tag') !!}
                    {!! Form::text('tag', $Tags->tag, ['class' => 'form-control', 'id' => 'tag', 'placeholder' => 'tag']) !!}
                </div>
            </div>
        </div>
    </div>
</div>