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
                    <img src="{{ asset('images/board/'. $board->board_image  ) }}" alt="{{ $board->board_name }}" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-lg-4">
                    <p>Name : {{$board->board_name or "-"}}</p>
                    <p>Department : {{ $board->department->department_name or "-" }}</p>    
                    <p>Position : {{ $board->position->bpost_name or "-" }}</p>    
                    <p>Branch : {{ $board->province->PROVINCE_NAME_ENG or "-" }}</p>
                    <p>Year : {{$board->board_year or "-"}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')

@endsection