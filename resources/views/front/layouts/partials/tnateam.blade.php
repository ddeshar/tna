<div class="headline"><h3>Meer Our Team</h3></div>
<ul class="thumbnails team">

    @foreach ($members as $member)
        <li class="span3">
            <div class="thumbnail-style">
                <img src="{{ asset('images/board/'. $member->board_image  ) }}" alt="{{ $member->board_name or "" }}" />
                <h3><a>{{ $member->board_name or "" }}</a> <small>{{ $member->position->bpost_name or "" }}</small></h3>
                  <p>department :  {{ $member->department->department_name or "" }} <br>
                    Branch : {{ $member->province->PROVINCE_NAME_ENG or "" }} </p>
                {{--  <ul class="unstyled inline">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>  --}}
            </div>
        </li>
    @endforeach
    
</ul><!--/thumbnails-->