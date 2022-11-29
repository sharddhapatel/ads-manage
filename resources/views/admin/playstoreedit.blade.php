@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="card">
                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card-header">
                                    <h4>Account Setup</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card-body text-center">

                                                <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style=" border:#54ca68 2px solid; height: 100px; width:100px;" data-initial="d">
                                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" style="" id="preview" class="img-thumbnail rounded-circle">
                                                </figure>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Image</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                                Upload
                                                                <input type="file" name="image_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                            </div>
                                                            <span style="margin-left: 20px;">OR</span>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" name="image_link" id="image_link" placeholder="Enter Direct Image Link">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Name*</label>
                                                <input type="hidden" class="form-control" name="account_id" id="account_id" value="2">

                                                <input type="text" class="form-control" name="account_name" value="demo" required="">
                                                <div class="invalid-feedback">
                                                    Enter Account Name
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Email</label>
                                                <input type="text" class="form-control" name="account_email" value="">
                                                <div class="invalid-feedback">
                                                    Enter Email
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Password</label>
                                                <input type="text" class="form-control" name="account_password" value="">
                                                <div class="invalid-feedback">
                                                    Enter Account Password
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Privacy Policy Link</label>
                                                <input type="text" class="form-control" name="account_privacypolicy" value="">
                                                <div class="invalid-feedback">
                                                    Enter Account privacy policy
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Account Play Store Link</label>
                                                <input type="text" class="form-control" name="account_playstorelink" value="">
                                                <div class="invalid-feedback">
                                                    Enter Account Play Store Link
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Account JKS</label>
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled="" value="" placeholder="JKS File" id="jks_name">
                                                    <div class="input-group-append">
                                                        <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                            Browse...
                                                            <input type="file" name="jks_file" onchange="getJksName(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>JKS Details</label>
                                                <div class="summernote" style="height:36px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Payment Bank Details</label>
                                                <div class="summernote" style="height:36px;">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Details</label>
                                                <div class="summernote" style="height:36px;">

                                                </div>
                                            </div>
                                            <p>

                                                <button class="btn btn-primary" style="width: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                         Attech More Details
                                        </button>
                                            </p>
                                            <div class="collapse" id="collapseExample">

                                                <!-- <div class="form-group">
                                                    <label> Attech Physical device </label>

                                                    <div class="input-group">
                                                        <select class="form-control select2 select2-hidden-accessible" id="devicee" name="account_attechDevice" style="width:80%" onchange="checkDevice();" tabindex="-1" aria-hidden="true">
                                                  <option value="">Choose PC..</option>
                                                                                          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 80%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-devicee-container"><span class="select2-selection__rendered" id="select2-devicee-container" title="Choose PC..">Choose PC..</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                        </span>
                                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDeviceModal">
                              <i class="fas fa-plus"></i></button>


                                                        </div>

                                                    </div>

                                                </div> -->
                                                <label> Attech Physical device </label>
                                                <div class="form-group" style="display: flex;">
                                                    <div class="search_select_box" style="width: 80%;">
                                                        <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                            <option value="">Choose PC... </option>
                                                            <option value="hina">All format video projector simulator</option>
                                                            <option value="minal">All format video projector simulator 2021</option>
                                                            <option value="rina">All format video projector simulator 2021</option>
                                                            <option value="nidhi">All format HD video player</option>
                                                            <option value="shraddha">All format  video player</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDeviceModal">
                                                    <i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label> Attech Internet </label>
                                                    <div class="input-group">
                                                        <select class="form-control select2 select2-hidden-accessible" style="width: 80%" name="account_attechInternet" onchange="checkInternet();" id="internett" tabindex="-1" aria-hidden="true">
                                                  <option value="">Choose Internet..</option>
                                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 80%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-internett-container"><span class="select2-selection__rendered" id="select2-internett-container" title="Choose Internet..">Choose Internet..</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                        </span>
                                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addInternetModal">
                              <i class="fas fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <label> Attech Internet </label>
                                                <div class="form-group" style="display: flex;">
                                                    <div class="search_select_box" style="width: 80%;">
                                                        <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                            <option value="">Choose Internet... </option>
                                                            <option value="hina">All format video projector simulator</option>
                                                            <option value="minal">All format video projector simulator 2021</option>
                                                            <option value="rina">All format video projector simulator 2021</option>
                                                            <option value="nidhi">All format HD video player</option>
                                                            <option value="shraddha">All format  video player</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addInternetModal">
                                                        <i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label> Attech card info </label>


                                                    <div class="input-group">
                                                        <select class="form-control select2 select2-hidden-accessible" style="width: 80%" name="account_attechCard" onchange="checkCard();" id="cardd" tabindex="-1" aria-hidden="true">
                                                    <option value="">Choose Card..</option>
                                                                                               </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 80%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cardd-container"><span class="select2-selection__rendered" id="select2-cardd-container" title="Choose Card..">Choose Card..</span>
                                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                        </span>
                                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCardModal">
                              <i class="fas fa-plus"></i></button>
                                                        </div>

                                                    </div>
                                                </div> -->
                                                <label> Attech card info </label>
                                                <div class="form-group" style="display: flex;">
                                                    <div class="search_select_box" style="width: 80%;">
                                                        <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                            <option value="">Choose Card... </option>
                                                            <option value="hina">All format video projector simulator</option>
                                                            <option value="minal">All format video projector simulator 2021</option>
                                                            <option value="rina">All format video projector simulator 2021</option>
                                                            <option value="nidhi">All format HD video player</option>
                                                            <option value="shraddha">All format  video player</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCardModal">
                                                        <i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <input type="Submit" name="edit_Submit" class="btn btn-lg btn-success" value="Save">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal fade" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Device</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                            </div>
                            <form class="needs-validation" novalidate="" method="post">
                                <div class="modal-body">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>PC Name</label>
                                            <input type="text" class="form-control" name="pc_name" required="">
                                            <div class="invalid-feedback">
                                                Enter PC Name
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>PC Details</label>
                                            <textarea class="form-control" name="pc_details"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <input type="Submit" name="device_Submit" class="btn btn-primary" value="Save">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addInternetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Internet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                            </div>
                            <form class="needs-validation" novalidate="" method="post">
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Internet Name</label>
                                            <input type="text" class="form-control" name="internet_name" required="">
                                            <div class="invalid-feedback">
                                                Enter Internet Name
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Internet Details</label>
                                            <textarea class="form-control" name="internet_details" style="padding-top: 20px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <input type="Submit" name="internet_Submit" class="btn btn-primary" value="Save">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Card</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                            </div>
                            <form class="needs-validation" novalidate="" method="post">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>Card Name</label>
                                        <input type="text" class="form-control" name="card_name" required="">
                                        <div class="invalid-feedback">
                                            Enter Card Name
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Card Details</label>
                                        <textarea class="form-control" name="card_details"></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <input type="Submit" name="card_Submit" class="btn btn-primary" value="Save">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                </form>
            </div>
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
