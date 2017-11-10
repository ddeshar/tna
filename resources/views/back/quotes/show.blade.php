@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">{{ $quotes->author->author_name or "" }}</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('quotes.edit', $quotes->quotes_id) }}"><i class="fa fa-edit"></i>Edit Quotes</a></p>
            </div>
                <p>{{ $quotes->quote_detail or "" }}</p>
        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection