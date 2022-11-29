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
                                <h4 style="margin-bottom: 0px; ">App Extra Field List</h4>
                                <div class="card-header-action">
                                    <button data-toggle="collapse" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i> Add Field</button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Add Field</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Field Name*</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter category Name
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Field Type*</label>
                                                <select class="form-control" name="extra_field_type" required="" tabindex="0" aria-hidden="false">
                                                    <option value="1">Enable Disable Button</option>
                                                    <option value="2">Text Box</option>

                                                </select>
                                                <div class="invalid-feedback">
                                                    Select Field Type
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Field Key*</label>
                                                <input type="text" class="form-control" name="extra_field_key" required="" onkeypress="return blockSpecialChar(event)">
                                                <div class="invalid-feedback">
                                                    Enter Field Key
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Field Default Value</label>
                                                <input type="text" class="form-control" name="extra_field_value">
                                                <small class="text-muted">If Field Type is Enable Disable : Enable=1, Disable=0</small><br>
                                                <small class="text-muted">If Field Type is Text : You Can Add Any Value</small>
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
                                                        <th>FIELD NAME</th>
                                                        <th>FIELD TYPE</th>
                                                        <th>FIELD KEY</th>
                                                        <th>FIELD DEFAULT VALUE</th>
                                                        <th>FIELD STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Qureka URL</td>
                                                        <td>Text Box</td>
                                                        <td>qurekaurl</td>
                                                        <td>https://play130.atmequiz.com/</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                            <td><span><a href="{{url('editappextrafield')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item">Active</a>
                                                                  <a class="dropdown-item">Deactive</a>

                                                                </div>
                                                              </div>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Qureka URL</td>
                                                        <td>Text Box</td>
                                                        <td>qurekaurl</td>
                                                        <td>https://play130.atmequiz.com/</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                <td><span><a href="{{url('editappextrafield')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item">Active</a>
                                                                  <a class="dropdown-item">Deactive</a>

                                                                </div>
                                                              </div>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Qureka URL</td>
                                                        <td>Text Box</td>
                                                        <td>qurekaurl</td>
                                                        <td>https://play130.atmequiz.com/</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                    <td><span><a href="{{url('editappextrafield')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item">Active</a>
                                                                  <a class="dropdown-item">Deactive</a>

                                                                </div>
                                                              </div>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Qureka URL</td>
                                                        <td>Text Box</td>
                                                        <td>qurekaurl</td>
                                                        <td>https://play130.atmequiz.com/</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                        <td><span><a href="{{url('editappextrafield')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item">Active</a>
                                                                  <a class="dropdown-item">Deactive</a>

                                                                </div>
                                                              </div>
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
