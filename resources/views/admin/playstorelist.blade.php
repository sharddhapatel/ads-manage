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
                        <li class="breadcrumb-item "><a href="{{url('apppublishplatform')}}">Application Publish Platform</a></li>
                        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item active"><a href="#">Application List</a></li>
                    </ol>
                </nav>


                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">

                                <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture" style="height: 100px; width:100px;">
                                    <img src="images/logo1.png" style="display: none;" id="preview" class="img-thumbnail rounded-circle">
                                </figure> -->
                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">
                                </div>


                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Not Publish</div>
                                        <div class="profile-widget-item-value mr-2 font-weight-bold" style="color: #6777ef">8</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Publish</div>
                                        <div class="profile-widget-item-value text-success mr-2 font-weight-bold">6</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Reject</div>
                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold">0</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Remove</div>
                                        <div class="profile-widget-item-value text-warning mr-2 font-weight-bold">0</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Suspend</div>
                                        <div class="profile-widget-item-value text-danger mr-2 font-weight-bold">12</div>
                                    </div>

                                </div>
                            </div>
                            <div class="profile-widget-description pb-0">
                                <div class="row">
                                    <div class="col-12 col-sm-10 col-lg-10">

                                        <span class="mr-1 font-weight-bold" style="font-size: 20px; color: #6777ef">Diamond Stone Brand</span>
                                        <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"> / </div> Play Store Account
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-lg-2">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-6 b-r">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">diamondstonebrand@gmail.com</p>
                                    </div>

                                    <div class="col-md-2 col-6 b-r">
                                        <strong>Created Date</strong>
                                        <br>
                                        <p class="text-muted">03-05-2021 </p>
                                    </div>

                                    <div class="col-md-2 col-6 b-r">
                                        <strong>Attech Device</strong>
                                        <br>
                                        <p class="text-muted">15 </p>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <strong>Attech Internet</strong>
                                        <br>
                                        <p class="text-muted"> 2</p>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <strong>Attech Card</strong>
                                        <br>
                                        <p class="text-muted"> 5</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-5 b-r">

                                        <address>
                                       <strong>Other Details:</strong><span class="text-muted"> Nothing</span><br>
                                                                  </address>

                                    </div>
                                    <div class="col-md-4 col-5 b-r">
                                        <address>
                                       <strong>Bank Details:</strong><span class="text-muted"> Not compalsory</span><br>
                                        </address>

                                    </div>
                                    <div class="col-md-4 col-2 b-r">
                                        <strong>Account Status</strong>
                                        <br>
                                        <!-- any one select account active or suspend -->
                                        <span class="badge badge-success">Account Active</span>
                                        <span class="badge badge-danger">Account Suspend - <span class="badge-transparent">Date :  13-05-2021</span></span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12">

                                        <p> <strong>Privacy Policy Link:</strong> <span class="text-muted">: https://emmastoneapps.blogspot.com/2021/03/privacy-policy.html </span> </p>

                                    </div>

                                </div>
                                <div id="filterapp"></div>

                            </div>
                            <div class="card-footer text-center pt-0">
                                <div class="font-weight-bold mb-2 text-small"></div>

                                <a href="{{url('trashplaystorelist')}}" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i> Trash Application List
                                </a>

                                <a href="{{url('createapplication')}}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add New Application
                                </a>



                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Application List</h4>


                                <div class="card-header-action">
                                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary collapsed" id="showfilterdiv">
                                        <i class="fas fa-filter"></i> Filter
                                    </a>
                                    <!-- <a href="#collapseExample"><button data-toggle="collapse" class="btn btn-primary badge-shadow"><i class="fa fa-filter" style="margin-right:8px;"></i>FILTER</button></a> -->
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card-body">
                                    <form class="form-inline" method="post" action="">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-6">

                                                <input type="text" name="search_appId" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Search AppID" value="">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6">
                                                <input type="text" name="search_name" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Search App Name" value="">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6">
                                                <input type="text" name="search_packageName" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Search Package Name" value="">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="datefilter" class="form-control" value="" placeholder="Account Created Date" style="width: 220px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6">

                                                <select class="custom-select  mr-sm-2" name="filterCat" tabindex="0" aria-hidden="false">
                                      <option value="" selected="">Filter Category</option>
                                                                 <option value="15">Art &amp; Design</option>
                                                                <option value="16">Auto &amp; Vehicles</option>
                                                                <option value="17">Beauty</option>
                                                                <option value="18">Books &amp; Reference</option>
                                                                <option value="6">Business</option>
                                                                <option value="19">Comics</option>
                                                                <option value="11">Communications</option>
                                                                <option value="20">Dating</option>
                                                                <option value="12">Education</option>
                                                                <option value="8">Entertainment</option>
                                                                <option value="21">Events</option>
                                                                <option value="22">Finance</option>
                                                                <option value="23">Food &amp; Drink</option>
                                                                <option value="4">Games</option>
                                                                <option value="14">Health &amp; Fitness</option>
                                                                <option value="24">House &amp; Home</option>
                                                                <option value="25">Libraries &amp; Demo</option>
                                                                <option value="26">Lifestyle</option>
                                                                <option value="27">Maps &amp; Navigation</option>
                                                                <option value="28">Medical</option>
                                                                <option value="10">Music &amp; Audio</option>
                                                                <option value="29">News &amp; Magazines</option>
                                                                <option value="35">Other</option>
                                                                <option value="30">Parenting</option>
                                                                <option value="13">Personalization</option>
                                                                <option value="1">Photography</option>
                                                                <option value="9">Productivity</option>
                                                                <option value="31">Shopping</option>
                                                                <option value="5">Social</option>
                                                                <option value="32">Sports</option>
                                                                <option value="7">Tools</option>
                                                                <option value="33">Travel &amp; Local</option>
                                                                <option value="3">Video Players &amp; Editors</option>
                                                                <option value="34">Weather</option>
                                                             </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6">

                                                <select class="custom-select mr-sm-2 " name="filterPlacement" tabindex="0" aria-hidden="false">
                                             <option value="" selected="">Filter Placement</option>
                                                                               <option value="Admob">Admob</option>
                                                                               <option value="Facebook audience network">Facebook audience network</option>
                                                                               <option value="Unity">Unity</option>
                                                                               <option value="AppNext">AppNext</option>
                                                                               <option value="StartApp">StartApp</option>
                                                                               <option value="Qureka">Qureka</option>
                                                                               <option value="AD Manager">AD Manager</option>
                                                                               <option value="IronSource">IronSource</option>
                                                                               <option value="Mopub">Mopub</option>
                                                                               <option value="Tapdaq">Tapdaq</option>
                                                                               <option value="My Custom Ads">My Custom Ads</option>
                                                                               <option value="No Any Placement">No Any Placement</option>
                                          </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 mt-2">

                                                <select class="custom-select" name="filterStatus" tabindex="0" aria-hidden="false">
                                            <option value="" selected="">Filter Status......</option>
                                            <option value="NotPublish">Not Publish</option>
                                            <option value="Publish">Publish</option>
                                            <option value="Reject">Reject</option>
                                            <option value="Remove">Remove</option>
                                            <option value="Suspend">Suspend</option>

                                            </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 mt-2">


                                                <select class="custom-select mr-sm-2" name="filterLockStatus" tabindex="0" aria-hidden="false">
                                             <option value="" selected="">Filter Lock/Unlock</option>
                                             <option value="1">Locked Apps</option>
                                             <option value="0">Unlock Apps</option>

                                          </select>
                                            </div>


                                            <input type="submit" class="btn btn-primary mt-2" value="Search" name="search">
                                            <a href="" class="btn btn-info mt-2 ml-2">Reset</a>

                                        </div>
                                </div>
                                </form>
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
                                                        <th>APPLICATION LIST</th>
                                                        <th>APP CATEGORY</th>
                                                        <th>DOWNLOAD</th>
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
                                                        <td>Games</td>
                                                        <td>0</td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td><span><a href="{{url('createapplicationsetup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a  style="color: #fff;" href="{{url('sendnotification')}}"><i class="fa fa-bell color-muted m-r-5"></i></a>

                                                            <div class="dropdown d-inline mr-2">
                                                                    <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      <i class="fas fa-ellipsis-h"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item" style="background-color: green; padding:10px; color:#fff;">Settings</a>
                                                                        <a href="{{url('createapplicationsetup')}}" class="dropdown-item">Edit</a>
                                                                        <a href="{{url('sendnotification')}}" class="dropdown-item">Push Notification</a>
                                                                        <a href="#" class="dropdown-item" onclick="transferApp(1670);" data-toggle="modal" data-target="#createAppModal">Transfer to Other Account</a>
                                                                        <a href="{{url('createcustomad')}}" class="dropdown-item">Create CustomAd</a>
                                                                        <a href="{{url('appwisecustomadlist')}}" class="dropdown-item">Show CustomAd</a>
                                                                        <!-- <a href="createapplicationsetup.html" class="dropdown-item">Not Publish</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Publish On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Reject On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Remove On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Suspend On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">pinned Application</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Lock App</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Trash</a> -->

                                                                    </div>
                                                                </div>
                                                            </td>
                                                    </tr>
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
                                                            <ul class="list-unstyled order-list">
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                            </ul>
                                                        </td>
                                                        <td>Games</td>
                                                        <td>0</td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td><span><a href="{{url('createapplicationsetup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a  style="color: #fff;" href="{{url('sendnotification')}}"><i class="fa fa-bell color-muted m-r-5"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                    <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      <i class="fas fa-ellipsis-h"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item" style="background-color: green; padding:10px; color:#fff;">Settings</a>
                                                                        <a href="{{url('createapplicationsetup')}}" class="dropdown-item">Edit</a>
                                                                        <a href="{{url('sendnotification')}}" class="dropdown-item">Push Notification</a>
                                                                        <a href="#" class="dropdown-item" onclick="transferApp(1670);" data-toggle="modal" data-target="#createAppModal">Transfer to Other Account</a>
                                                                        <a href="{{url('createcustomad')}}" class="dropdown-item">Create CustomAd</a>
                                                                        <a href="{{url('appwisecustomadlist')}}" class="dropdown-item">Show CustomAd</a>
                                                                        <!-- <a href="createapplicationsetup.html" class="dropdown-item">Not Publish</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Publish On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Reject On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Remove On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Suspend On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">pinned Application</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Lock App</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Trash</a> -->

                                                                    </div>
                                                                </div></span>
                                                            </td>
                                                    </tr>
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
                                                            <ul class="list-unstyled order-list">
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                            </ul>
                                                        </td>
                                                        <td>Games</td>
                                                        <td>0</td>
                                                        <td><span class="badge badge-success px-2">Publish</span>
                                                            <td><span><a href="{{url('createapplicationsetup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a  style="color: #fff;" href="{{url('sendnotification')}}"><i class="fa fa-bell color-muted m-r-5"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                    <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      <i class="fas fa-ellipsis-h"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item" style="background-color: green; padding:10px; color:#fff;">Settings</a>
                                                                        <a href="{{url('createapplicationsetup')}}" class="dropdown-item">Edit</a>
                                                                        <a href="{{url('sendnotification')}}" class="dropdown-item">Push Notification</a>
                                                                        <a href="#" class="dropdown-item" onclick="transferApp(1670);" data-toggle="modal" data-target="#createAppModal">Transfer to Other Account</a>
                                                                        <a href="{{url('createcustomad')}}" class="dropdown-item">Create CustomAd</a>
                                                                        <a href="{{url('appwisecustomadlist')}}" class="dropdown-item">Show CustomAd</a>
                                                                        <!-- <a href="createapplicationsetup.html" class="dropdown-item">Not Publish</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Publish On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Reject On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Remove On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Suspend On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">pinned Application</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Lock App</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Trash</a> -->

                                                                    </div>
                                                                </div></span>
                                                            </td>
                                                    </tr>
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
                                                            <ul class="list-unstyled order-list">
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                            </ul>
                                                        </td>
                                                        <td>Games</td>
                                                        <td>0</td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td><span><a href="{{url('createapplicationsetup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a  style="color: #fff;" href="{{url('sendnotification')}}"><i class="fa fa-bell color-muted m-r-5"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                    <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      <i class="fas fa-ellipsis-h"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item" style="background-color: green; padding:10px; color:#fff;">Settings</a>
                                                                        <a href="{{url('createapplicationsetup')}}" class="dropdown-item">Edit</a>
                                                                        <a href="{{url('sendnotification')}}" class="dropdown-item">Push Notification</a>
                                                                        <a href="#" class="dropdown-item" onclick="transferApp(1670);" data-toggle="modal" data-target="#createAppModal">Transfer to Other Account</a>
                                                                        <a href="{{url('createcustomad')}}" class="dropdown-item">Create CustomAd</a>
                                                                        <a href="{{url('appwisecustomadlist')}}" class="dropdown-item">Show CustomAd</a>
                                                                        <!-- <a href="createapplicationsetup.html" class="dropdown-item">Not Publish</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Publish On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Reject On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Remove On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Suspend On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">pinned Application</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Lock App</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Trash</a> -->

                                                                    </div>
                                                                </div></span>
                                                            </td>
                                                    </tr>
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
                                                        <td>Games</td>
                                                        <td>0</td>
                                                        <td><span class="badge badge-success px-2">Publish</span>
                                                            <td><span><a href="{{url('createapplicationsetup')}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i> </a>
                                                            <a  style="color: #fff;" href="{{url('sendnotification')}}"><i class="fa fa-bell color-muted m-r-5"></i></a>
                                                            <div class="dropdown d-inline mr-2">
                                                                    <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                      <i class="fas fa-ellipsis-h"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a href="" class="dropdown-item" style="background-color: green; padding:10px; color:#fff;">Settings</a>
                                                                        <a href="{{url('createapplicationsetup')}}" class="dropdown-item">Edit</a>
                                                                        <a href="{{url('sendnotification')}}" class="dropdown-item">Push Notification</a>
                                                                        <a href="#" class="dropdown-item" onclick="transferApp(1670);" data-toggle="modal" data-target="#createAppModal">Transfer to Other Account</a>
                                                                        <a href="{{url('createcustomad')}}" class="dropdown-item">Create CustomAd</a>
                                                                        <a href="{{url('appwisecustomadlist')}}" class="dropdown-item">Show CustomAd</a>
                                                                        <!-- <a href="createapplicationsetup.html" class="dropdown-item">Not Publish</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Publish On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Reject On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Remove On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Suspend On Play Store</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">pinned Application</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Lock App</a>
                                                                        <a href="createapplicationsetup.html" class="dropdown-item">Trash</a> -->

                                                                    </div>
                                                                </div></span>
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
