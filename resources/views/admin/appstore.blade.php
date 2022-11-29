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
                                <h4 style="margin-bottom: 0px;">App Store Accounts</h4>


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
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">demo</h6>
                                            </div>
                                            <div class="col-auto">
                                                <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 60px; width:60px;" data-initial="d">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">1</span>
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
                                                    <span class="text-danger mr-2 font-weight-bold">0</span>
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
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">demo</h6>
                                            </div>
                                            <div class="col-auto">
                                                <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 60px; width:60px;" data-initial="d">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">1</span>
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
                                                    <span class="text-danger mr-2 font-weight-bold">0</span>
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
                        <div class="card" style="background-color: #4EA254;  ">
                            <div class="card" style="margin: 5px;">
                                <a style="text-decoration: none;" href="{{url('playstorelist')}}">
                                    <div class="card-body card-type-3">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="mb-0 font-weight-bold" style="color: #666666">demo</h6>
                                            </div>
                                            <div class="col-auto">
                                                <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 60px; width:60px;" data-initial="d">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row" style="color: #000">
                                            <div class="col-3 col-md-3 col-lg-3 text-center" style="padding: 0 9px !important;">
                                                <div class="profile-widget-item">
                                                    <div style="font-size: 12px; color:#666666;">Publish</div>
                                                    <span class="text-success mr-2 font-weight-bold">1</span>
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
                                                    <span class="text-danger mr-2 font-weight-bold">0</span>
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
