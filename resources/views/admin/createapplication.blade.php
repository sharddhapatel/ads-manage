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
                        <div class="collapse show">
                            <div class="card">
                                <form class="needs-validation" enctype="multipart/form-data" method="post">
                                    <div class="card-header">
                                        <h4>Create User</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body text-center">
                                            <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style="height: 100px; width: 100px"> -->
                                            <img src="{{URL:: asset('assets/images/logo1.png')}}" class="avatar" id="preview" class="img-thumbnail rounded-circle">
                                            <!-- </figure> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Application Logo</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                            Upload
                                                            <input type="file" name="logo_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                        </div>
                                                        <span style="margin-left: 20px; margin-right: 20px;">OR</span>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="logo_link" placeholder="Enter Direct Image Link">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Application Category*</label>
                                            <select class="form-control" name="user_role" required="" tabindex="0" aria-hidden="false">
                                             <option value="">Choose Category</option>
                                                                           <option value="Admin">Admin</option>
                                                                           <option value="Developer">Developer</option>
                                                                           <option value="Designer">Designer</option>
                                                                           <option value="Manager">Manager</option>
                                                                        </select>
                                            <div class="invalid-feedback">
                                                Choose Category
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Application Name*</label>
                                            <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                            <input type="text" class="form-control" name="platform_name" required="">
                                            <div class="invalid-feedback">
                                                Enter application Name
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Package Name*</label>
                                            <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                            <input type="text" class="form-control" name="platform_name" required="">
                                            <div class="invalid-feedback">
                                                Enter app package name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" data-toggle="modal" data-target="#add-category"><input type="Submit" name="Submit" class="btn btn-primary" value="Create App"></a>
                                        <a href="{{url('createapplicationsetup')}}" data-target="createapplicationsetup.html"><input type="button" name="Submit" class="btn btn-primary" value="Create App & Next Setup"></a>
                                        <input type="button" name="Submit" class="btn btn-danger" value="Reset">

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
                                                                <h4 class="modal-title"><strong>Please select Category...</strong></h4>
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
                                    <!-- <div class="modal fade none-border" id="add-category" aria-modal="true">
                                        <div class="swal-text" style="">Please Select Category</div>
                                        <div class="swal-footer">
                                            <div class="swal-button-container">

                                                <button class="swal-button swal-button--confirm">OK</button>

                                                <div class="swal-button__loader">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-lg-2"></div>
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
