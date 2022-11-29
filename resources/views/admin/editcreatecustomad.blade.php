@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="card card-primary">
                                <div aria-modal="true" style="padding-right: 17px; display: block;">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit</h5>

                                        </button>
                                    </div>
                                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post" id="frm" name="frm">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <input type="hidden" class="form-control" name="advertising_assets_id" value="66" required="">

                                                    <div class="form-group">
                                                        <label>Advertising Assets Name*</label>
                                                        <input type="text" class="form-control" name="advertising_assets_name" value="Watch Live Cricket Match Today Live" required="">
                                                        <div class="invalid-feedback">
                                                            Enter advertising assets name
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select Account</label>
                                                        <select class="form-control" style="width: 100%" name="account_id" id="select_account_id_edit" required="" onchange="select_Account_applist_for_edit();">
                                                    <option disabled="" selected="">Choose Account</option>
                                                                                        <option value="17">A Suspended Apps</option>
                                                                                        <option value="2">demo</option>
                                                                                        <option value="12">Funvv Apps Studio</option>
                                                                                        <option value="15">Jeff Hardy Apps LLC</option>
                                                                                        <option value="16">New Account</option>
                                                                                        <option value="9" selected="">Not Published</option>
                                                                                        <option value="11">SmaartY Apps Studio</option>
                                                                                        <option value="13">Yogesh Apps</option>
                                                                                     </select>
                                                        <div class="invalid-feedback">
                                                            Select Account
                                                        </div>
                                                    </div>
                                                    <div id="containerAccountAppList_edit">
                                                        <div class="form-group">
                                                            <label>Select App</label>
                                                            <select class="form-control" style="width: 100%;" name="advertising_assets_appid" id="select_app_id" required="">
                                                       <option disabled="" selected="">Choose Account</option>

                                                        <option value="115" selected="">Live Cricket TV - HD Cricket</option>
                                                    </select>
                                                            <div class="invalid-feedback">
                                                                Select App Name
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Advertising Assets Banner</label>
                                                        <div style="margin-bottom:10px">

                                                            <img src="{{URL:: asset('assets/images/logo.png')}}" id="bannerPreviewEdit" height="100">

                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                                        Upload
                                                                        <input type="file" name="banner_file" accept="image/*" onchange="loadBannerEditFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                                    </div>
                                                                    <span style="margin-left: 20px;">OR</span>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control" name="bannerImageEdit_link" id="bannerImageEdit_link" placeholder="Enter Direct Banner Link">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">

                                                    <div class="form-group">
                                                        <label>Action Button Name :</label>
                                                        <input type="text" class="form-control" name="advertising_assets_buttonName" value="Install" required="">
                                                        <div class="invalid-feedback">
                                                            Enter Action Button Name
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Short Decription*</label>
                                                        <textarea name="advertising_assets_shortDecription" required="" class="form-control">The best live cricket streaming website in India to watch live cricket on your Android Smartphone, iPhone or iPad in India, United States (USA) and Canada. </textarea>
                                                        <div class="invalid-feedback">
                                                            Enter short Decription
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Advertising Assets Rating</label>
                                                        <input type="text" class="form-control numbersOnly" name="advertising_assets_rating" value="4.2" required="">
                                                        <div class="invalid-feedback">
                                                            Enter rating
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Advertising Assets Download</label>
                                                        <input type="text" class="form-control" name="advertising_assets_download" value="10 M+" required="">
                                                        <div class="invalid-feedback">
                                                            Enter advertising_assets_download
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Advertising Assets AdFormat*</label>
                                                        <br>
                                                        <div class="pretty p-svg p-curve">
                                                            <input type="checkbox" name="advertising_assets_AdFormat[]" value="Banner" checked="">
                                                            <div class="state p-success">
                                                                <!-- svg path -->
                                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                       </svg>
                                                                <label>Banner</label>
                                                            </div>
                                                        </div>
                                                        <div class="pretty p-svg p-curve">
                                                            <input type="checkbox" name="advertising_assets_AdFormat[]" value="NativeBanner" checked="">
                                                            <div class="state p-success">
                                                                <!-- svg path -->
                                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                       </svg>
                                                                <label>Native Banner</label>
                                                            </div>
                                                        </div>
                                                        <div class="pretty p-svg p-curve">
                                                            <input type="checkbox" name="advertising_assets_AdFormat[]" value="Native" checked="">
                                                            <div class="state p-success">
                                                                <!-- svg path -->
                                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                       </svg>
                                                                <label>Native</label>
                                                            </div>
                                                        </div>
                                                        <div class="pretty p-svg p-curve">
                                                            <input type="checkbox" name="advertising_assets_AdFormat[]" value="Interstitial" checked="">
                                                            <div class="state p-success">
                                                                <!-- svg path -->
                                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                       </svg>
                                                                <label>Interstitial</label>
                                                            </div>
                                                        </div>

                                                        <div class="pretty p-svg p-curve">
                                                            <input type="checkbox" name="advertising_assets_AdFormat[]" value="AppOpen" checked="">
                                                            <div class="state p-success">
                                                                <!-- svg path -->
                                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                          <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                       </svg>
                                                                <label>App Open</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-whitesmoke br">
                                            <!--  <input type="Submit" name="submit" class="btn btn-success" value="Save" />  -->
                                            <input type="button" onclick="upd_ad(document.frm)" class="btn btn-success" value="Save">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="{{url('createcustomad')}}"><button type="button" class="btn btn-primary" data-dismiss="modal">Back</button></a>
                                        </div>
                                    </form>
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
