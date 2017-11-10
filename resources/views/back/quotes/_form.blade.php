<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h4 class="card-title">Quote</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('quote_detail', 'Quote') !!}
                    {!! Form::textarea('quote_detail', isset($quotes->quote_detail) ? $quotes->quote_detail : null, ['class' => 'form-control', 'rows'=>'2']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('quote_author_id', 'Author') !!}
                    {!! Form::select('quote_author_id', $author, $quotes->quote_author_id, array('class' => 'form-control', 'id' => 'select')); !!}
                </div>
            </div>
        </div>
    </div>
</div>