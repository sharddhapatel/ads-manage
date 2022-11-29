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
                        <h4 style="margin-bottom: 0px;">Users</h4>


                        <div class="card-header-action">
                            <a href="{{url('adduser')}}"><button data-toggle="collapse" class="btn btn-primary badge-shadow"><i class="fa fa-plus"></i> ADD USER</button></a>
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
                                                <th>Name</th>
                                                <th>ROLE</th>
                                                <th>PROFILE</th>

                                                <th>EMAIL</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $ans)
                                            <tr>

                                                <td>{{$ans->id}}</td>
                                                <td>{{$ans->name}}</td>
                                                <td>{{$ans->role}}</td>
                                                <!-- <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="20px"></td> -->
                                                <td><img src="{{url('item_img')}}/{{$ans->photo}}" hight="50" width="100"></td>

                                                <td>{{$ans->email}}</td>
                                                <td><span class="badge badge-success px-2">Active</span>
                                                <td><span><a href="editusers/{{$ans->id}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                        <a href="deleteuser/{{$ans->id}}" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-list-dots color-danger"></i></a></span>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
