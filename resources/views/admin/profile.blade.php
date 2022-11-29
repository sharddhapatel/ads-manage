@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card author-box">
                            <div class="card-body">
                                <div class="author-box-center">



                                    <img alt="image" src="{{URL:: asset('assets/images/1.png')}}" class="rounded-circle author-box-picture">

                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                        <a href="#">Jayesh Busa</a>
                                    </div>
                                    <div class="author-box-job">Super Admin</div>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>User Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="py-4">
                                    <p class="clearfix">
                                        <span class="float-left">
                                Name
                              </span>
                                        <span class="float-right text-muted">
                               Jayesh Busa                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                Email
                              </span>
                                        <span class="float-right text-muted">
                                jayeshbusa@gmail.com                        </span>
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">



                            <div class="padding-20">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">Change Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Edit Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                        <div class="row">
                                            <div class="col-12 col-md-8 col-lg-8">




                                                <div class="card-body">

                                                    <form class="needs-validation" novalidate="" method="post">
                                                        <div class="form-group">
                                                            <label>Enter Old Password</label>
                                                            <input type="text" class="form-control" name="old_pass" value="" placeholder="Enter Old Password" required="">
                                                            <div class="invalid-feedback">
                                                                Enter Old Password
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Enter New Password </label>
                                                            <input type="text" class="form-control" name="new_pass" value="" placeholder="Enter New Password " required="">
                                                            <div class="invalid-feedback">
                                                                Enter New Password
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Enter Confirm Password </label>
                                                            <input type="text" class="form-control" name="confirm_pass" value="" placeholder="Enter Confirm Password" required="">
                                                            <div class="invalid-feedback">
                                                                Enter Confirm Password
                                                            </div>
                                                        </div>

                                                        <div class="card-footer text-center">
                                                            <input type="Submit" name="changePassword" class="btn btn-primary" value="Change Password">

                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">

                                        <div class="card" id="addplatform">
                                            <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                                                <div class="card-header">
                                                    <h4>Edit Profile Photo</h4>
                                                </div>
                                                <div class="card-body">

                                                    <div class="card-body text-center">
                                                        <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 100px; width:100px;" data-initial="J">
                                                            <img src="" style="display: none;" id="preview" class="img-thumbnail rounded-circle">
                                                        </figure> -->
                                                        <div class="card-body text-center">
                                                            <img src="{{URL:: asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">
                                                        </div>

                                                    </div>


                                                    <div class="form-group">
                                                        <label>User Photo</label>
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
                                                            <input type="text" class="form-control" name="image_link" placeholder="Enter Direct Image Link">
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="card-footer text-center">
                                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">

                                                </div>
                                            </form>
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
