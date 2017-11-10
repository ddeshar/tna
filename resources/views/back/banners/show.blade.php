@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <div class="card">
        <div class="bs-element-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1 id="typography">{{ $banners->banner_name }}</h1>            
                    </div>
                </div>
            </div>
            <!-- Headings-->
            <div class="row">
                <div class="col-lg-4">
                    <p>{{$banners->banner_description}}</p>
                </div>
                <div class="col-lg-4">
                    <p>{{$banners->banner_class}}</p>
                </div>
                <div class="col-lg-4">
                    <p>{{$banners->banner_status}}</p>
                </div>
            </div>
            
            <img src="{{ asset('images/banners/'. $banners->banner_image  ) }}" alt="{{ $banners->banner_name }}" alt="" class="img-rounded img-responsive" />

        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection