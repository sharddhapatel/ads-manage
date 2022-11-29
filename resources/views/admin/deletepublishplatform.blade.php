@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Trash Application Publish Platform List</h4>
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
                                                                <th>PLATFORM IMAGE</th>
                                                                <th>PLATFORM NAME</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
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
