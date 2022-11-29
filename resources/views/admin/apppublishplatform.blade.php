@extends('admin.header-footer')
@section('contant')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a>Application Publish Platform</a></li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-2 col-md-2 col-lg-2"></div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="collapse show" id="collapseExample" style="display: none;">
                            <div class="card" id="addplatform">
                                <form class="needs-validation" enctype="multipart/form-data" method="post">
                                    <div class="card-header">
                                        <h4>Add Platform</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body text-center">
                                            <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style="height: 100px; width: 100px"> -->
                                            <img src="{{URL:: asset('assets/images/logo1.png')}}" class="avatar" id="preview" class="img-thumbnail rounded-circle">
                                            <!-- </figure> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Logo</label>
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
                                                <input type="text" class="form-control" name="logo_link" placeholder="Enter Direct Logo Link">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Platform Name*</label>
                                            <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                            <input type="text" class="form-control" name="platform_name" required="">
                                            <div class="invalid-feedback">
                                                Enter Platform Name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="Submit" name="Submit" class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-2 col-lg-2"></div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Application Publish Platform</h4>


                                <div class="card-header-action">
                                    <a href="{{url('deletepublishplatform')}}" class="btn btn-warning">
                                        <i class="far fa-trash-alt"></i> Trash Platform List
                                    </a>

                                    <button data-toggle="collapse" class="btn btn-primary badge-shadow" id="addplatform" onclick="toggleText()"><i class="fa fa-plus"></i> No Avalible</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">
                                            <a href="{{url('playstore')}}">

                                                <img src="{{URL:: asset('assets/images/playstore.png')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">

                                            </a>


                                        </div>
                                        <a href="{{url('playstore')}}">
                                            <h4 class="color_h4">Play Store</h4>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">
                                            <a href="{{url('appstore')}}">

                                                <img src="{{URL:: asset('assets/images/appstore.png')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">

                                            </a>


                                        </div>
                                        <a href="{{url('appstore')}}">
                                            <h4 class="color_h4">App Store</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
