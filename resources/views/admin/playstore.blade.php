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
                        <li class="breadcrumb-item active"><a href="#">Account</a></li>
                    </ol>
                </nav>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Play Store Accounts</h4>


                                <div class="card-header-action">
                                    <a href="{{url('trashaccountlist')}}" class="btn btn-warning">
                                        <i class="far fa-trash-alt"></i> Trash Account List
                                    </a>

                                    <a href="{{url('createaccount')}}">
                                        <button data-toggle="collapse" class="btn btn-primary badge-shadow"><i class="fa fa-plus"></i>Create Account</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" placeholder="Search Account Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="example">
                                            <div class="input-group">
                                                <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                <input type="text" name="datefilter" class="form-control" placeholder="Account Created Date" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <div class="search_select_box">
                                                <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                    <option value="">Filter By </option>
                                                    <option value="hina">Active Account</option>
                                                    <option value="minal">Suspend Account</option>
                                                    <option value="rina">Ascending By Name</option>
                                                    <option value="nidhi">Descending By Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <button type="button" class="btn mb-1 btn-primary">Search</button>
                                        <button type="button" class="btn mb-1 btn-info">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Diamond Stone Brand</h6>
                                            </div>
                                            <div class="col-auto">
                                                <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 60px; width:60px;">
                                                    <span style="font-size: 32px; margin: 20px 15px;">D</span>
                                                </figure> -->
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">6</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">9 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Emma Stone Apps</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">2</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">54</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">15 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">A Suspended Apps</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/2.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">19</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">7 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Graphics Apps</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/3.svg')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">6</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">23 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">JKA Apps Studio</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/4.jpg')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">24</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">17</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">18 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Heritage Apps Studio</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/5.webp')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">11</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">21 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">SmaartY Apps Studio</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/6.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">10</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">11 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Radhunandan Apps Studio</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/7.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">21</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">6 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">KKR Apps Studio</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/8.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">12</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">14</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">29 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Not Published</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/9.jpg')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">21</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">13 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">PDF READER App</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/10.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">21</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">30 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">MBK Brand</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/11.webp')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">12</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">06</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">17 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card" style="background-color: #EC920C;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">Brand Pit</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture">
                                                    <img src="{{URL:: asset('assets/images/12.png')}}" id="preview" class="img-thumbnail rounded-circle" width="60" height="60" style="border:#54ca68 2px solid;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">10</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Reject</div>
                                                    <span class="text-info mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Removed</div>
                                                    <span class="text-warning mr-2 font-weight-bold">0</span>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item" style="border-right: 0px solid !important; ">
                                                    <div style="font-size: 12px; color:#666666;">Suspend</div>
                                                    <span class="text-danger mr-2 font-weight-bold">11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 0px 10px;">
                                <div class="row" style="color:#fff;">
                                    <div class="col" style="margin-top:3px;">
                                        <h6 class="card-title">3 Apps</h6>
                                    </div>
                                    <div class="col-auto">
                                        <i style="font-size: 12px; margin-right: 10px">Created Date 03-05-2021</i>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success-outline" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; background: none; ">
                                       <i class="fa fa-cog"></i>
                                       </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">SETTINGS</div>
                                                <a class="dropdown-item has-icon" href="{{url('playstoreedit')}}"><i class="fas fa-edit"></i> Edit</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updatePinStatus(2,1);"><i class="fas fa-thumbtack"></i> Pinned Account</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="updateAccountStatus(2,1);"><i class="fas fa-exclamation-circle"></i> Suspend</a>

                                                <a class="dropdown-item has-icon" href="#" onclick="trashAccount(2,1);"><i class="fas fa-trash-alt"></i> Trash</a>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @endsection
