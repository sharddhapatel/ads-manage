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
                                <h4 style="margin-bottom: 0px; ">App Category List</h4>
                                <div class="card-header-action">
                                    <button data-toggle="collapse" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i>Add App Category</button>
                                    <a href="{{url('trashappcategory')}}" class="btn btn-warning">
                                        <i class="far fa-trash-alt"></i> Trash Platform List
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Add Category</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter category Name
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
                                                        <th>#ID</th>
                                                        <th>APP CATEGORY NAME</th>
                                                        <th>STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>35</td>
                                                        <td>other</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                            <td><span><a href="{{url('editappcategory')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
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
                                                        <td>35</td>
                                                        <td>other</td>
                                                        <td><span class="badge badge-danger px-2">Deactive</span>
                                                                <td><span><a href="{{url('editappcategory')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
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
                                                        <td>35</td>
                                                        <td>other</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                    <td><span><a href="{{url('editappcategory')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
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
                                                        <td>35</td>
                                                        <td>other</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                        <td><span><a href="{{url('editappcategory')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
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
                                                        <td>5</td>
                                                        <td>35</td>
                                                        <td>other</td>
                                                        <td><span class="badge badge-success px-2">Active</span>
                                                                            <td><span><a href="{{url('editappcategory')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
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
