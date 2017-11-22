@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">{{ $user->name }}</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-edit"></i>Edit User</a></p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                  <img src="{{ asset('images/user/'. $user->avatar) }}" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-lg-8">
                  <h4>{{ $user->name }}</h4>
                    <blockquote>
                      <small><cite title="Source Title">  {{ $user->email }} <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                    <p>Lattest Update : {{ $user->updated_at }}</p>
                    <p>Create At : {{ $user->created_at }}</p>
                    </blockquote>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection
