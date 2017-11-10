@extends('back.layouts.app')

@section('title', '')

@section('header_styles')

@endsection

@section('content')
            <!-- > -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Posts</h3>
                <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i>Add Item	</a></p>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <                <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
                                    <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                    <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>                       
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