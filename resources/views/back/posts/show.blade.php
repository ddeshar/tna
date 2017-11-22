@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-title-w-btn">
            <h3 class="title">{{ $post->title }}</h3>
            <p><a class="btn btn-primary icon-btn" href="{{ route('posts.edit', $post->id) }}"><i class="fa fa-edit"></i>Edit Post</a></p>
        </div>
        <div class="card-body">
            <p><b>Author : </b>{{ $post->user->name or "" }} | 
            <b>Category : </b>{{ $post->category->name}} | 
            <b>Status : </b>{{ $post->status or "" }} | 
            <b>Featured : </b>{{ $post->featured or "" }}</p>
        
            <div class="row">            
                @if ($post->image)
                <div class="col-lg-4">
                    <img src="{{ asset('images/posts/'. $post->image  ) }}" alt="{{ $post->title }}" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-lg-8">
                @else
                    <div class="col-lg-12">
                @endif
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')

@endsection