@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Live Cricket TV - R</h4>


                                <div class="card-header-action">
                                    <a href="{{url('adsequence')}}"><button type="button" class="btn btn-success">Ad sequence</button></a>
                                </div>
                            </div>
                            <h5 class="mt-4 ml-4">Selected CustomAd List</h5>
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>LOGO</th>
                                                        <th>APPLICATION DETAILS</th>
                                                        <th>APP DOWNLOAD</th>
                                                        <th>BANNER</th>
                                                        <th>AD STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b1.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b2.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b3.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><img src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b4.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><img src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b5.webp')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b1.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b2.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove From group</a></span>
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
                                                <input type="text" class="form-control input-default" placeholder="Search Custom Ad Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <div class="search_select_box">
                                                    <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                        <option value="">Choose Account</option>
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
                                                        <option value="">App Category</option>
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
                                                        <option value="">App Status</option>
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
                                                        <option value="">Custom Ad Status</option>
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
                                                        <th>NO</th>
                                                        <th>LOGO</th>
                                                        <th>APPLICATION DETAILS</th>
                                                        <th>APP DOWNLOAD</th>
                                                        <th>BANNER</th>
                                                        <th>AD STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b1.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b2.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b3.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><img src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b4.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><img src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b5.webp')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b1.png')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>
                                                        <td>16936</td>
                                                        <td><img src="{{URL:: asset('assets/images/b2.jpg')}}" width="150" alt=""></td>
                                                        <td><span class="badge badge-success px-2">Enable</span>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fas fa-plus"></i>Add to Group</a></span>
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
