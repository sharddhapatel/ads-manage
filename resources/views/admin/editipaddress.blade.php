@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card">
                            <form class="needs-validation" novalidate="" method="post">
                                <div class="card-header">
                                    <h4>Edit IP Adress</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>IP Address - IP</label>
                                        <input type="text" class="form-control" name="moreapp_group_name" required="">
                                        <div class="invalid-feedback">
                                            Enter IP Address - IP
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>IP Address Name</label>
                                        <input type="text" class="form-control" name="moreapp_group_name" required="">
                                        <div class="invalid-feedback">
                                            Enter IP Address Name
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">
                                    <a href="{{url('ipaddress')}}"><input type="button" name="Submit" class="btn btn-primary" value="Back"></a>
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
