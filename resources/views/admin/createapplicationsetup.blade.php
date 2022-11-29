@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">

                <!-- add content here -->
                <div class="card">
                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                        <div class="row row1">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="card-header">
                                    <h4>Application Setup</h4>
                                    <div class="card-header-action">
                                        <!-- <a href="{{url('viewsetup')}}" class="btn btn-icon btn-primary"><i class="far fa-eye"></i> View</a> -->
                                        <button style="float:right; margin-bottom:20px; margin-left:8px;" class="btn btn-outline-primary align-left" type="button" data-toggle="modal" data-target="#basicModalMoreField">More field</button>
                                        <!-- json -->
                                        <a  href="{{url('viewsetup')}}"><button type="button" class="btn btn-info" onclick="setupAppSubmit(1);">view app response</button></a>
                                        <!-- json -->
                                        <a href="{{url('createapplicationsetup')}}"><button type="button" class="btn btn-success" onclick="setupAppSubmit(1);">Save</button></a>
                                        <a href="{{url('playstorelist')}}"></a><button type="button" class="btn btn-success" onclick="setupAppSubmit(2);">Save &amp; Continue</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-application-list" data-toggle="list" href="#list-application" role="tab">Application Details</a>
                                                <a class="list-group-item list-group-item-action " id="list-monorize-list" data-toggle="list" href="#list-monorize" role="tab">Monetize Settings</a>
                                                <a class="list-group-item list-group-item-action" id="list-parameter-list" data-toggle="list" href="#other-settings" role="tab">Other Settings</a>
                                                <a class="list-group-item list-group-item-action" id="list-parameter-list" data-toggle="list" href="#list-parameter" role="tab">Parameter</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active  mt-4" id="list-application" role="tabpanel" aria-labelledby="list-application-list">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="card-body text-center">
                                                                <a target="_blank" href="">
                                                                    <div class="card-body text-center">
                                                                        <img src="{{URL::asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>App LOGO</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                                                Upload
                                                                                <input type="file" name="logo_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                                            </div>
                                                                            <span style="margin-left: 20px;">OR</span>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="logo_link" id="image_link" placeholder="Enter Direct Image Link">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Application Category</label>
                                                                <select class="form-control" required="" name="app_categoryId" tabindex="0" aria-hidden="false">
                                                              <option value="">Choose Category</option>
                                                                                                              <option value="15"> Art &amp; Design</option>
                                                                                                              <option value="16"> Auto &amp; Vehicles</option>
                                                                                                              <option value="17"> Beauty</option>
                                                                                                              <option selected="" value="18"> Books &amp; Reference</option>
                                                                                                              <option value="6"> Business</option>
                                                                                                              <option value="19"> Comics</option>
                                                                                                              <option value="11"> Communications</option>
                                                                                                              <option value="20"> Dating</option>
                                                                                                              <option value="12"> Education</option>
                                                                                                              <option value="8"> Entertainment</option>
                                                                                                              <option value="21"> Events</option>
                                                                                                              <option value="22"> Finance</option>
                                                                                                              <option value="23"> Food &amp; Drink</option>
                                                                                                              <option value="4"> Games</option>
                                                                                                              <option value="14"> Health &amp; Fitness</option>
                                                                                                              <option value="24"> House &amp; Home</option>
                                                                                                              <option value="25"> Libraries &amp; Demo</option>
                                                                                                              <option value="26"> Lifestyle</option>
                                                                                                              <option value="27"> Maps &amp; Navigation</option>
                                                                                                              <option value="28"> Medical</option>
                                                                                                              <option value="10"> Music &amp; Audio</option>
                                                                                                              <option value="29"> News &amp; Magazines</option>
                                                                                                              <option value="35"> Other</option>
                                                                                                              <option value="30"> Parenting</option>
                                                                                                              <option value="13"> Personalization</option>
                                                                                                              <option value="1"> Photography</option>
                                                                                                              <option value="9"> Productivity</option>
                                                                                                              <option value="31"> Shopping</option>
                                                                                                              <option value="5"> Social</option>
                                                                                                              <option value="32"> Sports</option>
                                                                                                              <option value="7"> Tools</option>
                                                                                                              <option value="33"> Travel &amp; Local</option>
                                                                                                              <option value="3"> Video Players &amp; Editors</option>
                                                                                                              <option value="34"> Weather</option>
                                                                                                           </select>
                                                                <div class="invalid-feedback">
                                                                    Select App Category
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>App Name*</label>
                                                                <input type="hidden" class="form-control" name="app_id " id="app_id " value="1667">
                                                                <input type="text" class="form-control" name="app_name" value="asdadxsa" required="">
                                                                <div class="invalid-feedback">
                                                                    Enter App Name
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Package Name</label>
                                                                <input type="text" class="form-control" name="app_packageName" value="sadsaf" required="">
                                                                <div class="invalid-feedback">
                                                                    Package Name
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>API Key</label>
                                                                <input type="text" class="form-control" name="app_apikey" value="">
                                                                <div class="invalid-feedback">
                                                                    Enter API Key
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>App Note</label>
                                                                <br>
                                                                <textarea name="app_note" style="width:100%;" rows="3" placeholder="Note..."></textarea>
                                                            </div>





                                                        </div>
                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label>Version Update Dialog? </label>
                                                                <!-- <div class="pretty p-switch p-fill">
                                                                            <input type="checkbox" value="1" name="app_updateAppDialogStatus">
                                                                            <div class="state p-success">
                                                                                <label></label>
                                                                            </div>
                                                                        </div> -->
                                                                <label class="switch">
                                                                            <input type="checkbox" checked>
                                                                            <span class="slider round"></span>
                                                                          </label>
                                                                <input type="text" class="form-control" name="app_versionCode" placeholder="Enter Version Code Like.. 1, 2, 4" value="">
                                                                <div class="invalid-feedback">
                                                                    Enter Version Code
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Redirect Other App? </label>
                                                                <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="slider round"></span>
                                                                          </label>
                                                                <input type="text" class="form-control" name="app_newPackageName" placeholder="Enter New Package If You Want to Redirect Other App" value="">
                                                                <div class="invalid-feedback">
                                                                    Enter New Package
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Privacy Policy Link</label>
                                                                <input type="text" class="form-control" name="app_privacyPolicyLink" value="">
                                                                <div class="invalid-feedback">
                                                                    Enter Account privacy policy
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>App Account Link</label>
                                                                <input type="text" class="form-control" name="app_accountLink" value="">
                                                                <div class="invalid-feedback">
                                                                    Enter App Account Link
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Extra Data : Json format data only...!!</label>
                                                                <br>
                                                                <textarea name="app_extra" style="width:100%;" rows="5" placeholder="Json format data only...!!"></textarea>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade  mt-4" id="list-monorize" role="tabpanel" aria-labelledby="list-monorize-list">
                                                    <div class="col-sm-12 col-md-12 col-lg-12" id="Monetizes">
                                                        <div class="">
                                                            <div class="card-header">
                                                                <h4>Monetize Settings</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-6">
                                                                        <!-- <div class="form-group">
                                                                            <label>Show Ad in App?</label>
                                                                            <label class="switch">
                                                                                        <input type="checkbox" checked>
                                                                                        <span class="slider round"></span>
                                                                                    </label>
                                                                        </div> -->
                                                                        <div style="background-color: #fafafa; padding:20px;">
                                                                            <div id="box_apply_allAdFormat">
                                                                                <!-- <div class="form-group">
                                                                                    <label>How to Show Ad? </label>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="app_howShowAd" value="0" checked>
                                                                                        <label class="form-check-label" for="inlineRadio1">Fix Sequence</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="app_howShowAd" value="1">
                                                                                        <label class="form-check-label" for="inlineRadio2">Alernate Ad Show</label>
                                                                                    </div>
                                                                                </div> -->

                                                                                <div class="form-group" id="adShowSequence">
                                                                                    <label>Select Ad Platform Sequence </label>
                                                                                    <select class="form-control select2 select2-hidden-accessible" name="app_adPlatformSequence[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                             <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                            <option selected="" value="Admob"> Admob</option>
                                                                                                                                            <option selected="" value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                            <option selected="" value="Unity"> Unity</option>
                                                                                                                                            <option selected="" value="AppNext"> AppNext</option>
                                                                                                                                            <option selected="" value="StartApp"> StartApp</option>
                                                                                                                                            <option selected="" value="Qureka"> Qureka</option>
                                                                                                                                            <option selected="" value="AD Manager"> AD Manager</option>
                                                                                                                                            <option selected="" value="IronSource"> IronSource</option>
                                                                                                                                            <option selected="" value="Mopub"> Mopub</option>
                                                                                                                                            <option selected="" value="Tapdaq"> Tapdaq</option>
                                                                                                                                            <option selected="" value="My Custom Ads"> My Custom Ads</option>
                                                                                            </select><span class="select2 select2-container select2-container--default"
                                                                                        dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                                                                    <ul class="select2-selection__rendered"><li class="select2-selection__choice" title=" Admob"><span class="select2-selection__choice__remove" role="presentation">×</span>                                                                                    Admob</li>
                                                                                    <li class="select2-selection__choice" title=" Facebook audience network"><span class="select2-selection__choice__remove" role="presentation">×</span> Facebook audience network</li>
                                                                                    <li class="select2-selection__choice" title=" Unity"><span class="select2-selection__choice__remove" role="presentation">×</span> Unity</li>
                                                                                    <li class="select2-selection__choice" title=" AppNext"><span class="select2-selection__choice__remove" role="presentation">×</span> AppNext</li>
                                                                                    <li class="select2-selection__choice" title=" StartApp"><span class="select2-selection__choice__remove" role="presentation">×</span> StartApp</li>
                                                                                    <li class="select2-selection__choice" title=" Qureka"><span class="select2-selection__choice__remove" role="presentation">×</span> Qureka</li>
                                                                                    <li class="select2-selection__choice" title=" AD Manager"><span class="select2-selection__choice__remove" role="presentation">×</span> AD Manager</li>
                                                                                    <li class="select2-selection__choice" title=" IronSource"><span class="select2-selection__choice__remove" role="presentation">×</span> IronSource</li>
                                                                                    <li class="select2-selection__choice" title=" Mopub"><span class="select2-selection__choice__remove" role="presentation">×</span> Mopub</li>
                                                                                    <li class="select2-selection__choice" title=" Tapdaq"><span class="select2-selection__choice__remove" role="presentation">×</span> Tapdaq</li>
                                                                                    <li class="select2-selection__choice" title=" My Custom Ads"><span class="select2-selection__choice__remove" role="presentation">×</span> My Custom Ads</li>
                                                                                    <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list"
                                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                                    </ul>
                                                                                    </span>
                                                                                    </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                </div>
                                                                                <div class="form-group" id="adShowAlernate" style="display: none;">
                                                                                    <label>Select Alernate Ad Platform : </label>
                                                                                    <select class="form-control select2 select2-hidden-accessible" style="width:100%" name="app_alernateAdShow[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                             <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                            <option value="Admob"> Admob</option>
                                                                                                                                            <option value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                            <option value="Unity"> Unity</option>
                                                                                                                                            <option value="AppNext"> AppNext</option>
                                                                                                                                            <option value="StartApp"> StartApp</option>
                                                                                                                                            <option value="Qureka"> Qureka</option>
                                                                                                                                            <option value="AD Manager"> AD Manager</option>
                                                                                                                                            <option value="IronSource"> IronSource</option>
                                                                                                                                            <option value="Mopub"> Mopub</option>
                                                                                                                                            <option value="Tapdaq"> Tapdaq</option>
                                                                                                                                            <option value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                         </select><span class="select2 select2-container select2-container--default"
                                                                                        dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span>
                                                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="form-group">
                                                                                <label>Apply? </label>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="app_applyAdFormat" value="0" checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">Fix Sequence</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="app_applyAdFormat" value="1">
                                                                                    <label class="form-check-label" for="inlineRadio2">Alernate Ad Show</label>
                                                                                </div>

                                                                            </div> -->
                                                                            <!-- <div id="box_apply_AdformatWise" style="display: none;">
                                                                                <div id="accordion">
                                                                                    <div class="accordion">
                                                                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                                                                            <h4 style="color: #fff; margin-bottom:0px;">Interstitial &amp; Other</h4>
                                                                                        </div>
                                                                                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                                                                            <div class="form-group">
                                                                                                <label>How to Show Ad? </label>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdInterstitial" value="0" checked>
                                                                                                    <label class="form-check-label" for="inlineRadio1">Fix Sequence</label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdInterstitial" value="1">
                                                                                                    <label class="form-check-label" for="inlineRadio2">Alernate Ad Show</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="form-group" id="adShowSequenceInterstitial">
                                                                                                <label>Select Ad Platform Sequence </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" name="app_adPlatformSequenceInterstitial[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option selected="" value="Admob"> Admob</option>
                                                                                                                                                              <option selected="" value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option selected="" value="Unity"> Unity</option>
                                                                                                                                                              <option selected="" value="AppNext"> AppNext</option>
                                                                                                                                                              <option selected="" value="StartApp"> StartApp</option>
                                                                                                                                                              <option selected="" value="Qureka"> Qureka</option>
                                                                                                                                                              <option selected="" value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option selected="" value="IronSource"> IronSource</option>
                                                                                                                                                              <option selected="" value="Mopub"> Mopub</option>
                                                                                                                                                              <option selected="" value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option selected="" value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title=" Admob"><span class="select2-selection__choice__remove" role="presentation">×</span>                                                                                                Admob</li>
                                                                                                <li class="select2-selection__choice" title=" Facebook audience network"><span class="select2-selection__choice__remove" role="presentation">×</span> Facebook audience network</li>
                                                                                                <li class="select2-selection__choice" title=" Unity"><span class="select2-selection__choice__remove" role="presentation">×</span> Unity</li>
                                                                                                <li class="select2-selection__choice" title=" AppNext"><span class="select2-selection__choice__remove" role="presentation">×</span> AppNext</li>
                                                                                                <li class="select2-selection__choice" title=" StartApp"><span class="select2-selection__choice__remove" role="presentation">×</span> StartApp</li>
                                                                                                <li class="select2-selection__choice" title=" Qureka"><span class="select2-selection__choice__remove" role="presentation">×</span> Qureka</li>
                                                                                                <li class="select2-selection__choice" title=" AD Manager"><span class="select2-selection__choice__remove" role="presentation">×</span> AD Manager</li>
                                                                                                <li class="select2-selection__choice" title=" IronSource"><span class="select2-selection__choice__remove" role="presentation">×</span> IronSource</li>
                                                                                                <li class="select2-selection__choice" title=" Mopub"><span class="select2-selection__choice__remove" role="presentation">×</span> Mopub</li>
                                                                                                <li class="select2-selection__choice" title=" Tapdaq"><span class="select2-selection__choice__remove" role="presentation">×</span> Tapdaq</li>
                                                                                                <li class="select2-selection__choice" title=" My Custom Ads"><span class="select2-selection__choice__remove" role="presentation">×</span> My Custom Ads</li>
                                                                                                <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox"
                                                                                                        aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                                                                                </ul>
                                                                                                </span>
                                                                                                </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                            </div>
                                                                                            <div class="form-group" id="adShowAlernateInterstitial" style="display: none;">
                                                                                                <label>Select Alernate Ad Platform : </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" style="width:100%" name="app_alernateAdShowInterstitial[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option value="Admob"> Admob</option>
                                                                                                                                                              <option value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option value="Unity"> Unity</option>
                                                                                                                                                              <option value="AppNext"> AppNext</option>
                                                                                                                                                              <option value="StartApp"> StartApp</option>
                                                                                                                                                              <option value="Qureka"> Qureka</option>
                                                                                                                                                              <option value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option value="IronSource"> IronSource</option>
                                                                                                                                                              <option value="Mopub"> Mopub</option>
                                                                                                                                                              <option value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span>
                                                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                                                </span>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="accordion">
                                                                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                                                                            <h4 style="color: #fff; margin-bottom:0px;">Native</h4>
                                                                                        </div>
                                                                                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                                                                            <div class="form-group">
                                                                                                <label>How to Show Ad?</label>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdNative" value="0" checked>
                                                                                                    <label class="form-check-label" for="inlineRadio1">Fix Sequence</label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdNative" value="1">
                                                                                                    <label class="form-check-label" for="inlineRadio2">Alernate Ad Show</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="form-group" id="adShowSequenceNative">
                                                                                                <label>Select Ad Platform Sequence </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" name="app_adPlatformSequenceNative[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option selected="" value="Admob"> Admob</option>
                                                                                                                                                              <option selected="" value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option selected="" value="Unity"> Unity</option>
                                                                                                                                                              <option selected="" value="AppNext"> AppNext</option>
                                                                                                                                                              <option selected="" value="StartApp"> StartApp</option>
                                                                                                                                                              <option selected="" value="Qureka"> Qureka</option>
                                                                                                                                                              <option selected="" value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option selected="" value="IronSource"> IronSource</option>
                                                                                                                                                              <option selected="" value="Mopub"> Mopub</option>
                                                                                                                                                              <option selected="" value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option selected="" value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title=" Admob"><span class="select2-selection__choice__remove" role="presentation">×</span>                                                                                                Admob</li>
                                                                                                <li class="select2-selection__choice" title=" Facebook audience network"><span class="select2-selection__choice__remove" role="presentation">×</span> Facebook audience network</li>
                                                                                                <li class="select2-selection__choice" title=" Unity"><span class="select2-selection__choice__remove" role="presentation">×</span> Unity</li>
                                                                                                <li class="select2-selection__choice" title=" AppNext"><span class="select2-selection__choice__remove" role="presentation">×</span> AppNext</li>
                                                                                                <li class="select2-selection__choice" title=" StartApp"><span class="select2-selection__choice__remove" role="presentation">×</span> StartApp</li>
                                                                                                <li class="select2-selection__choice" title=" Qureka"><span class="select2-selection__choice__remove" role="presentation">×</span> Qureka</li>
                                                                                                <li class="select2-selection__choice" title=" AD Manager"><span class="select2-selection__choice__remove" role="presentation">×</span> AD Manager</li>
                                                                                                <li class="select2-selection__choice" title=" IronSource"><span class="select2-selection__choice__remove" role="presentation">×</span> IronSource</li>
                                                                                                <li class="select2-selection__choice" title=" Mopub"><span class="select2-selection__choice__remove" role="presentation">×</span> Mopub</li>
                                                                                                <li class="select2-selection__choice" title=" Tapdaq"><span class="select2-selection__choice__remove" role="presentation">×</span> Tapdaq</li>
                                                                                                <li class="select2-selection__choice" title=" My Custom Ads"><span class="select2-selection__choice__remove" role="presentation">×</span> My Custom Ads</li>
                                                                                                <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox"
                                                                                                        aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                                                                                </ul>
                                                                                                </span>
                                                                                                </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                            </div>
                                                                                            <div class="form-group" id="adShowAlernateNative" style="display: none;">
                                                                                                <label>Select Alernate Ad Platform : </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" style="width:100%" name="app_alernateAdShowNative[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option value="Admob"> Admob</option>
                                                                                                                                                              <option value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option value="Unity"> Unity</option>
                                                                                                                                                              <option value="AppNext"> AppNext</option>
                                                                                                                                                              <option value="StartApp"> StartApp</option>
                                                                                                                                                              <option value="Qureka"> Qureka</option>
                                                                                                                                                              <option value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option value="IronSource"> IronSource</option>
                                                                                                                                                              <option value="Mopub"> Mopub</option>
                                                                                                                                                              <option value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span>
                                                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="accordion">
                                                                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                                                                                            <h4 style="color: #fff; margin-bottom:0px;">Banner, Native Banner</h4>
                                                                                        </div>
                                                                                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                                                                            <div class="form-group">
                                                                                                <label>How to Show Ad?</label>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdBanner" value="0" checked>
                                                                                                    <label class="form-check-label" for="inlineRadio1">Fix Sequence</label>
                                                                                                </div>
                                                                                                <div class="form-check form-check-inline">
                                                                                                    <input class="form-check-input" type="radio" name="app_howShowAdBanner" value="1">
                                                                                                    <label class="form-check-label" for="inlineRadio2">Alernate Ad Show</label>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="form-group" id="adShowSequenceBanner">
                                                                                                <label>Select Ad Platform Sequence </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" name="app_adPlatformSequenceBanner[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option selected="" value="Admob"> Admob</option>
                                                                                                                                                              <option selected="" value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option selected="" value="Unity"> Unity</option>
                                                                                                                                                              <option selected="" value="AppNext"> AppNext</option>
                                                                                                                                                              <option selected="" value="StartApp"> StartApp</option>
                                                                                                                                                              <option selected="" value="Qureka"> Qureka</option>
                                                                                                                                                              <option selected="" value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option selected="" value="IronSource"> IronSource</option>
                                                                                                                                                              <option selected="" value="Mopub"> Mopub</option>
                                                                                                                                                              <option selected="" value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option selected="" value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title=" Admob"><span class="select2-selection__choice__remove" role="presentation">×</span>                                                                                                Admob</li>
                                                                                                <li class="select2-selection__choice" title=" Facebook audience network"><span class="select2-selection__choice__remove" role="presentation">×</span> Facebook audience network</li>
                                                                                                <li class="select2-selection__choice" title=" Unity"><span class="select2-selection__choice__remove" role="presentation">×</span> Unity</li>
                                                                                                <li class="select2-selection__choice" title=" AppNext"><span class="select2-selection__choice__remove" role="presentation">×</span> AppNext</li>
                                                                                                <li class="select2-selection__choice" title=" StartApp"><span class="select2-selection__choice__remove" role="presentation">×</span> StartApp</li>
                                                                                                <li class="select2-selection__choice" title=" Qureka"><span class="select2-selection__choice__remove" role="presentation">×</span> Qureka</li>
                                                                                                <li class="select2-selection__choice" title=" AD Manager"><span class="select2-selection__choice__remove" role="presentation">×</span> AD Manager</li>
                                                                                                <li class="select2-selection__choice" title=" IronSource"><span class="select2-selection__choice__remove" role="presentation">×</span> IronSource</li>
                                                                                                <li class="select2-selection__choice" title=" Mopub"><span class="select2-selection__choice__remove" role="presentation">×</span> Mopub</li>
                                                                                                <li class="select2-selection__choice" title=" Tapdaq"><span class="select2-selection__choice__remove" role="presentation">×</span> Tapdaq</li>
                                                                                                <li class="select2-selection__choice" title=" My Custom Ads"><span class="select2-selection__choice__remove" role="presentation">×</span> My Custom Ads</li>
                                                                                                <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox"
                                                                                                        aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                                                                                </ul>
                                                                                                </span>
                                                                                                </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                            </div>
                                                                                            <div class="form-group" id="adShowAlernateBanner" style="display: none;">
                                                                                                <label>Select Alernate Ad Platform : </label>
                                                                                                <select class="form-control select2 select2-hidden-accessible" style="width:100%" name="app_alernateAdShowBanner[]" multiple="" tabindex="-1" aria-hidden="true">
                                                                                      <option disabled="" value="">Choose Your Ad Platform</option>
                                                                                                                                                              <option value="Admob"> Admob</option>
                                                                                                                                                              <option value="Facebook audience network"> Facebook audience network</option>
                                                                                                                                                              <option value="Unity"> Unity</option>
                                                                                                                                                              <option value="AppNext"> AppNext</option>
                                                                                                                                                              <option value="StartApp"> StartApp</option>
                                                                                                                                                              <option value="Qureka"> Qureka</option>
                                                                                                                                                              <option value="AD Manager"> AD Manager</option>
                                                                                                                                                              <option value="IronSource"> IronSource</option>
                                                                                                                                                              <option value="Mopub"> Mopub</option>
                                                                                                                                                              <option value="Tapdaq"> Tapdaq</option>
                                                                                                                                                              <option value="My Custom Ads"> My Custom Ads</option>
                                                                                                                                                           </select>
                                                                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span>
                                                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div> -->
                                                                        </div>
                                                                        <!-- <div class="form-group">
                                                                            <label>App Open Ad? </label>
                                                                            <label class="switch">
                                                                                        <input type="checkbox">
                                                                                        <span class="slider round"></span>
                                                                                      </label>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Show Test Ad in Debug App? </label>
                                                                            <label class="switch">
                                                                                        <input type="checkbox" checked>
                                                                                        <span class="slider round"></span>
                                                                                      </label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Ad Click Count (Main Home Page)</label>
                                                                            <input type="text" class="form-control" name="app_mainClickCntSwAd" value="">
                                                                            <div class="invalid-feedback">
                                                                                Enter Ad Click Count No
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Ad Click Count (Inner Page) </label>
                                                                            <input type="text" class="form-control" name="app_innerClickCntSwAd" value="">
                                                                            <div class="invalid-feedback">
                                                                                Enter Ad Click Count No
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-4">
                                                                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#platformm17" role="tab" aria-controls="home" aria-selected="true">Admob</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm18" role="tab" aria-controls="home" aria-selected="true">Facebook audience network</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm19" role="tab" aria-controls="home" aria-selected="true">Unity</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm23" role="tab" aria-controls="home" aria-selected="true">AppNext</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm24" role="tab" aria-controls="home" aria-selected="true">StartApp</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm25" role="tab" aria-controls="home" aria-selected="true">Qureka</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm26" role="tab" aria-controls="home" aria-selected="true">AD Manager</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm27" role="tab" aria-controls="home" aria-selected="true">IronSource</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm28" role="tab" aria-controls="home" aria-selected="true">Mopub</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " id="home-tab4" data-toggle="tab" href="#platformm29" role="tab" aria-controls="home" aria-selected="true">Tapdaq</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-8">
                                                                        <div class="tab-content no-padding" id="myTab2Content">
                                                                            <div class="tab-pane fade show active" id="platformm17" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Admob Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1840">
                                                                                    <div class="form-group">
                                                                                        <label for="">Select Admob Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                        <option value="">Choose account </option>
                                                                                                    </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- <div class="form-group">
                                                                                        <label>Load Ad Ids? </label>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                                                                            <label class="form-check-label" for="inlineRadio1">Random</label>
                                                                                        </div>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                            <label class="form-check-label" for="inlineRadio2">Fix</label>
                                                                                        </div>
                                                                                        <div class="form-check form-check-inline">
                                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                                                            <label class="form-check-label" for="inlineRadio3">eCPM Wise</label>
                                                                                        </div>
                                                                                        <div class="text-small font-weight-500 text-muted">Note : eCPM Wise only apply in <b>Interstitial</b> &amp; Other format works as <b>Random</b></div>
                                                                                    </div> -->
                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id17" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner17()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner17">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner17[]" placeholder="Enter Banner ID" value="/6499/example/banner">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                <div class="form-group">
                                                                                    <label>Interstitial</label>
                                                                                    <button type="button" class="btn btn-primary" onclick="addRowInterstitial17()"><i class="fas fa-plus"></i></button>
                                                                                    <div id="contentInterstitial17">
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text" class="form-control" name="Interstitial17[]" placeholder="Enter Interstitial ID" value="/6499/example/interstitial">
                                                                                            <div class="invalid-feedback">
                                                                                                Enter Interstitial Id
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>Native</label>
                                                                                    <button type="button" class="btn btn-primary" onclick="addRowNative17()"><i class="fas fa-plus"></i></button>
                                                                                    <div id="contentNative17">
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text" class="form-control" name="Native17[]" placeholder="Enter Native ID" value="/6499/example/native">
                                                                                            <div class="invalid-feedback">
                                                                                                Enter Native Id
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>RewardedVideo</label>
                                                                                    <button type="button" class="btn btn-primary" onclick="addRowRewardedVideo17()"><i class="fas fa-plus"></i></button>
                                                                                    <div id="contentRewardedVideo17">
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text" class="form-control" name="RewardedVideo17[]" placeholder="Enter RewardedVideo ID" value="/6499/example/rewarded">
                                                                                            <div class="invalid-feedback">
                                                                                                Enter RewardedVideo Id
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>AppOpen</label>
                                                                                    <button type="button" class="btn btn-primary" onclick="addRowAppOpen17()"><i class="fas fa-plus"></i></button>
                                                                                    <div id="contentAppOpen17">
                                                                                        <div class="input-group mb-3">
                                                                                            <input type="text" class="form-control" name="AppOpen17[]" placeholder="Enter AppOpen ID" value="/6499/example/app-open">
                                                                                            <div class="invalid-feedback">
                                                                                                Enter AppOpen Id
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="tab-pane fade " id="platformm18" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Facebook audience network Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1841">
                                                                                    <div class="form-group">
                                                                                        <label>Select Facebook audience network Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner18()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner18">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner18[]" placeholder="Enter Banner ID" value="IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Interstitial</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowInterstitial18()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentInterstitial18">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Interstitial18[]" placeholder="Enter Interstitial ID" value="IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Interstitial Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Native</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNative18()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNative18">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Native18[]" placeholder="Enter Native ID" value="IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Native Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>RewardedVideo</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowRewardedVideo18()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentRewardedVideo18">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="RewardedVideo18[]" placeholder="Enter RewardedVideo ID" value="IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter RewardedVideo Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>NativeBanner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNativeBanner18()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNativeBanner18">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="NativeBanner18[]" placeholder="Enter NativeBanner ID" value="IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter NativeBanner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm19" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Unity Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1842">
                                                                                    <div class="form-group">
                                                                                        <label>Select Unity Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id19" placeholder="Enter App ID" value="Unity App ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm23" role="tabpanel" aria-labelledby="home-tab4">
                                                                                AppNext Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1843">
                                                                                    <div class="form-group">
                                                                                        <label>Select AppNext Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id23" placeholder="Enter App ID" value="AppNext App ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm24" role="tabpanel" aria-labelledby="home-tab4">
                                                                                StartApp Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1844">
                                                                                    <div class="form-group">
                                                                                        <label>Select StartApp Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id24" placeholder="Enter App ID" value="StartApp  App ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm25" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Qureka Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1845">
                                                                                    <div class="form-group">
                                                                                        <label>Select Qureka Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id25" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner25[]" placeholder="Enter Banner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Interstitial</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowInterstitial25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentInterstitial25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Interstitial25[]" placeholder="Enter Interstitial ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Interstitial Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Native</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNative25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNative25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Native25[]" placeholder="Enter Native ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Native Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>RewardedVideo</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowRewardedVideo25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentRewardedVideo25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="RewardedVideo25[]" placeholder="Enter RewardedVideo ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter RewardedVideo Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>NativeBanner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNativeBanner25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNativeBanner25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="NativeBanner25[]" placeholder="Enter NativeBanner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter NativeBanner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>AppOpen</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowAppOpen25()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentAppOpen25">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="AppOpen25[]" placeholder="Enter AppOpen ID" value="/6499/example/app-open">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter AppOpen Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm26" role="tabpanel" aria-labelledby="home-tab4">
                                                                                AD Manager Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1846">
                                                                                    <div class="form-group">
                                                                                        <label>Select AD Manager Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id26" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner26[]" placeholder="Enter Banner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Interstitial</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowInterstitial26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentInterstitial26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Interstitial26[]" placeholder="Enter Interstitial ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Interstitial Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Native</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNative26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNative26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Native26[]" placeholder="Enter Native ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Native Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>RewardedVideo</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowRewardedVideo26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentRewardedVideo26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="RewardedVideo26[]" placeholder="Enter RewardedVideo ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter RewardedVideo Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>NativeBanner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNativeBanner26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNativeBanner26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="NativeBanner26[]" placeholder="Enter NativeBanner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter NativeBanner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>AppOpen</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowAppOpen26()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentAppOpen26">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="AppOpen26[]" placeholder="Enter AppOpen ID" value="/6499/example/app-open">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter AppOpen Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm27" role="tabpanel" aria-labelledby="home-tab4">
                                                                                IronSource Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1847">
                                                                                    <div class="form-group">
                                                                                        <label>Select IronSource Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id27" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm28" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Mopub Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1848">
                                                                                    <div class="form-group">
                                                                                        <label>Select Mopub Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id28" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner28()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner28">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner28[]" placeholder="Enter Banner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Interstitial</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowInterstitial28()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentInterstitial28">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Interstitial28[]" placeholder="Enter Interstitial ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Interstitial Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Native</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowNative28()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentNative28">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Native28[]" placeholder="Enter Native ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Native Id
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade " id="platformm29" role="tabpanel" aria-labelledby="home-tab4">
                                                                                Tapdaq Placement
                                                                                <div class="border" style="padding: 20px;">
                                                                                    <input type="hidden" name="placementids[]" value="1849">
                                                                                    <div class="form-group">
                                                                                        <label>Select Tapdaq Account</label>
                                                                                        <div class="search_select_box">
                                                                                            <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                                                                            <option value="">Choose account </option>
                                                                                                        </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>App Id</label>
                                                                                        <input type="text" class="form-control" name="app_id29" placeholder="Enter App ID" value="PLACEMENT ID">
                                                                                        <div class="invalid-feedback">
                                                                                            App ID
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Banner</label>
                                                                                        <button type="button" class="btn btn-primary" onclick="addRowBanner29()"><i class="fas fa-plus"></i></button>
                                                                                        <div id="contentBanner29">
                                                                                            <div class="input-group mb-3">
                                                                                                <input type="text" class="form-control" name="Banner29[]" placeholder="Enter Banner ID" value="PLACEMENT ID">
                                                                                                <div class="invalid-feedback">
                                                                                                    Enter Banner Id
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade  mt-4" id="other-settings" role="tabpanel" aria-labelledby="list-other-settings-list">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4" id="otherset">
                                                        <div class="">
                                                            <div class="card-header" style="margin: auto;  justify-content: center;  align-items: center; ">
                                                                <h4>Other Settings</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">

                                                                    <li class="media">
                                                                        <div class="media-body">
                                                                            <div class="media-title"> Location Wise Report? </div>
                                                                        </div>
                                                                        <div class="media-cta">
                                                                            <label class="switch">
                                                    <input type="checkbox" id="app_locationWiseReportStatus" name="app_locationWiseReportStatus">
                                                    <span class="slider round"></span>
                                                    </label>
                                                                        </div>
                                                                    </li>

                                                                    <li class="media">
                                                                        <div class="media-body">
                                                                            <div class="media-title"> Need Internet compulsory? </div>
                                                                        </div>
                                                                        <div class="media-cta">
                                                                            <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                    </label>
                                                                        </div>
                                                                    </li>

                                                                    <li class="media">
                                                                        <div class="media-body">
                                                                            <div class="media-title"> Version Update Dialog? </div>
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
                                                                            <div class="media-title"> Show Dialog Before Ad Show? </div>
                                                                        </div>
                                                                        <div class="media-cta">
                                                                            <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                    </label>
                                                                        </div>
                                                                    </li>

                                                                    <li class="media">
                                                                        <div class="media-body">
                                                                            <div class="media-title"> Show Ad in App? </div>
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
                                                                            <div class="media-title"> Show Test Ad in Debug App </div>
                                                                            <div class="text-muted">Test Ad Only For FB &amp; Admob</div>
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
                                                                            <div class="media-title"> More App </div>

                                                                        </div>
                                                                        <div class="media-cta">
                                                                            <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                    </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div id="filterddd"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade mt-4" id="list-parameter" role="tabpanel" aria-labelledby="list-parameter-list">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div id="container_copy_parameter" class="text-center">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="Parameter_cnt" id="Parameter_cnt" value="0">
                                                                    <label></label>
                                                                    <button type="button" class="btn btn-primary" onclick="addRowParameter()"><i class="fas fa-plus"></i></button>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#copyParameterModal">Copy From Other App</button>
                                                                    <div style="margin-top: 10px;">
                                                                        <div id="contentParameter">

                                                                            <div class="form-row" style="margin: auto;  justify-content: center;  align-items: center; ">
                                                                                <div class="form-group col-md-2">
                                                                                    <input type="text" class="form-control" placeholder="Name" name="ParameterName0" onkeypress="return blockSpecialChar(event)">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <input type="text" class="form-control" placeholder="Value" name="ParameterValue0">
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <input type="text" class="form-control" placeholder="Hint" name="ParameterHint0">
                                                                                </div>
                                                                                <div class="form-group col-md-1">
                                                                                    <button class="btn btn-danger" type="button" onclick="removeRowParameter(this)"><i class="fas fa-times"></i></button>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <input type="Submit" style="display:none;" name="edit_Submit" id="edit_Submit" class="btn btn-lg btn-success" value="Save">
                                <input type="hidden" name="actionn" id="actionn" value="Save">
                                <button type="button" class="btn btn-success" onclick="setupAppSubmit(1);">Save</button>
                                <a href="{{url('playstorelist')}}"><button type="button" class="btn btn-success" onclick="setupAppSubmit(2);">Save &amp; Continue</button></a>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        <!-- #/ container -->

        <!--**********************************
            Content body end
        ***********************************-->



        <!-- model parameter -->
        <div class="modal fade" id="copyParameterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Application</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                    </div>
                    <form class="needs-validation" novalidate="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Select Account*</label>
                                <select class="form-control" style="width: 100%" name="account_id" id="select_account_id_for_copyp" required="" onchange="select_Account_applist();" tabindex="0" aria-hidden="false">
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
                            <div id="containerAccountAppList_copyp">
                                <div class="form-group">
                                    <label>Select App*</label>
                                    <select class="form-control" style="width: 100%;" name="app_parameter_copy" id="app_parameter_copy" required="" tabindex="0" aria-hidden="false">
                                 <option disabled="" value="" selected="">Choose Account</option>
                              </select>
                                    <div class="invalid-feedback">
                                        Select App Name
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <input type="button" name="submitCreateApp" class="btn btn-primary" value="Copy" onclick="copyAppParameter();">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <!-- model start -->
    <div class="modal fade" id="basicModalMoreField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> App More Fields </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                </div>
                <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="modal-body">




                        <div class="form-group">
                            <label>Qureka URL :</label>
                            <input type="text" class="form-control" name="qurekaurl" value="https://play130.atmequiz.com/">

                        </div>




                        <div class="form-group">
                            <label>Check Qureka :</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                <label class="form-check-label" for="inlineRadio1">Enable</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Disable</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>First Qureka :</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                <label class="form-check-label" for="inlineRadio1">Enable</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Disable</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Back Press :</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                <label class="form-check-label" for="inlineRadio1">Enable</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Disable</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Cricket URL :</label>
                            <input type="text" class="form-control" name="cricketurl" value="https://play130.atmequiz.com/">

                        </div>






                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <input type="Submit" name="field_Submit" class="btn btn-success" value="Save">
                        <button type="button" style="margin-left: 20px;" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
@endsection
