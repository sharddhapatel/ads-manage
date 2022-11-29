@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{url('apppublishplatform')}}"> Application Monetize Platform</a></li>
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                    </ol>
                </nav>



                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Admob Accounts</h4>


                                <div class="card-header-action">
                                    <a href="{{url('trashaccountlist')}}" class="btn btn-warning">
                                        <i class="far fa-trash-alt"></i> Trash Account List
                                    </a>

                                    <a href="{{url('createadmobaccount')}}">
                                        <button data-toggle="collapse" class="btn btn-primary badge-shadow"><i class="fa fa-plus"></i>Create Account</button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" placeholder="Search Account Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="example">
                                            <div class="input-group">
                                                <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                <input type="text" name="datefilter" class="form-control" placeholder="Account Created Date" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <div class="search_select_box">
                                                <select class="form-control" data-live-search="true" id="val-skill" name="val-skill">
                                                    <option value="">Filter By </option>
                                                    <option value="hina">Active Account</option>
                                                    <option value="minal">Suspend Account</option>
                                                    <option value="rina">Ascending By Name</option>
                                                    <option value="nidhi">Descending By Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <button type="button" class="btn mb-1 btn-primary">Search</button>
                                        <button type="button" class="btn mb-1 btn-info">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @endsection
