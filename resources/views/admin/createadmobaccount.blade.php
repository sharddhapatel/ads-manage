@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">



                <div class="row">
                    <div class="col-2 col-md-2 col-lg-2"></div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="collapse show" id="collapseExample" style="">
                            <div class="card" id="addplatform">
                                <form class="needs-validation" enctype="multipart/form-data" method="post">
                                    <div class="card-header">
                                        <h4>Create Account</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body text-center">
                                            <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style="height: 100px; width: 100px"> -->
                                            <img src="{{URL:: asset('assets/images/logo1.png')}}" class="avatar" id="preview" class="img-thumbnail rounded-circle">
                                            <!-- </figure> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Account Image</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                            Upload
                                                            <input type="file" name="logo_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                        </div>
                                                        <span style="margin-left: 20px;">OR</span>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="logo_link" placeholder="Enter Direct Image Link">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Name*</label>
                                            <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                            <input type="text" class="form-control" name="platform_name" required="">
                                            <div class="invalid-feedback">
                                                Enter Platform Name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="Submit" name="Submit" class="btn btn-primary" value="Create">
                                        <input type="Submit" name="Submit" class="btn btn-danger" value="Reset">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-lg-2"></div>
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
