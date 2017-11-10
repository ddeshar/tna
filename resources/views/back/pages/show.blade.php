@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-title-w-btn">
            <h3 class="title">{{ $page->title }}</h3>
            <p><a class="btn btn-primary icon-btn" href="{{ route('pages.edit', $page->id) }}"><i class="fa fa-edit"></i>Edit page</a></p>
        </div>
        <div class="card-body">
            <b>Author : {{ $page->user->name or "" }} | | Status : {{ $page->status or "" }} |</b><br>
        
            <div class="row">            
                @if ($page->image)
                <div class="col-lg-4">
                <img src="{{ asset('images/page/'. $page->image  ) }}" alt="{{ $page->title }}" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-lg-8">
                @else
                <div class="col-lg-12">
                @endif
                    {!! $page->body !!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('footer_scripts')

@endsection