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
                                <button data-toggle="collapse" style="float: right;" class="btn btn-primary badge-shadow collapsed" id="addstatebtn" data-target="#collapseExample" aria-expanded="false"><i class="fa fa-plus"></i> Create Notification Group</button>
                            </div>
                            <div class="collapse" id="collapseExample" style="">
                                <div class="card" id="addstate">
                                    <form class="needs-validation" novalidate="" method="post">
                                        <div class="card-header">
                                            <h4>Create Group</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Group Name</label>
                                                <input type="text" class="form-control" name="notification_group_name" required="">
                                                <div class="invalid-feedback">
                                                    Enter Group Name
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>One Signal AppID</label>
                                                <input type="text" class="form-control" name="notification_group_OneSignalAppID" required="">
                                                <div class="invalid-feedback">
                                                    Enter OneSignalAppID Name
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>One Signal API Key</label>
                                                <input type="text" class="form-control" name="notification_group_OneSignalAPIKey" required="">
                                                <div class="invalid-feedback">
                                                    Enter OneSignalAPIKey
                                                </div>
                                            </div>
                                            <!-- <div class="summernote">
                                                <h3>Default Summernote</h3>
                                            </div> -->
                                            <div class="form-group">
                                                <label>Group Details</label>
                                                <div class="summernote" style="height:36px;">

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
                                <h4 style="margin-bottom: 0px;">Group List </h4>


                            </div>

                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>#ID</th>
                                                        <th>GROUP NAME</th>
                                                        <th>ONE SIGNAL DETAILS</th>
                                                        <th>OTHER DETAILS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1445</td>
                                                        <td>
                                                            Hashtag Apps
                                                        </td>
                                                        <td class="sorting_1">200ff3ee-6199-498f-884a-c4c4de0bc730 <br> NzNmMzhjNDYtZTFlMy00OWE2LTk3MmYtOTA3ZjI2NzhhNDQ3 </td>
                                                        <td>Hashtag Apps</td>
                                                        <td><span><a href="{{url('editnotificationgroupwise')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('sendnotificationgroupwise')}}"><i class="fas fa-bell"></i> Push Notification</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1445</td>
                                                        <td>
                                                            Hashtag Apps
                                                        </td>
                                                        <td class="sorting_1">200ff3ee-6199-498f-884a-c4c4de0bc730 <br> NzNmMzhjNDYtZTFlMy00OWE2LTk3MmYtOTA3ZjI2NzhhNDQ3 </td>
                                                        <td>Hashtag Apps</td>
                                                        <td><span><a href="{{url('editnotificationgroupwise')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('sendnotificationgroupwise')}}"><i class="fas fa-bell"></i> Push Notification</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1445</td>
                                                        <td>
                                                            Hashtag Apps
                                                        </td>
                                                        <td class="sorting_1">200ff3ee-6199-498f-884a-c4c4de0bc730 <br> NzNmMzhjNDYtZTFlMy00OWE2LTk3MmYtOTA3ZjI2NzhhNDQ3 </td>
                                                        <td>Hashtag Apps</td>
                                                        <td><span><a href="{{url('editnotificationgroupwise')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash btn-danger"></i></a>
                                                            <a class="btn btn-primary" href="{{url('sendnotificationgroupwise')}}"><i class="fas fa-bell"></i> Push Notification</a></span>
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
