@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <span class="float-right display-5 opacity-5"><img src="{{URL:: asset('assets/images/d1.png')}}" alt=""></span>
                                <h3 class="card-title text-white">Today</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">302</h2>
                                    <p class="text-white mb-0">73.2% <span>Decrease</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <span class="float-right display-5 opacity-5"><img src="{{URL:: asset('assets/images/d2.png')}}" alt=""></span>
                                <h3 class="card-title text-white">Yesterday</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">1,127</h2>
                                    <p class="text-white mb-0">6.2% <span>Decrease</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <span class="float-right display-5 opacity-5"><img src="{{URL:: asset('assets/images/d3.png')}}" alt=""></span>
                                <h3 class="card-title text-white">Last 7 Days</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">8972</h2>
                                    <p class="text-white mb-0">14.9% <span>Decrease</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <span class="float-right display-5 opacity-5"><img src="{{URL:: asset('assets/images/d4.png')}}" alt=""></span>
                                <h3 class="card-title text-white">Last 30 Days</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">40,557</h2>
                                    <p class="text-white mb-0">17% <span>Decrease</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Date Wise Download Chart</h4>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Last 90 Days</a></li>
                                                <!-- <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <div class="example">
                                                        <div class="input-group">
                                                            <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                            <input type="text" name="datefilter" class="form-control" placeholder="Filter Date Range" />
                                                        </div>
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
                                                                <option value="">App Name </option>
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
                                                                <option value="">Account </option>
                                                                <option value="hina">demo - play store</option>
                                                                <option value="minal">Not publish</option>
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
                                                                <option value="">Category</option>
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
                                                                <option value="">Platform</option>
                                                                <option value="hina">Play store</option>
                                                                <option value="minal">App store</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <button type="button" class="btn mb-1 btn-primary">Filter</button>
                                                    <button type="button" class="btn mb-1 btn-info">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chart-wrapper">
                                        <!-- <canvas id="chart_widget_2"></canvas> -->
                                        <img src="{{URL:: asset('assets/images/chart1.PNG')}}" alt="" width="98%" height="500px">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Top Performance Apps</h4>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Last 30 Days</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <div class="example">
                                                        <div class="input-group">
                                                            <input type="text" name="datefilter" class="form-control" placeholder="Filter Date Range"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="search_select_box">
                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                <option value="">Account </option>
                                                                <option value="hina">demo - play store</option>
                                                                <option value="minal">Not publish</option>
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
                                                                <option value="">Category</option>
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
                                                                <option value="">Platform</option>
                                                                <option value="hina">Play store</option>
                                                                <option value="minal">App store</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <button type="button" class="btn mb-1 btn-primary">Filter</button>
                                                    <button type="button" class="btn mb-1 btn-info">Reset</button>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th>#TOP</th>
                                                                <th>LOGO</th>
                                                                <th>NAME</th>
                                                                <th>DOWNLOLAD</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td><img src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td><img src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>

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
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Top Performance Accounts</h4>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Last 30 Days</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <div class="example">
                                                        <div class="input-group">
                                                            <input type="text" name="datefilter" class="form-control" placeholder="Filter Date Range"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3 col-sm-6">
                                                    <button type="button" class="btn mb-1 btn-primary">Filter</button>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th>#TOP</th>
                                                                <th>NAME</th>
                                                                <th>DOWNLOLAD</th>
                                                                <th>Top 5 Apps</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span class="text-success">15,337</span> / <span class="text-info">18,845</span></td>
                                                                <td>
                                                                    <ul class="list-unstyled order-list">
                                                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="20px"></li>
                                                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="20px"></li>
                                                                    </ul>
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
