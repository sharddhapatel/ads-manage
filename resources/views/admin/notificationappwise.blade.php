@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">

                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Total Apps</div>
                                        <div class="profile-widget-item-value mr-2 font-weight-bold" style="color: #6777ef">178</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Not Publish</div>
                                        <div class="profile-widget-item-value mr-2 font-weight-bold" style="color: #6777ef">67</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Publish</div>
                                        <div class="profile-widget-item-value text-success mr-2 font-weight-bold">44</div>
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
                                        <div class="profile-widget-item-value text-danger mr-2 font-weight-bold">67</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
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
                                                        <option value="">Filter Category</option>
                                                        <option value="hina">All format video projector simulator</option>
                                                        <option value="minal">All format video projector simulator 2021</option>
                                                        <option value="rina">All format video projector simulator 2021</option>
                                                        <option value="nidhi">All format HD video player</option>
                                                        <option value="shraddha">All format  video player</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value="">Filter Status</option>
                                                        <option value="hina">Art & Design</option>
                                                        <option value="minal">Auto & vehicals</option>
                                                        <option value="rina">Beauty</option>
                                                        <option value="nidhi">Bussiness</option>
                                                        <option value="shraddha">Comics</option>
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
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header mt-2">
                                <h4 style="margin-bottom: 0px;">All Application List</h4>

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
                                                        <th>DOWNLOAD</th>
                                                        <th>OTHER DETAILS</th>
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
                                                        <td>0</td>
                                                        <td>
                                                            <h6>demo</h6>
                                                            <br> Finance <br>
                                                            <span class="text-muted">Platform - Play Store </span>
                                                        </td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{url('sendnotification')}}"><i class="fas fa-bell"></i> Push Notification</a>
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
                                                        <td>0</td>
                                                        <td>
                                                            <h6>demo</h6>
                                                            <br> Finance <br>
                                                            <span class="text-muted">Platform - Play Store </span>
                                                        </td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{url('sendnotification')}}"><i class="fas fa-bell"></i> Push Notification</a>
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
                                                        <td>0</td>
                                                        <td>
                                                            <h6>demo</h6>
                                                            <br> Finance <br>
                                                            <span class="text-muted">Platform - Play Store </span>
                                                        </td>
                                                        <td><span class="badge badge-success px-2">Publish</span>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{url('sendnotification')}}"><i class="fas fa-bell"></i> Push Notification</a>
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
                                                        <td>0</td>
                                                        <td>
                                                            <h6>demo</h6>
                                                            <br> Finance <br>
                                                            <span class="text-muted">Platform - Play Store </span>
                                                        </td>
                                                        <td><span class="badge badge-info px-2">Not Publish</span>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{url('sendnotification')}}"><i class="fas fa-bell"></i> Push Notification</a>
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
                                                        <td>0</td>
                                                        <td>
                                                            <h6>demo</h6>
                                                            <br> Finance <br>
                                                            <span class="text-muted">Platform - Play Store </span>
                                                        </td>
                                                        <td><span class="badge badge-success px-2">Publish</span>
                                                            <td>
                                                                <a class="btn btn-primary" href="{{url('sendnotification')}}"><i class="fas fa-bell"></i> Push Notification</a>
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
