@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <div class="row">
      <div class="col-md-3">
        <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
          <div class="info">
            <h4>Posts</h4>
            <p><b>{{$posts}}</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
          <div class="info">
            <h4>page</h4>
            <p><b>{{$pages}}</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>banners</h4>
            <p><b>{{$banners}}</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
          <div class="info">
            <h4>board members</h4>
            <p><b>{{$board_members}}</b></p>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('footer_scripts')
    <script src="{{ asset('back/js/plugins/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('back/js/plugins/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('back/js/plugins/jquery.vmap.sampledata.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){      
      	var map = $('#demo-map');
      	map.vectorMap({
      		map: 'world_en',
      		backgroundColor: '#fff',
      		color: '#333',
      		hoverOpacity: 0.7,
      		selectedColor: '#666666',
      		enableZoom: true,
      		showTooltip: true,
      		scaleColors: ['#C8EEFF', '#006491'],
      		values: sample_data,
      		normalizeFunction: 'polynomial'
      	});
      });
    </script>
@endsection