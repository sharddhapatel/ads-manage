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
                            <div class="card-header" style="border-bottom: none;">
                                <h4 style="margin-bottom: 0px; ">IP Address List</h4>
                                <div class="card-header-action">
                                    <button data-toggle="collapse" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i>Add Ip Address</button>

                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Add IP Address</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>IP Address - IP</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter IP Address - IP
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>IP Address Name</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter IP Address Name
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <input type="Submit" name="Submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>IP ADDRESS - IP</th>
                                                        <th>IP ADDRESS NAME</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>5559556665</td>
                                                        <td>sbcmkmk</td>
                                                        <td><span><a href="{{url('editipaddress')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>5559556665</td>
                                                        <td>sbcmkmk</td>
                                                        <td><span><a href="{{url('editipaddress')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>5559556665</td>
                                                        <td>sbcmkmk</td>
                                                        <td><span><a href="{{url('editipaddress')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
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

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @endsection
