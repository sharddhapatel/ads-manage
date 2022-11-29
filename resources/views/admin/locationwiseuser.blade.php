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
                                <h4 style="margin-bottom: 0px;">Location Wise</h4>
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
                                            <div class="input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
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
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search State">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-default" placeholder="Search Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
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
                                                        <th>DATE</th>
                                                        <th>APP</th>
                                                        <th>STATE NAME</th>
                                                        <th>COUNTRY NAME</th>
                                                        <th>DOWNLOAD</th>
                                                        <th>ACTIVE USER</th>
                                                        <th>PROXY DOWNLOAD</th>
                                                        <th>HOSTING DOWNLOAD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>25-05-2021</td>
                                                        <td>xyx</td>
                                                        <td>Gujarat</td>
                                                        <td>india</td>
                                                        <td>1</td>
                                                        <td>85</td>
                                                        <td>6</td>
                                                        <td>8</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>25-05-2021</td>
                                                        <td>xyx</td>
                                                        <td>Gujarat</td>
                                                        <td>india</td>
                                                        <td>1</td>
                                                        <td>85</td>
                                                        <td>6</td>
                                                        <td>8</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>25-05-2021</td>
                                                        <td>xyx</td>
                                                        <td>Gujarat</td>
                                                        <td>india</td>
                                                        <td>1</td>
                                                        <td>85</td>
                                                        <td>6</td>
                                                        <td>8</td>
                                                    </tr>
                                                </tbody><br>
                                                <tfoot>
                                                    <tr>
                                                        <td rowspan="1" colspan="1" style="border-top: none; border-right: none;"></td>
                                                        <td rowspan="1" colspan="1" style="border-top: none; border-right: none;"></td>
                                                        <td rowspan="1" colspan="1" style="border-top: none; border-right: none;"></td>
                                                        <td rowspan="1" colspan="1" style="border-top: none; border-right: none;"></td>
                                                        <td rowspan="1" colspan="1" style="border-top: none; border-right: none;"></td>
                                                        <td class="text-center" rowspan="1" colspan="1" style="border-top: none;">
                                                            <div class="mr-4 border-right pr-4">
                                                                <dt>Total Download</dt>
                                                                <dd>0</dd>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" rowspan="1" colspan="1" style="border-top: none;">
                                                            <div class="mr-4 border-right pr-4">
                                                                <dt>Active Users</dt>
                                                                <dd>0</dd>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" rowspan="1" colspan="1" style="border-top: none;">
                                                            <div class="mr-4 border-right pr-4">
                                                                <dt>Proxy Download</dt>
                                                                <dd class="text-danger">0</dd>

                                                            </div>
                                                        </td>
                                                        <td class="text-center" rowspan="1" colspan="1" style="border-top: none;">
                                                            <div class="mr-4 border-right pr-4">
                                                                <dt>Hosting Download</dt>
                                                                <dd class="text-danger">0</dd>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>


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
