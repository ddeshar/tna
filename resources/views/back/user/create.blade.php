@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open([ 'route' => 'user.store', 'method' => 'POST', 'files' => 'true']) !!}
        @include('back.user._form')
    {!! Form::submit('Send', ['class' => 'col-xs-12 btn btn-danger btn-load btn-md']) !!}
    {!! Form::close() !!}

@endsection

@section('footer_scripts')

@endsection
