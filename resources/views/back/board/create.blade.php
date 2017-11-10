@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <?php
        $classes = array(
            'published' => 'published',
            'draft' => 'draft',
            'pending' => 'pending'
        );
    ?>
    {!! Form::open([ 'route' => 'board.store', 'method' => 'POST', 'files' => 'true']) !!}
        @include('back.board._form')
    {!! Form::submit('Send', ['class' => 'col-xs-12 btn btn-danger btn-load btn-md']) !!}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
<script type="text/javascript">    
    $(document).ready(function() {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function() {
            readURL(this);
        });
    });
</script>
@endsection