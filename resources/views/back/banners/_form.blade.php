<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">

            <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::label('banner_name', 'banner name') !!}
                            {!! Form::text('banner_name', $banners->banner_name, ['class' => 'form-control', 'id' => 'banner_name', 'placeholder' => 'banner name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('banner_status', 'banner status') !!}
                            {!! Form::select('banner_status', $status, $banners->banner_status, array('class' => 'form-control', 'id' => 'status')); !!}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::label('banner_description', 'banner_description') !!}
                            {!! Form::text('banner_description', $banners->banner_description, ['class' => 'form-control', 'id' => 'banner_description', 'placeholder' => 'banner_description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('banner_class', 'banner classes') !!}
                            {!! Form::select('banner_class', $classes, $banners->banner_class, array('class' => 'form-control', 'id' => 'banner_class')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input name="banner_image" class="form-control" type="file" id="logo-id" >
                    @if(!$banners->banner_id)
                        <img class="thumbnail img-preview" src="#" title="" width="100%" height="auto">
                    @else
                        <img src="{{ asset('images/banners/'. $banners->banner_image) }}" alt="photo" width="100%" height="auto">
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>