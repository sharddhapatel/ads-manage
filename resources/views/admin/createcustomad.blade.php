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
                            <div class="card-header">
                                <div class="col-10">
                                    <h4>Create Custom Ad Assets</h4>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                            <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post" id="frm_ins" name="frm_ins">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <input type="hidden" class="form-control" name="advertising_assets_id" value="">

                                            <div class="form-group">
                                                <label>Advertising Assets name*</label>
                                                <input type="text" class="form-control" name="advertising_assets_name" id="ins_advertising_assets_name">
                                                <div class="invalid-feedback">
                                                    Enter Assets name
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Account*</label>
                                                <select class="form-control" style="width: 100%" name="account_id" id="select_account_id" required="" onchange="select_Account_applist();" tabindex="0" aria-hidden="false">
                                                    <option disabled="" selected="">Choose Account</option>
                                                    <option value="17">A Suspended Apps</option>
                                                    <option value="2">demo</option>
                                                    <option value="12">Funvv Apps Studio</option>
                                                    <option value="15">Jeff Hardy Apps LLC</option>
                                                    <option value="16">New Account</option>
                                                    <option value="9">Not Published</option>
                                                    <option value="11">SmaartY Apps Studio</option>
                                                    <option value="13">Yogesh Apps</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Select Account
                                                </div>
                                            </div>
                                            <div id="containerAccountAppList">
                                                <div class="form-group">
                                                    <label>Select App*</label>
                                                    <select class="form-control" style="width: 100%;" name="advertising_assets_appid" id="ins_advertising_assets_appid" required="" tabindex="0" aria-hidden="false">
                                                        <option disabled="" selected="">Choose App</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Select App Name
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Short Decription*</label>

                                                <textarea name="advertising_assets_shortDecription" id="ins_advertising_assets_shortDecription" required="" class="form-control"> </textarea>


                                                <div class="invalid-feedback">
                                                    Enter short Decription
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Advertising Assets Banner*</label>
                                                <div style="margin-bottom:10px">
                                                    <img src="" style="display: none;" id="bannerPreview" height="150">
                                                </div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                                Upload
                                                                <input type="file" name="banner_file" accept="image/*" onchange="loadBannerFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                            </div>
                                                            <span style="margin-left: 20px;">OR</span>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="bannerImage_linkk" id="bannerImage_link" placeholder="Enter Direct Banner Link">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                            <div class="form-group">
                                                <label>Action Button Name : </label>
                                                <input type="text" class="form-control" name="advertising_assets_buttonName" value="Install" required="">
                                                <div class="invalid-feedback">
                                                    Enter Action Button Name
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Advertising Assets Rating</label>
                                                <input type="text" class="form-control numbersOnly" name="advertising_assets_rating" value="" required="">
                                                <div class="invalid-feedback">
                                                    Enter rating
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Advertising Assets Download</label>
                                                <input type="text" class="form-control" name="advertising_assets_download" value="" required="">
                                                <div class="invalid-feedback">
                                                    Enter advertising_assets_download
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Advertising Assets AdFormat*</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">
                                                        Banner
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">
                                                        Native Banner
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Native</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Interstitial</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">App
                                                        Open</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-center">

                                    <input type="button" onclick="ins_ad(document.frm_ins)" class="btn btn-success" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Custom Ad List</h4>


                                <div class="card-header-action">
                                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary collapsed" id="showfilterdiv">
                                        <i class="fas fa-filter"></i> Filter
                                    </a>
                                    <!-- <a href="#collapseExample"><button data-toggle="collapse" class="btn btn-primary badge-shadow"><i class="fa fa-filter" style="margin-right:8px;"></i>FILTER</button></a> -->
                                </div>
                            </div>
                            <div class="col-12 collapse" id="collapseExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search Apple ID">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search App Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search Package Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value="">Choose Account</option>
                                                        <option value="hina">All format video projector simulator
                                                        </option>
                                                        <option value="minal">All format video projector simulator 2021
                                                        </option>
                                                        <option value="rina">All format video projector simulator 2021
                                                        </option>
                                                        <option value="nidhi">All format HD video player</option>
                                                        <option value="shraddha">All format video player</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search Custom Ad Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value=""> App Category</option>
                                                        <option value="hina">demo - play store</option>
                                                        <option value="minal">Not publish</option>
                                                        <option value="rina">All format video projector simulator 2021
                                                        </option>
                                                        <option value="nidhi">All format HD video player</option>
                                                        <option value="shraddha">All format video player</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value="">App Status</option>
                                                        <option value="hina">Art & Design</option>
                                                        <option value="minal">Auto & vehicals</option>
                                                        <option value="rina">Beauty</option>
                                                        <option value="nidhi">Bussiness</option>
                                                        <option value="shraddha">Comics</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value="">Custom Ad Status</option>
                                                        <option value="hina">Enable</option>
                                                        <option value="minal">Disable</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-3 col-sm-6">
                                            <button type="button" class="btn mb-1 btn-primary">Search</button>
                                            <button type="button" class="btn mb-1 btn-info">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>#APP ID</th>
                                                        <th>LOGO</th>
                                                        <th>APPLICATION DETAILS</th>
                                                        <th>APP DOWNLOAD</th>
                                                        <th>AD FORMAT</th>
                                                        <th>BANNER</th>
                                                        <th>STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1445</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                            <span class="text-muted">Created Date 15-11-2021 </span>
                                                        </td>
                                                        <td>16854</td>
                                                        <td>
                                                            <div class="text-small font-weight-500 text-muted" style="width:100px; ">Banner, NativeBanner, Native, Interstitial, AppOpen</div>
                                                        </td>
                                                        <td>
                                                            <img src="{{URL:: asset('assets/images/b1.png')}}" width="200" style="margin: 5px;">
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-title font-12   bg-success active_color ">
                                                                        <b style="color: #fff;">Settings</b></div>
                                                                    <a class="dropdown-item" href="{{url('editcreatecustomad')}}">Edit</a>
                                                                    <a class="dropdown-item" href="{{url('viewsetup')}}">View
                                                                        App</a>
                                                                    <a class="dropdown-item" href="{{url('createcustomad')}}">Create Clone</a>

                                                                    <a class="dropdown-item" href="">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>1445</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                            <span class="text-muted">Created Date 15-11-2021 </span>
                                                        </td>
                                                        <td>16854</td>
                                                        <td>
                                                            <div class="text-small font-weight-500 text-muted" style="width:100px; ">Banner, NativeBanner, Native, Interstitial, AppOpen</div>
                                                        </td>
                                                        <td>
                                                            <img src="{{URL:: asset('assets/images/b2.jpg')}}" width="200" style="margin: 5px;">
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-title font-12   bg-success active_color ">
                                                                        <b style="color: #fff;">Settings</b></div>
                                                                    <a class="dropdown-item" href="{{url('editcreatecustomad')}}">Edit</a>
                                                                    <a class="dropdown-item" href="{{url('viewsetup')}}">View
                                                                        App</a>
                                                                    <a class="dropdown-item" href="{{url('createcustomad')}}">Create Clone</a>

                                                                    <a class="dropdown-item" href="">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>1445</td>
                                                        <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                            <span class="text-muted">Created Date 15-11-2021 </span>
                                                        </td>
                                                        <td>16854</td>
                                                        <td>
                                                            <div class="text-small font-weight-500 text-muted" style="width:100px; ">Banner, NativeBanner, Native, Interstitial, AppOpen</div>
                                                        </td>
                                                        <td>
                                                            <img src="{{URL:: asset('assets/images/b3.jpg')}}" width="200" style="margin: 5px;">
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-title font-12   bg-success active_color ">
                                                                        <b style="color: #fff;">Settings</b></div>
                                                                    <a class="dropdown-item" href="{{url('editcreatecustomad')}}">Edit</a>
                                                                    <a class="dropdown-item" href="{{url('viewsetup')}}">View
                                                                        App</a>
                                                                    <a class="dropdown-item" href="{{url('createcustomad')}}">Create Clone</a>

                                                                    <a class="dropdown-item" href="">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>1445</td>
                                                        <td><img src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                            <span class="text-muted">Created Date 15-11-2021 </span>
                                                        </td>
                                                        <td>16854</td>
                                                        <td>
                                                            <div class="text-small font-weight-500 text-muted" style="width:100px; ">Banner, NativeBanner, Native, Interstitial, AppOpen</div>
                                                        </td>
                                                        <td>
                                                            <img src="{{URL:: asset('assets/images/b4.png')}}" width="200" style="margin: 5px;">
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-title font-12   bg-success active_color ">
                                                                        <b style="color: #fff;">Settings</b></div>
                                                                    <a class="dropdown-item" href="{{url('editcreatecustomad')}}">Edit</a>
                                                                    <a class="dropdown-item" href="{{url('viewsetup')}}">View
                                                                        App</a>
                                                                    <a class="dropdown-item" href="{{url('createcustomad')}}">Create Clone</a>

                                                                    <a class="dropdown-item" href="">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>1445</td>
                                                        <td><img src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                            <span class="text-muted">Created Date 15-11-2021 </span>
                                                        </td>
                                                        <td>16854</td>
                                                        <td>
                                                            <div class="text-small font-weight-500 text-muted" style="width:100px; ">Banner, NativeBanner, Native, Interstitial, AppOpen</div>
                                                        </td>
                                                        <td>
                                                            <img src="{{URL:: asset('assets/images/b5.webp')}}" width="200" style="margin: 5px;">
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                              </label>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline mr-2">
                                                                <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-title font-12   bg-success active_color ">
                                                                        <b style="color: #fff;">Settings</b></div>
                                                                    <a class="dropdown-item" href="{{url('editcreatecustomad')}}">Edit</a>
                                                                    <a class="dropdown-item" href="{{url('viewsetup')}}">View
                                                                        App</a>
                                                                    <a class="dropdown-item" href="{{url('createcustomad')}}">Create Clone</a>

                                                                    <a class="dropdown-item" href="">Delete</a>
                                                                </div>
                                                            </div>
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



        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
@endsection
