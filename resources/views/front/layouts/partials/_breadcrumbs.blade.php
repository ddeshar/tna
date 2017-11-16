<div class="row-fluid breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">TNA</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{route('home')}}">Home</a> <span class="divider">/</span></li>
                @for($i = 0; $i <= count(Request::segments()); $i++)
                    <li>
                    <a href="">{{Request::segment($i)}}</a>
                    @if($i < count(Request::segments()) & $i > 0)
                        {!!'<span class="divider">/</span>'!!}
                    @endif
                    </li>
                @endfor
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->