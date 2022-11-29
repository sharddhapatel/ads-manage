@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col-12 col-sm-12 col-lg-12">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">


                                <div class="clearfix"></div>

                                <h4 style="margin-left: 20px;"> Hashtag Apps</h4>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label style="font-weight: 900;">Title *</label>
                                            <input type="text" class="form-control" name="notification_title" value="" placeholder="Enter Title" required="">
                                            <div class="invalid-feedback">
                                                Enter Title
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label style="font-weight: 900;">Message *</label>
                                            <textarea class="form-control" required="" name="notification_message" cols="80" label="notes" rows="4" wrap="virtual"></textarea>
                                            <div class="invalid-feedback">
                                                Enter Message
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label style="font-weight: 900;">URL (optional)</label>
                                            <input type="text" class="form-control" name="notification_redirectUrl" placeholder="Enter Redirect URL" value="">
                                        </div>

                                        <div class="form-group">
                                            <label style="font-weight: 900;">Image (optional)</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                                            Upload
                                                            <input type="file" name="image_file" accept="image/*" onchange="loadFile(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                                        </div>
                                                        <span style="margin-left: 20px;">OR</span>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="image_link" id="image_link" placeholder="Enter Direct Image URL" value="">
                                            </div>
                                        </div>

                                        <div class="form-group" id="ppimage" style="display: none;">
                                            <img id="previeww" class="img-thumbnail" width="100" height="100">
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <input type="Submit" name="submit_send_notification" class="btn btn-info" value="Send">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 style="margin-bottom: 0px;">Notification List</h4>


                                <div class="card-header-action">
                                    <a href="" data-toggle="modal" data-target="#add-category"><button data-toggle="collapse" class="btn btn-warning badge-shadow">Delete Selected Notification</button></a>
                                </div>
                                <!-- model start -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><strong></strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-6">
                                                            <h4 class="modal-title"><strong>Please select Notification</strong></h4>
                                                        </div>
                                                        <div class="col-3"></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- <div class="modal-footer"> -->
                                            <div class="row mb-4">
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">OK</button>
                                                </div>
                                                <div class="col-4"></div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- model end -->
                            </div>

                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" id="checkboxalll"></th>
                                                        <th>NO</th>
                                                        <th>DATE</th>
                                                        <th>NOTIFICATION</th>
                                                        <th>REDIRECT URL</th>
                                                        <th>IMAGE</th>
                                                        <th>SENT</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>03-06-22 10:16:23 AM</td>
                                                        <td>
                                                            Become a champion in action shooter game? <br>
                                                            <span class="text-muted">Become a Jedi master without ever leaving home.....</span>

                                                        </td>
                                                        <td>
                                                            <a href="https://crazzon.co.in/" target="_bank" style="color: blue;">https://crazzon.co.in/</a>
                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t1.webp')}}" alt="" width="100px" height="50px"></td>
                                                        <td>48575</td>
                                                        <td>
                                                            <a href="sendnotificationgroupwise.html" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Duplicate
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>03-06-22 10:16:23 AM</td>
                                                        <td>
                                                            Become a champion in action shooter game? <br>
                                                            <span class="text-muted">Become a Jedi master without ever leaving home.....</span>

                                                        </td>
                                                        <td>
                                                            <a href="https://crazzon.co.in/" target="_bank" style="color: blue;">https://crazzon.co.in/</a>
                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t2.webp')}}" alt="" width="100px" height="50px"></td>
                                                        <td>48575</td>
                                                        <td>
                                                            <a href="{{url('sendnotificationgroupwise')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Duplicate
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>03-06-22 10:16:23 AM</td>
                                                        <td>
                                                            Become a champion in action shooter game? <br>
                                                            <span class="text-muted">Become a Jedi master without ever leaving home.....</span>

                                                        </td>
                                                        <td>
                                                            <a href="https://crazzon.co.in/" target="_bank" style="color: blue;">https://crazzon.co.in/</a>
                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t3.webp')}}" alt="" width="100px" height="50px"></td>
                                                        <td>48575</td>
                                                        <td>
                                                            <a href="{{url('sendnotificationgroupwise')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Duplicate
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>03-06-22 10:16:23 AM</td>
                                                        <td>
                                                            Become a champion in action shooter game? <br>
                                                            <span class="text-muted">Become a Jedi master without ever leaving home.....</span>

                                                        </td>
                                                        <td>
                                                            <a href="https://crazzon.co.in/" target="_bank" style="color: blue;">https://crazzon.co.in/</a>
                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t4.webp')}}" alt="" width="100px" height="50px"></td>
                                                        <td>48575</td>
                                                        <td>
                                                            <a href="{{url('sendnotificationgroupwise')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Duplicate
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" value="1616"></td>
                                                        <td>1</td>
                                                        <td>03-06-22 10:16:23 AM</td>
                                                        <td>
                                                            Become a champion in action shooter game? <br>
                                                            <span class="text-muted">Become a Jedi master without ever leaving home.....</span>

                                                        </td>
                                                        <td>
                                                            <a href="https://crazzon.co.in/" target="_bank" style="color: blue;">https://crazzon.co.in/</a>
                                                        </td>
                                                        <td><img src="{{URL:: asset('assets/images/t5.webp')}}" alt="" width="100px" height="50px"></td>
                                                        <td>48575</td>
                                                        <td>
                                                            <a href="{{url('sendnotificationgroupwise')}}" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                                <i class="fas fa-undo"></i> Duplicate
                                                            </a>
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
