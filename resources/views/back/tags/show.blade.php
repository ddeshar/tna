@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">{{ $Tags->tag or "" }}</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('tags.edit', $Tags->id) }}"><i class="fa fa-edit"></i>Edit tag</a></p>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection