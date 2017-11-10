@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">categories</h3>
                <p><a class="btn btn-primary icon-btn" href="{{ route('categories.create') }}"><i class="fa fa-plus"></i>Add categories</a></p>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>order</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        @foreach ($categories as $categorie)
                            <tr>
                                <?php $i++ ?>
                                <td>{{ $i }}</td>
                                <td>{{ $categorie->order or "" }}</td>
                                <td>{{ $categorie->name or "" }}</td>
                                <td>{{ $categorie->slug or "" }}</td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <a class="btn btn-primary" href="{{ route('categories.show', $categorie->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                                        <a class="btn btn-info" href="{{ route('categories.edit', $categorie->id) }}"><i class="fa fa-lg fa-edit"></i></a>
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