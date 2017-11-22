<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('Name', 'Name:', ['class' => 'control-label']) !!}
                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email', 'Email:', ['class' => 'control-label']) !!}
                    {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password', 'Password:', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'PASSWORD']) !!}
                </div>
            </div>
        </div>
    </div>
</div>