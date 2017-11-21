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
                        <h1 id="typography">{{ $board->position->bpost_name }}</h1>            
                    </div>
                </div>
            </div>
            <!-- Headings-->
            <div class="row">
                <div class="col-lg-4">
                    <p>{{$board->board_name}}</p>

                        {{ $board->department->department_name }}
                        {{ $board->position->bpost_name }}
                        {{ $board->province->PROVINCE_NAME_ENG }}

                </div>
                <div class="col-lg-4">
                    <p>{{$board->board_year}}</p>
                </div>
            </div>
            
            <img src="{{ asset('images/board/'. $board->board_image  ) }}" alt="{{ $board->board_name }}" alt="" class="img-rounded img-responsive" />

        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection