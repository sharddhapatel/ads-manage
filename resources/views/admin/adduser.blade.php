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
                <div class="collapse show" id="collapseExample" style="">
                    <div class="card" id="addplatform">
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('message') !!}
                        </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('error') !!}
                        </div>
                        @endif
                        <form action="{{url('insertuser')}}" class="needs-validation" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="card-header">
                                <h4>Create User</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body text-center">
                                    <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style="height: 100px; width: 100px"> -->
                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" class="avatar" id="preview" class="img-thumbnail rounded-circle">
                                    <!-- </figure> -->
                                </div>
                                <div class="form-group">
                                    <label>User Photo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                    Upload
                                                    <input type="file" name="image" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                </div>
                                                <span style="margin-left: 20px; margin-right: 20px;">OR</span>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="logo_link" placeholder="Enter Direct Image Link">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>User Role*</label>
                                    <select class="form-control" name="role" required="" tabindex="0" aria-hidden="false">
                                        <option value="">Select Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Manager">Manager</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Select User Role
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>User Full Name*</label>
                                    <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                    <input type="text" class="form-control" name="name" required="">
                                    <div class="invalid-feedback">
                                        Enter User Name
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>User Email*</label>
                                    <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                    <input type="text" class="form-control" name="email" required="">
                                    <div class="invalid-feedback">
                                        Enter Email id
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>User Password*</label>
                                    <input type="hidden" class="form-control" name="platform_type" value="publishpltfm">
                                    <input type="password" class="form-control" name="password" required="">
                                    <div class="invalid-feedback">
                                        Enter Password
                                    </div>
                                </div>
                                <!-- <label >Login Permission : </label>
                                <div class="form-check form-check-inline ml-4" name="permission[]">
                                    <input class="form-check-input"  type="checkbox" id="inlineCheckbox1" value="Web Panel" >
                                    <label class="form-check-label" for="inlineCheckbox1">Web Panel</label>


                                </div> -->
                                <!-- <div class="form-check form-check-inline" >
  <input class="form-check-input"  type="checkbox" id="inlineCheckbox2" value="Mobile Application">
                                    <label class="form-check-label" for="inlineCheckbox2">Mobile Application</label>
                                </div> -->

                                <div class="form-check form-check-inline">
                                    <label>Login Permission : </label><br><br>
                                    <input class="form-check-input" type="checkbox" name="permission[]" value="webPanel">WebPanel<br>
                                    <input class="form-check-input" type="checkbox" name="permission[]" value="mobileapplication">Mobile Application <br>
                                </div>
                                <div class="card-footer">
                                    <input type="Submit" name="Submit" class="btn btn-primary" value="Create">
                                    <input type="Submit" name="Submit" class="btn btn-danger" value="Reset">
                                </div>
                        </form>
                    </div>
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
