@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    {!! Form::open([ 'route' => 'categories.store', 'method' => 'POST']) !!}
        @include('back.categories._form')
    {!! Form::submit('Send', ['class' => 'col-xs-12 btn btn-danger btn-load btn-md']) !!}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
<script type="text/javascript">    
    $("#title").keyup(function(){
        var str = $(this).val();
        var trims = $.trim(str)
        var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
        $("#slug").val(slug.toLowerCase())
    })
</script>
@endsection