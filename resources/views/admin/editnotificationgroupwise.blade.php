@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form class="needs-validation" novalidate="" method="post">
                                <div class="card-header">
                                    <h4>Edit Group</h4>
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
                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">
                                    <a href="{{url('notificationgroupwise')}}"><input type="button" name="Submit" class="btn btn-primary" value="Back"></a>
                                </div>
                            </form>
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
