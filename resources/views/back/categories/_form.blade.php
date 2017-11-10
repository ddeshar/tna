<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('parent_id', 'Category parent id') !!}
                    {!! Form::select('parent_id', $select_Category, $Category->parent_id, array('class' => 'form-control', 'placeholder' => 'Enter your Category parent id' , 'id' => 'select')); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('order', 'Category order :', ['class' => 'control-label']) !!}
                    {!! Form::text('order', $Category->order, ['class' => 'form-control','placeholder' => 'Category order']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Category name :', ['class' => 'control-label']) !!}
                    {!! Form::text('name', $Category->name, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Category name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Category slug :', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', $Category->slug, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Category slug']) !!}
                </div>
            </div>
        </div>
    </div>
</div>