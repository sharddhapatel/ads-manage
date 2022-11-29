@extends('admin.header-footer')
@section('contant')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Trash App List</h4>


                                <div class="card-header-action">
                                    <a href="{{url('adduser')}}" data-toggle="modal" data-target="#add-category"><button data-toggle="collapse" class="btn btn-warning badge-shadow">Delete Selected Apps</button></a>
                                </div>
                                <!-- model start -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong></strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-6">
                                                            <h4 class="modal-title"><strong>Please select app...</strong></h4>
                                                        </div>
                                                        <div class="col-3"></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- <div class="modal-footer"> -->
                                            <div class="row mb-4">
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">OK</button>
                                                </div>
                                                <div class="col-4"></div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- model end -->
                            </div>

                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" id="checkboxalll"></th>
                                                        <th>NO</th>
                                                        <th>#ID</th>
                                                        <th>APP LOGO</th>
                                                        <th>APP ACCOUNT NAME</th>
                                                        <th>APP NAME</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>1584</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="50px"></td>
                                                        <td>Demo</td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>

                                                        </td>
                                                        <td>
                                                            <a href="{{url('playstorelist')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Restore
                                                            </a>

                                                            <a href="{{url('playstorelist')}}"><button class="btn btn-icon btn-danger" onclick="deleteApp(1616);"><i class="far fa-trash-alt"></i> Delete Permanent</button></a>


                                                        </td>
                                                    </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @endsection
