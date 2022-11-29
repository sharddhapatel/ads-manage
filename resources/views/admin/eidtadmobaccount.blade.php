@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-2 col-md-2 col-lg-2"></div>
                    <div class="col-12 col-md-8 col-lg-8">

                        <div class="card" id="addplatform">
                            <form class="needs-validation" enctype="multipart/form-data" method="post">
                                <div class="card-header">
                                    <h4>Edit Platform</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-body text-center">
                                        <div class="card-body text-center">
                                            <img src="{{URL::asset('assets/images/google-admob.svg')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100" style="border: #54ca68 2px solid;">
                                        </div>

                                    </div>

                                    <div>
                                        <div class="form-group">
                                            <label>Logo</label>
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
                                                <input type="text" class="form-control" name="logo_link" id="logo_link" placeholder="Enter Direct Logo Link" value="https://cdn.worldvectorlogo.com/logos/google-admob.svg">
                                            </div>
                                        </div>
                                        <div class="form-group" style="display:none;">
                                            <label>Platform Name*</label>
                                            <input type="hidden" class="form-control" name="platform_id" value="17">
                                            <input type="text" class="form-control" name="platform_name" value="Admob" required="">
                                            <div class="invalid-feedback">
                                                Enter Platform Name
                                            </div>
                                        </div>
                                        <div class="section-title">Choose Support Ad Format</div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                            <label class="form-check-label" for="inlineCheckbox1">App ID</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Banner
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Interstitial
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Native
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Rewarded Video
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Rewarded Interstitial
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                Native Banner
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                App Open</label>
                                        </div>

                                    </div>

                                    <div style="display:none;">

                                        <div class="form-group">
                                            <label>Banner </label>

                                            <input type="number" placeholder="Enter No Of Banner ID" required="" min="1" max="5" class="form-control" name="platform_noOfBanner" value="1">

                                        </div>

                                        <div class="form-group">
                                            <label>Interstitial </label>

                                            <input type="number" placeholder="Enter No Of Interstitial ID" required="" min="1" max="5" class="form-control" name="platform_noOfInterstitial" value="1">

                                        </div>

                                        <div class="form-group">
                                            <label>Native </label>

                                            <input type="number" placeholder="Enter No Of Native ID" required="" min="1" max="5" class="form-control" name="platform_noOfNative" value="1">

                                        </div>

                                        <div class="form-group">
                                            <label>RewardedVideo </label>

                                            <input type="number" placeholder="Enter No Of RewardedVideo ID" required="" min="1" max="5" class="form-control" name="platform_noOfRewardedVideo" value="1">

                                        </div>



                                        <div class="form-group">
                                            <label>AppOpen </label>

                                            <input type="number" placeholder="Enter No Of AppOpen ID" required="" min="1" max="5" class="form-control" name="platform_noOfAppOpen" value="1">

                                        </div>

                                    </div>


                                </div>
                                <div class="card-footer">
                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-2 col-md-2 col-lg-2"></div>
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
