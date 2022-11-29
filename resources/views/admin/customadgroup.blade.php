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
                            <div class="card-header-action mt-4 mr-4 mb-4">
                                <button data-toggle="collapse" style="float: right;" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i> Create Group</button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Create Advertising Group</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Advertising Group Name</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter Group Name
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <input type="Submit" name="Submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Advertising Group List </h4>


                            </div>

                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>#GROUP ID</th>
                                                        <th>GROUP NAME</th>
                                                        <th>ADVERTISING ASSETS</th>
                                                        <th>GROUP STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>27</td>
                                                        <td>
                                                            Live Cricket TV - R
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a href="{{url('customadlist')}}" style="background-color: #666 !important; color: #fff !important;" class="btn btn-secondary btn-icon icon-left">
                                                                <i class="fas fa-plus"></i> Custom Ad List <span class="badge badge-transparent">11</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('editcustomadgroup')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger" onclick="deleteGroup(8);"><i class="far fa-trash-alt"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assigntoapps')}}">  Assign to apps</a>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>27</td>
                                                        <td>
                                                            Live Cricket TV - R
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a href="{{url('customadlist')}}" style="background-color: #666 !important; color: #fff !important;" class="btn btn-secondary btn-icon icon-left">
                                                                <i class="fas fa-plus"></i> Custom Ad List <span class="badge badge-transparent">11</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('editcustomadgroup')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger" onclick="deleteGroup(8);"><i class="far fa-trash-alt"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assigntoapps')}}">  Assign to apps</a>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>27</td>
                                                        <td>
                                                            Live Cricket TV - R
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a href="{{url('customadlist')}}" style="background-color: #666 !important; color: #fff !important;" class="btn btn-secondary btn-icon icon-left">
                                                                <i class="fas fa-plus"></i> Custom Ad List <span class="badge badge-transparent">11</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('editcustomadgroup')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger" onclick="deleteGroup(8);"><i class="far fa-trash-alt"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assigntoapps')}}">  Assign to apps</a>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>27</td>
                                                        <td>
                                                            Live Cricket TV - R
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a href="{{url('customadlist')}}" style="background-color: #666 !important; color: #fff !important;" class="btn btn-secondary btn-icon icon-left">
                                                                <i class="fas fa-plus"></i> Custom Ad List <span class="badge badge-transparent">11</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('editcustomadgroup')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger" onclick="deleteGroup(8);"><i class="far fa-trash-alt"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assigntoapps')}}">  Assign to apps</a>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>27</td>
                                                        <td>
                                                            Live Cricket TV - R
                                                        </td>
                                                        <td class="sorting_1">
                                                            <a href="{{url('customadlist')}}" style="background-color: #666 !important; color: #fff !important;" class="btn btn-secondary btn-icon icon-left">
                                                                <i class="fas fa-plus"></i> Custom Ad List <span class="badge badge-transparent">11</span>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('editcustomadgroup')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                                            <a href="#" class="btn btn-icon btn-danger" onclick="deleteGroup(8);"><i class="far fa-trash-alt"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assigntoapps')}}">  Assign to apps</a>

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
