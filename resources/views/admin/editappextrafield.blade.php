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
                                    <h4>Edit App Extra Field</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Field Name*</label>
                                        <input type="text" class="form-control" name="moreapp_group_name" required="">
                                        <div class="invalid-feedback">
                                            Enter category Name
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Field Type*</label>
                                        <select class="form-control" name="extra_field_type" required="" tabindex="0" aria-hidden="false">
                                            <option value="1">Enable Disable Button</option>
                                            <option value="2">Text Box</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            Select Field Type
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Field Key*</label>
                                        <input type="text" class="form-control" name="extra_field_key" required="" onkeypress="return blockSpecialChar(event)">
                                        <div class="invalid-feedback">
                                            Enter Field Key
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Field Default Value</label>
                                        <input type="text" class="form-control" name="extra_field_value">
                                        <small class="text-muted">If Field Type is Enable Disable : Enable=1, Disable=0</small><br>
                                        <small class="text-muted">If Field Type is Text : You Can Add Any Value</small>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">
                                    <a href="{{url('appextrafield')}}"><input type="button" name="Submit" class="btn btn-primary" value="Back"></a>
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


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Adsure</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************--
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

     @endsection
