@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    {!! Form::open([ 'method' => 'patch', 'route' => ['quotes.update',  $quotes->quotes_id]]) !!}
        @include('back.quotes._form')
    {!! Form::submit('Send', ['class' => 'col-xs-12 btn btn-danger btn-load btn-md']) !!}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')

@endsection