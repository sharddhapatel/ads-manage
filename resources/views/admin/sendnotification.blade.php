@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">

                    <div class="col-12 col-sm-12 col-lg-12">

                    </div>

                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="card-body">
                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100"><span style="margin-left: 15px; font-size:22px;">Client</span>
                                </div>


                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #6777ef;">Sending Push Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #6777ef;">OneSignal Settings</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label style="font-weight: 900;">Title *</label>

                                                    <input type="text" class="form-control" name="notification_title" value="" placeholder="Enter Title" required="">
                                                    <div class="invalid-feedback">
                                                        Enter Title
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label style="font-weight: 900;">Message *</label>


                                                    <textarea class="form-control" required="" name="notification_message" cols="80" label="notes" rows="4" wrap="virtual"></textarea>

                                                    <div class="invalid-feedback">
                                                        Enter Message
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label style="font-weight: 900;">URL (optional)</label>

                                                    <input type="text" class="form-control" name="notification_redirectUrl" placeholder="Enter Redirect URL" value="">

                                                </div>

                                                <div class="form-group">
                                                    <label style="font-weight: 900;">Image (optional)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                                    Upload
                                                                    <input type="file" name="image_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                                </div>
                                                                <span style="margin-left: 20px;">OR</span>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="image_link" id="image_link" placeholder="Enter Direct Image URL" value="">
                                                    </div>
                                                </div>

                                                <div class="form-group" id="ppimage" style="display: none;">
                                                    <img id="previeww" class="img-thumbnail" width="100" height="100">
                                                </div>






                                            </div>
                                            <div class="card-footer">
                                                <input type="Submit" name="submit_send_notification" class="btn btn-info" value="Send">
                                            </div>
                                        </form>


                                    </div>

                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <form class="needs-validation" novalidate="" method="post">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>OneSignal APP ID *</label>

                                                    <input type="text" class="form-control" name="app_onesignal_appID" value="">
                                                    <div class="invalid-feedback">
                                                        Enter OneSignal APP ID
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>OneSignal REST API Key *</label>

                                                    <input type="text" class="form-control" name="app_onesignal_restApiKey" value="">
                                                    <div class="invalid-feedback">
                                                        Enter OneSignal REST API Key
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="card-footer">
                                                <input type="Submit" name="save_settings" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Notification List</h4>


                                <div class="card-header-action">
                                    <a href="{{url('adduser')}}" data-toggle="modal" data-target="#add-category"><button data-toggle="collapse" class="btn btn-warning badge-shadow">Delete Selected Notification</button></a>
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
                                                            <h4 class="modal-title"><strong>Please Select Notification</strong></h4>
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
                                                        <th>DATE</th>
                                                        <th>NOTIFICATION</th>
                                                        <th>REDIRECT URL</th>
                                                        <th>IMAGE</th>
                                                        <th>SENT</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>15-8-2021</td>
                                                        <td>Demo</td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                              TestADSdemo
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>

                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="50px"></td>
                                                        <td>client</td>
                                                        <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
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
