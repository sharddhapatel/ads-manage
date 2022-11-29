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
                        <li class="breadcrumb-item active"><a>Application Monetize Platform</a></li>
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
                                        <div class="section-title mb-4" style="color: #000;">Choose Support Ad Format</div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">App Id</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Banner</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Interstitial</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Native</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Rewarded Video</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Native Banner</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">App Open</label>
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
                                <h4 style="margin-bottom: 0px;">Application Monetize Platform</h4>


                                <div class="card-header-action">
                                    <button data-toggle="collapse" class="btn btn-primary badge-shadow" id="addplatform" onclick="toggleText()"><i class="fa fa-plus"></i> No Avalible</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/google-admob.svg')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>Admob</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/IMGLOGO15acd4c101ddbf06a82103d69e0c4e60.jpg')}}" style="width: 100px; height: 100px;" alt="..." class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('facebookaudiencenetworkaccount')}}">
                                            <h4>Facebook audience network</h4>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/IMGLOGOa78036aa8efc397480350a970608dad5.webp')}}" style="width: 100px; height: 100px;" alt="..." class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="admobaccount.html">

                                            <h4>Unity</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/logo.f09e2d5e.png')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>AppNext</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/startapp.png')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>StartApp</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                            <figure class="avatar mr-2 avatar-xl img-fluid" data-initial="Q" style="height: 100px; width: 100px"><span class="qureka">
                                                    Q
                                                </span>
                                                </figure>

                                                

                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>Qureka</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/AdManagerLogo.png')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>AD Manager</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/o-dkhgcc_400x400.jpg')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>IronSource</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/download.png')}}" alt="" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>Mopub</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/r8irjdnpxaprdlx947p0.webp')}}" alt="..." style="width: 100px; height: 100px;" class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>
                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>Tapdaq</h4>

                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-md-0 text-center">
                                        <div class="avatar-item" style="width: 100px; height: 100px; margin: 0 auto; margin-bottom: 20px;">

                                            <a href="{{url('admobaccount')}}">

                                                <img src="{{URL:: asset('assets/images/customads.png')}}" style="width: 100px; height: 100px;" alt="..." class="img-fluid">
                                            </a>

                                            <div class="avatar-badge">
                                                <div class="dropdown d-inline">
                                                    <i class="fas fa-cog" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-title font-10" style="background-color: #00bcd4;">
                                                            <b style="color: #fff;">Settings</b>
                                                        </div>

                                                        <a class="dropdown-item has-icon" href="{{url('eidtadmobaccount')}}"><i class="fas fa-edit"></i> Edit</a>
                                                        <a href="#" class="dropdown-item has-icon" onclick="updatePlatformStatus(17,1);"><i class="fas fa-exclamation-circle"></i> Deactive</a>
                                                        <a href="{{url('editadmobplatform')}}" class="dropdown-item has-icon"><i class="fa fa-wrench"></i> Default No Of Placement</a>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <a href="{{url('admobaccount')}}">

                                            <h4>My Custom Ads</h4>

                                        </a>
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
