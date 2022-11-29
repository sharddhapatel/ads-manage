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
                                <button data-toggle="collapse" style="float: right;" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i> Create More App Group</button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Create Group</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Group Name</label>
                                                <input type="text" class="form-control" name="moreapp_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter Group Name
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Splash MoreApp AppIDs</label>
                                                <input type="text" class="form-control" name="moreapp_group_splash">

                                            </div>

                                            <div class="form-group">
                                                <label>Exit MoreApp AppIDs</label>
                                                <input type="text" class="form-control" name="moreapp_group_exit">

                                            </div>




                                        </div>
                                        <div class="card-footer">
                                            <input type="Submit" name="Submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Group List </h4>


                            </div>

                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>GROUP ID</th>
                                                        <th>GROUP NAME</th>
                                                        <th>SPLASH MOREAPP IDS</th>
                                                        <th>EXIT MORE APP IDS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>27</td>
                                                        <td>
                                                            LIVE LINE
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td><span><a href="{{url('editmoreappgroup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assignmoreappgroup')}}"><i class="fas fa-bell"></i> Assign</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>27</td>
                                                        <td>
                                                            LIVE LINE
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td><span><a href="{{url('editmoreappgroup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assignmoreappgroup')}}"><i class="fas fa-bell"></i> Assign</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>27</td>
                                                        <td>
                                                            LIVE LINE
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td><span><a href="{{url('editmoreappgroup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assignmoreappgroup')}}"><i class="fas fa-bell"></i> Assign</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>27</td>
                                                        <td>
                                                            LIVE LINE
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td><span><a href="{{url('editmoreappgroup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assignmoreappgroup')}}"><i class="fas fa-bell"></i> Assign</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>27</td>
                                                        <td>
                                                            LIVE LINE
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <div class="ex1">115,1658,1649,1643,1627,1624,1623,1628,1621,1622,1620,1619,96,89</div>
                                                            <a class="btn btn-success" style="margin-top:10px;" href="{{url('livelinemoreappgroup')}}">
                                                                <i class="far fa-eye"></i></a>
                                                        </td>
                                                        <td><span><a href="{{url('editmoreappgroup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('assignmoreappgroup')}}"><i class="fas fa-bell"></i> Assign</a></span>
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
