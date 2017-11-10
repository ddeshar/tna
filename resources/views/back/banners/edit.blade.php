@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <?php
        $status = array(
            'published' => 'published',
            'draft' => 'draft',
            'pending' => 'pending'
        );

        $classes = array(
            'balloon' => 'balloon',
            'aeroplane' => 'aeroplane',
            'kite' => 'kite'
        );
    ?>
    {!! Form::open([ 'method' => 'patch', 'route' => ['banners.update',  $banners->banner_id], 'files' => 'true' ]) !!}
        @include('back.banners._form')
    {!! Form::submit('Send', ['class' => 'col-xs-12 btn btn-danger btn-load btn-md']) !!}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')

@endsection