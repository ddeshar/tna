<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h4 class="card-title">Title</h4>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('board_position', 'position') !!}
                                {!! Form::select('board_position', $Boardpost, $board->board_position, array('class' => 'form-control', 'id' => 'select')); !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('board_name', 'Name') !!}
                                {!! Form::text('board_name', $board->board_name, ['class' => 'form-control', 'id' => 'board_name', 'placeholder' => 'board_name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('board_dep', 'Department') !!}
                                {!! Form::select('board_dep', $Boarddepartments, $board->board_dep, array('class' => 'form-control', 'id' => 'select')); !!}
                            </div>
                        </div>
                        <div class="col-lg-6">   
                            <div class="form-group">
                                {!! Form::label('board_branch', 'Branch') !!}
                                {!! Form::select('board_branch', $Province, $board->board_branch, array('class' => 'form-control', 'id' => 'select')); !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('board_tel', 'Telephone') !!}
                                {!! Form::text('board_tel', $board->board_tel, ['class' => 'form-control', 'id' => 'Telephone', 'placeholder' => 'Telephone']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('board_year', 'board_year:', ['class' => 'control-label']) !!}
                                {!! Form::select('board_year',[''=>'--- เลือกปีการศึกษา ---']+$years, isset($board->board_year) ? $board->board_year : null, array('class' => 'form-control', 'id' => 'board_year')); !!}
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input name="board_image" class="form-control" type="file" id="logo-id" >
                        @if(!$board->board_id)
                            <img class="thumbnail img-preview" src="#" title="" width="20%" height="auto">
                        @else
                            <img src="{{ asset('images/board/'. $board->board_image) }}" alt="photo" width="20%" height="auto">
                        @endif
                </div>

            </div>
        </div>
    </div>
</div>