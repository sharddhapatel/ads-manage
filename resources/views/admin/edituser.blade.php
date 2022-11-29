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
                        <form action="{{url('updateuser')}}" class="needs-validation" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="card-header">
                                <h4>Create User</h4>
                            </div>
                            <input type="hidden" name="id" class="form__input" placeholder="name" value="{{$data->id}}">
                            <div class="card-body">
                                <div class="card-body text-center">
                                    <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning" style="height: 100px; width: 100px"> -->
                                    <img src="{{URL:: asset('assets/images/logo1.png')}}" class="avatar" id="preview" class="img-thumbnail rounded-circle">
                                    <!-- </figure> -->
                                </div>
                                <div class="form-group">



                                    <div class="col-12">
                                        <div class="form__gallery">
                                            <label id="gallery1" for="form__gallery-upload">Product Image</label>
                                            <input data-name="#gallery1" id="form__gallery-upload" name="image" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" value="{{$data->photo}}">
                                        </div>
                                    </div>
                                    <img src="{{ url('item_img') }}/{{$data->photo }}" alt="" height="100" width="100" />

                            </div>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role" value="{{$data->role}}" required="" tabindex="0" aria-hidden="false">
                                    <?php $user = \App\Models\adduser::get(); ?>
                                    @foreach($user as $role)
                                    <option value="{{$role->role}}">{{$role->role}}</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Manager">Manager</option>
                                    @endforeach
                                </select>
                                <!-- <div class="invalid-feedback">
                                    Select User Role
                                </div> -->
                            </div>
                            <div class="form-group">
                                <label>User Full Name</label>
                                <input type="hidden" class="form-control" value="publishpltfm">
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" name="platform_name" required="">
                                <div class="invalid-feedback">
                                    Enter User Name
                                </div>
                            </div>
                            <div class="form-group">
                                <label>User Email</label>
                                <input type="hidden" class="form-control" value="publishpltfm">
                                <input type="text" class="form-control" name="email" value="{{$data->email}}" name="platform_name" required="">
                                <div class="invalid-feedback">
                                    Enter Email id
                                </div>
                            </div>
                            <div class="form-group">
                                <label>User Password</label>
                                <input type="hidden" class="form-control" value="publishpltfm">
                                <input type="password" class="form-control" name="password" value="{{$data->password}}" name="platform_name" required="">
                                <div class="invalid-feedback">
                                    Enter Password
                                </div>
                            </div>

                            <!-- <div class="form-check form-check-inline" >
                                    <label>Login Permission : </label><br><br>
                                    <input class="form-check-input" type="checkbox" value="{{$data->loginpermission}}" @if(old('permission',$data->loginpermission)=="1") checked @endif  name="permission[]" value="Web Panel">WebPanel
                                    <input class="form-check-input" type="checkbox" value="{{$data->loginpermission}}" name="permission[]" value="Mobile Application">Mobile Application <br>
                                </div> -->
                            <label>Login Permission : </label><br><br>
                            <label class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" name="permission[]" value="webpanel" {{ old('permission', $data->loginpermission)? 'checked="checked"':null }}>WebPanel<br>
                                <input class="form-check-input" type="checkbox" name="permission[]" value="mobileapplication" {{ old('permission', $data->loginpermission)? 'checked="checked"':null }}> MobileApplication
                            </label>
                    </div>
                    <div class="card-footer">
                        <input type="Submit" name="Submit" class="btn btn-primary" value="Edit">
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
