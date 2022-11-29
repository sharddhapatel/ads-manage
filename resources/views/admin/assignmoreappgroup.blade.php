@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <h2>LIVE LINE</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Assigned Application List</h4>


                                <div class="card-header-action">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assignAppModal"><i class="fa fa-plus"></i> Assign Group to App</button>
                                </div>
                            </div>
                            <div class="modal fade" id="assignAppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Assign To Application</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">×</span>
                                         </button>
                                        </div>
                                        <input type="hidden" value="116,1663,1664" id="app_ids_list">
                                        <form class="needs-validation" novalidate="" method="post">
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Select Account</label>
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
                                                        <label>Select App</label>
                                                        <select class="form-control" style="width: 100%; height:150px;" name="app_id[]" id="select_app_id" required="" multiple="" tabindex="0" aria-hidden="false">
                                                      <option disabled="" selected="">Choose Account</option>

                                                   </select>
                                                        <div class="invalid-feedback">
                                                            Select App Name
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer bg-whitesmoke br">
                                                <input type="Submit" name="submit_assignApp" class="btn btn-primary" value="Assign">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
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
                                                        <th>LOGO</th>
                                                        <th>APP NAME</th>
                                                        <th>APP ACCOUNT NAME</th>
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

                                                        <td>Not Published</td>
                                                        <td>
                                                            <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>
                                                        </td>

                                                        <td>New Account</td>
                                                        <td>
                                                            <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="60px" style="border-radius: 50%;"></td>
                                                        <td>
                                                            <a href="#" style="text-decoration: none;">
                                                                <h6 class="badge-info1" style="width:350px;">TestADSdemo</h6>
                                                            </a>
                                                            <p style="width:350px;">com.test.gaurav2</p>

                                                        </td>

                                                        <td>demo</td>
                                                        <td>
                                                            <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove</a></span>
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
                                <h4 style="margin-bottom: 0px;">Assigned Account List</h4>


                                <div class="card-header-action">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assignAccountModal"><i class="fa fa-plus"></i> Assign Group to Account</button>
                                </div>
                            </div>
                            <div class="modal fade" id="assignAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Assign To Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">×</span>
                                         </button>
                                        </div>
                                        <form class="needs-validation" novalidate="" method="post">
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Select Account</label>
                                                    <select class="form-control" style="width: 100%; height:150px;" name="account_id[]" required="" multiple="" tabindex="0" aria-hidden="false">
                                                  <option disabled="" selected="" value="">Choose Account</option>
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


                                            </div>
                                            <div class="modal-footer bg-whitesmoke br">
                                                <input type="Submit" name="submit_assignAccount" class="btn btn-primary" value="Assign">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
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
                                                        <th>ACCOUNT NAME</th>
                                                        <th>PLATFORM NAME</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            A Suspended Apps
                                                        </td>

                                                        <td>Play Store</td>
                                                        <td>
                                                            <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            New Account
                                                        </td>

                                                        <td>Play Store</td>
                                                        <td>
                                                            <a class="btn btn-danger" href="#"><i class="fas fa-minus"></i> Remove</a></span>
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
