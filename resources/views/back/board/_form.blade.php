<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">

            <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::label('board_position', 'board_position') !!}
                            {!! Form::text('board_position', $board->board_position, ['class' => 'form-control', 'id' => 'board_position', 'placeholder' => 'board_position']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('board_name', 'board_name') !!}
                            {!! Form::text('board_name', $board->board_name, ['class' => 'form-control', 'id' => 'board_name', 'placeholder' => 'board_name']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::label('board_year', 'board_year:', ['class' => 'control-label']) !!}
                            {!! Form::select('board_year', $years, null, array('class' => 'form-control', 'id' => 'board_year')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input name="board_image" class="form-control" type="file" id="logo-id" >
                    @if(!$board->board_id)
                        <img class="thumbnail img-preview" src="#" title="" width="100%" height="auto">
                    @else
                        <img src="{{ asset('images/board/'. $board->board_image) }}" alt="photo" width="100%" height="auto">
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>