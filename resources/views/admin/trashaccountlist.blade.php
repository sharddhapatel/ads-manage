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
                                            <h4 class="mb-1">Trash Account List</h4>
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
                                                                <th>#ID</th>
                                                                <th>ACCOUNT IMAGE</th>
                                                                <th>ACCOUNT NAME</th>
                                                                <th>ACCOUNT EMAIL</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td>abc@gmail.com</td>
                                                                <td>
                                                                    <a href="{{url('playstore')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                        <i class="fas fa-undo"></i> Restore
                                                                    </a>

                                                                    <a href="#"><button class="btn btn-icon btn-danger" onclick="deleteApp(1616);"><i class="far fa-trash-alt"></i> Delete Permanent</button></a>


                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>1</td>
                                                                <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="20px"></td>
                                                                <td>Speed VPN Pro-Secure Unlimited</td>
                                                                <td>abc@gmail.com</td>
                                                                <td>
                                                                    <a href="{{url('playstore')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                        <i class="fas fa-undo"></i> Restore
                                                                    </a>

                                                                    <a href="#"><button class="btn btn-icon btn-danger" onclick="deleteApp(1616);"><i class="far fa-trash-alt"></i> Delete Permanent</button></a>


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
