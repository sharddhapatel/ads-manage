@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">




                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-10">
                                    <h4>Settings</h4>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title"> JKS File Upload Account Wise </div>
                                        </div>
                                        <div class="media-cta">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                              </label>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title"> JKS Upload App Wise </div>
                                        </div>
                                        <div class="media-cta">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                              </label>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title"> Source Code Upload </div>
                                        </div>
                                        <div class="media-cta">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                              </label>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title"> Design Upload </div>
                                        </div>
                                        <div class="media-cta">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                              </label>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-body">
                                            <div class="media-title"> Database Backup </div>
                                        </div>
                                        <div class="media-cta">
                                            <a class="btn btn-success" data-toggle="modal" data-target="#basicModal" style="color: #fff;">Download</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="card">
                            <div class="card-header" style="line-height: 18px;">
                                <h4>Set Profile Password</h4>
                                <div class="card-header-action">
                                    <label class="switch" style="margin-right: 10px; margin-top: -10px">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                    </label><span>profile password status</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" method="post">

                                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">

                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title"> </div>
                                            </div>
                                            <div class="media-cta">

                                            </div>
                                        </li>
                                    </ul>

                                    <div class="form-group">
                                        <label>Enter New Password </label>
                                        <input type="password" class="form-control" name="new_pass" value="" placeholder="Enter New Password " required="">
                                        <div class="invalid-feedback">
                                            Enter New Password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Confirm Password </label>
                                        <input type="password" class="form-control" name="confirm_pass" value="" placeholder="Enter Confirm Password" required="">
                                        <div class="invalid-feedback">
                                            Enter Confirm Password
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <input type="Submit" name="changePassword" class="btn btn-primary" value="Set Profile Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="card">
                            <div class="card-header">
                                <h4>Verification Settings</h4>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" method="post">
                                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title"> Forgot Password Email ID </div>
                                            </div>
                                            <div class="media-cta">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineCheckbox1">Super Admin</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Login User</label>
                                                </div>
                                                <!-- <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="radio" name="forgot_password_email" value="Super Admin" checked="">
                                                    <div class="state p-info-o">
                                                        <i class="icon material-icons">done</i>
                                                        <label> Super Admin</label>
                                                    </div>
                                                </div>
                                                <div class="pretty p-icon p-curve p-pulse">
                                                    <input type="radio" name="forgot_password_email" value="Login User">
                                                    <div class="state p-info-o">
                                                        <i class="icon material-icons">done</i>
                                                        <label>Login User</label>
                                                    </div>
                                                </div> -->

                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title"> Two Step Verification </div>
                                            </div>
                                            <div class="media-cta">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">ON</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                                                    <label class="form-check-label" for="inlineCheckbox2">OFF</label>
                                                </div>

                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title"> Two Step Verification Email ID </div>
                                            </div>
                                            <div class="media-cta">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                                    <label class="form-check-label" for="inlineCheckbox1">Super Admin</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Login User</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title"> IP Address Verification </div>
                                            </div>
                                            <div class="media-cta">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">ON</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                                                    <label class="form-check-label" for="inlineCheckbox2">OFF</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-title">Release App API Security </div>
                                            </div>
                                            <div class="media-cta">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">ON</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                                                    <label class="form-check-label" for="inlineCheckbox2">OFF</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <hr>
                                    <div class="form-group">
                                        <label>reCAPTCHA Site Key</label>
                                        <input type="text" class="form-control" name="recaptcha_sitekey" value="" placeholder="Enter Site Key">

                                    </div>
                                    <div class="form-group">
                                        <label>reCAPTCHA Secret key </label>
                                        <input type="text" class="form-control" name="recaptcha_secretkey" value="" placeholder="Enter Secret key ">

                                    </div>
                                    <hr>

                                    <div class="form-group" style="background-color: #f2f2f2; padding:20px;">
                                        <div class="text-center">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                        <label>Open System With Safeguard Id <i class="fas fa-question-circle" data-toggle="tooltip" title="" data-original-title="Safeguard provides higher security to the system &amp; you can start the Apps Manager system with Safeguard ID only. Keep in mind you can not forget the Safeguard ID otherwise you will not access it furthermore so keep it in a safe place before use."></i></label>
                                        <input type="text" class="form-control" onkeypress="return blockSpecialChar(event)" name="safeguard_id" value="" placeholder="Enter Safeguard Id">
                                        <p>
                                            <br> Example: <br> Old Systempath: www.yourdomain.com/welcome/login <br> New Systempath: www.yourdomain.com/welcome/login/safeguardID
                                        </p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <input type="Submit" name="submit_other_settings" class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">


                        <div class="card">
                            <div class="card-header">
                                <h4>Company Name and Logo</h4>

                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">

                                    <div class="card-body text-center">



                                        <img src="{{URL:: asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">


                                    </div>

                                    <div class="form-group">
                                        <label>Company Logo</label>
                                        <input type="file" class="form-control" name="logo_file" accept="image/*" onchange="loadFile(event)">
                                    </div>

                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="company_name" value="Apps Manager" placeholder="Enter Company Name">
                                        <div class="invalid-feedback">
                                            Enter Company Name
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <input type="Submit" name="submit_company" class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profile Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                             </button>
                            </div>
                            <form method="post" class="needs-validation" novalidate="" id="databaseefrm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="profile_password" value="" placeholder="Enter Profile Password " required="">
                                        <div class="invalid-feedback">
                                            Enter New Password
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <input type="hidden" class="form-control" name="submit_password" value="Submit">
                                    <button type="Submit" class="btn btn-primary" onclick="submitDProfileP()">Submit</button>
                                </div>
                            </form>
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
