@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">pages</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('pages.create') }}"><i class="fa fa-plus"></i>Add page</a></p>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        @foreach ($pages as $page)
                            <tr>
                                <?php $i++ ?>
                                <td>{{ $i }}</td>
                                <td>{{ $page->title or "" }}</td>
                                <td>{{ $page->status or "" }}</td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <a class="btn btn-primary" href="{{ route('pages.show', $page->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                                        <a class="btn btn-info" href="{{ route('pages.edit', $page->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                        <!-- <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a> -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach                    
                    </tbody>
                </table>
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