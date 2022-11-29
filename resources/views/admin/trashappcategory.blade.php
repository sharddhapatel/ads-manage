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
                                            <h4 class="mb-1">Trash Category List</h4>
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
                                                                <th>APP CATEGORY NAME</th>
                                                                <th>STATUS</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>5</td>
                                                                <td>xyz</td>
                                                                <td><span class="badge badge-danger px-2">Deactive</span>
                                                                    <td><a href="#" class="btn btn-icon btn-success"> Restore </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>54</td>
                                                                <td>abc</td>
                                                                <td><span class="badge badge-danger px-2">Deactive</span>
                                                                    <td><a href="#" class="btn btn-icon btn-success"> Restore </a></td>
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
