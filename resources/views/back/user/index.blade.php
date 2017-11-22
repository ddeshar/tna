@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
<div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Users</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('user.create') }}"><i class="fa fa-plus"></i>Add Users</a></p>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Updated</th>
                  <th>Action</th>
              </tr>
            </thead>
              <tbody>
                <?php $i = 0 ?>
                  @foreach ($users as $user)
                  <tr>
                    <?php $i++ ?>
                    <td>{{ $i}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->updated_at->format('F d, Y') }}</td>
                    <td>
                      <div class="btn-group">
                    			<a class="btn btn-primary" href="{{ route('user.show', $user->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                    			<a class="btn btn-info" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                    	</div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('back/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection
