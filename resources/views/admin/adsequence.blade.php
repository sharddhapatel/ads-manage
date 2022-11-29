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
                            </div>
                            <h5 class="mt-4 ml-4">Set Custom Ad Sequence</h5>
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>SEQUENCE NO</th>
                                                        <th>LOGO</th>
                                                        <th>APPLICATION DETAILS</th>
                                                        <th>APP DOWNLOAD</th>
                                                        <th>BANNER</th>
                                                        <th>AD STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="1" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>
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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="2" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="3" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="4" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="5" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="6" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="7" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="8" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="9" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input type="text" name="sequence[]" class="form-control mb-2 mr-sm-2" value="10" style="width: 75%; border-radius: 0.25rem;">
                                                            <input type="hidden" name="appids[]" class="form-control mb-2 mr-sm-2" value="115">
                                                        </td>

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

                                                    </tr>
                                            </table>
                                            <a href="{{url('livelinemoreappgroup')}}"><input type="button" class="btn btn-primary mt-4 mb-2 ml-4" value="Save" name="save_sequence"></a>
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
