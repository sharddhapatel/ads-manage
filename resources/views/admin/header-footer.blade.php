<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:44:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Apps manager</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL:: asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Pignose Calender -->
    <link href="{{URL:: asset('assets/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{URL:: asset('assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- datepicker -->
    <link href="{{URL:: asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="{{URL:: asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="{{URL:: asset('assets/plugins/jquery-asColorPicker-master/css/asColorPicker.css')}}" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="{{URL:: asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{URL:: asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <!-- data table -->
    <link href="{{URL:: asset('assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('assets/css/profilepage.css')}}" rel="stylesheet">
    <!-- data table -->

    <link href="{{URL:: asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{url('index')}}">
                    <b class="logo-abbr"><img src="{{URL:: asset('assets/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{URL:: asset('assets/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{URL:: asset('assets/images/logo-text.png')}}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/1.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/2.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/3.svg')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/4.jpg')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/5.webp')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/6.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/7.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/8.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/9.jpg')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/10.png')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/11.webp')}}" alt="" width="25px">
                        </a>
                    </div>
                    <div class="hamburger">
                        <a href="#" class="toggle-icon">
                            <img src="{{URL:: asset('assets/images/12.png')}}" alt="" width="25px">
                        </a>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{URL:: asset('assets/images/user/1.png')}}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <!-- <p>HELLO HINA HIRPARA</p> -->
                                            <p>{{Session::get('login_email')}}</p>
                                            <a href="{{url('profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="#"><i class="icon-reload"></i> <span>check account suspend</span></a>
                                            <a href="#"><i class="icon-reload"></i> <span>check app publish</span></a>
                                            <a href="#"><i class="icon-reload"></i> <span>check app suspend & update</span></a>

                                            <!-- <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a> -->
                                        </li>

                                        <hr class="my-2">
                                        <li><a href="{{url('logout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">APPS MANAGER</li>
                    <li>
                        <a href="{{url('index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-suitcase"></i><span class="nav-text">Platform</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('apppublishplatform')}}  "><i class="fa-solid fa-arrow-up"></i>App Publish Platform</a></li>
                            <li><a href="{{url('appmonetizeplatform')}}"><i class="fa-solid fa-dollar-sign"></i>App Monetize Platform</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('allapps')}}" aria-expanded="false">
                            <i class="fa-solid fa-minimize"></i><span class="nav-text">All Apps</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-bell"></i><span class="nav-text">Push Notification</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('notificationappwise')}}"><i class="fa-solid fa-box"></i>Notification App Wise</a></li>
                            <li><a href="{{url('notificationgroupwise')}}"><i class="fa-solid fa-box"></i>Notification Group Wise</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('moreappgroup')}}" aria-expanded="false">
                            <i class="fa-brands fa-codepen"></i><span class="nav-text">MoreApp Group</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-at"></i><span class="nav-text">Advertise Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('createcustomad')}}"><i class="icon-grid menu-icon"></i>Create Custom AD</a></li>
                            <li><a href="{{url('customadgroup')}}"><i class="fa-brands fa-codepen"></i>Custom Ad Group</a></li>
                            <li><a href="{{url('appwisecustomad')}}"><i class="fa-solid fa-record-vinyl"></i>Apps Wise Custom Ad</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-desktop"></i><span class="nav-text">Analytics</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('locationlist')}}"><i class="icon-grid menu-icon"></i>Location List</a></li>
                            <li><a href="{{url('locationwiseuser')}}"><i class="icon-grid menu-icon"></i>Location Wise User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i><span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <!-- <li><a href="{{url('appcategory')}}"><i class="fa-solid fa-diagram-project"></i>App Category</a></li> -->
                            <li><a href="{{url('testadid')}}"><i class="fa-solid fa-text-width"></i>Test Ad ID</a></li>
                            <li><a href="{{url('othersettings')}}"><i class="fa-solid fa-gear"></i>Other Settings</a></li>
                            <li><a href="{{url('emailsettings')}}"><i class="fa-solid fa-gear"></i>Email Settings</a></li>
                            <li><a href="{{url('ipaddress')}}"><i class="fa-solid fa-globe"></i>IP Address</a></li>
                            <li><a href="{{url('appextrafield')}}"><i class="fa-solid fa-gear"></i>App Extra Field</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('users')}}" aria-expanded="false">
                            <i class="fa-solid fa-user"></i><span class="nav-text">Users</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('contant')

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="{{URL::asset('assets/plugins/common/common.min.js')}}"></script>
        <script src="{{URL:: asset('assets/js/custom.min.js')}}"></script>
        <script src="{{URL:: asset('assets/js/settings.js')}}"></script>
        <script src="{{URL:: asset('assets/js/gleek.js')}}"></script>
        <script src="{{URL:: asset('assets/js/styleSwitcher.js')}}"></script>

        <!-- Chartjs -->
        <script src="{{URL:: asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
        <!-- Circle progress -->
        <script src="{{URL:: asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
        <!-- Datamap -->
        <script src="{{URL:: asset('assets/plugins/d3v3/index.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/topojson/topojson.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
        <!-- Morrisjs -->
        <script src="{{URL:: asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/morris/morris.min.js')}}"></script>
        <!-- Pignose Calender -->
        <script src="{{URL:: asset('assets/plugins/moment/moment.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
        <!-- ChartistJS -->
        <script src="{{URL:: asset('assets/plugins/chartist/js/chartist.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

        <!-- datepicker js -->
        <script src="{{URL:: asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
        <!-- Clock Plugin JavaScript -->
        <script src="{{URL:: asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
        <!-- Color Picker Plugin JavaScript -->
        <script src="{{URL:: asset('assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
        <!-- Date Picker Plugin JavaScript -->
        <script src="{{URL:: asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- Date range Plugin JavaScript -->
        <script src="{{URL:: asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{URL:: asset('assets/js/plugins-init/form-pickers-init.js')}}"></script>

        <!-- data table -->
        <script src="{{URL:: asset('assets/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>

        <script src="{{URL:: asset('assets/js/dashboard/dashboard-1.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/summernote/dist/summernote.min.js')}}"></script>
        <script src="{{URL:: asset('assets/plugins/summernote/dist/summernote-init.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function toggleText() {
            var x = document.getElementById("collapseExample");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
        <script>
            $(document).ready(function() {
                $('.search_select_box select').selectpicker();
            })
        </script>

        <script>
            $(function() {
                $('input[name="datefilter"]').daterangepicker({

                    autoUpdateInput: false,
                    locale: {
                        cancelLabel: 'Clear'
                    },
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }

                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
            });

            $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
            });

            $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        </script>
        <script type="{{URL:: asset('assets/text/javascript')}}">
            $('input[name="datefilter"]').css('width', 0 + 'px');
        </script>
        <script type="text/javascript">
        $('#adShowSequence').show();
        $('#adShowAlernate').hide();

        $('#box_apply_allAdFormat').show();
        $('#box_apply_AdformatWise').hide();

        $('#adShowSequenceInterstitial').show();
        $('#adShowAlernateInterstitial').hide();

        $('#adShowSequenceNative').show();
        $('#adShowAlernateNative').hide();

        $('#adShowSequenceBanner').show();
        $('#adShowAlernateBanner').hide();
    </script>
    <script type="text/javascript">
        $('input[type=radio][name=app_howShowAd]').change(function() {
            if (this.value == 0) {
                $('#adShowSequence').show();
                $('#adShowAlernate').hide();
            } else if (this.value == 1) {
                $('#adShowSequence').hide();
                $('#adShowAlernate').show();
            }
        });
        $('input[type=radio][name=app_applyAdFormat]').change(function() {
            if (this.value == 0) {
                $('#box_apply_allAdFormat').show();
                $('#box_apply_AdformatWise').hide();
            } else if (this.value == 1) {
                $('#box_apply_allAdFormat').hide();
                $('#box_apply_AdformatWise').show();
            }
        });
        $('input[type=radio][name=app_howShowAdInterstitial]').change(function() {
            if (this.value == 0) {
                $('#adShowSequenceInterstitial').show();
                $('#adShowAlernateInterstitial').hide();
            } else if (this.value == 1) {
                $('#adShowSequenceInterstitial').hide();
                $('#adShowAlernateInterstitial').show();
            }
        });
        $('input[type=radio][name=app_howShowAdNative]').change(function() {
            if (this.value == 0) {
                $('#adShowSequenceNative').show();
                $('#adShowAlernateNative').hide();
            } else if (this.value == 1) {
                $('#adShowSequenceNative').hide();
                $('#adShowAlernateNative').show();
            }
        });
        $('input[type=radio][name=app_howShowAdBanner]').change(function() {


            if (this.value == 0) {
                $('#adShowSequenceBanner').show();
                $('#adShowAlernateBanner').hide();
            } else if (this.value == 1) {
                $('#adShowSequenceBanner').hide();
                $('#adShowAlernateBanner').show();
            }
        });
    </script>
    <script>
        function select_Account_applist() {
            var account_id = $('#select_account_id_for_copyp').val();

            $.ajax({
                url: 'https://hashtaginfotech.co.in/AppsManager/AppClr/select_account_wise_app_copyp',
                type: "post",

                data: {
                    'account_id': account_id

                },
                success: function(data) {
                    $('#containerAccountAppList_copyp').html(data);


                }
            });
        }
        function copyAppParameter() {
            var app_id = $('#app_parameter_copy').val();
            if (app_id != "") {
                $.ajax({
                    url: 'https://hashtaginfotech.co.in/AppsManager/AppClr/select_app_parameter',
                    type: "post",

                    data: {
                        'app_id': app_id

                    },
                    success: function(data) {
                        $('#container_copy_parameter').html(data);
                        $('#copyParameterModal').modal("hide");


                    }
                });
            }


        }
    </script>
    <script type="text/javascript">
        var banner17 = 1;
        var Interstitial17 = 1;
        var Native17 = 1;
        var RewardedVideo17 = 1;
        var RewardedInterstitial17 = 1;
        var NativeBanner17 = 1;
        var AppOpen17 = 1;


        var banner18 = 1;
        var Interstitial18 = 1;
        var Native18 = 1;
        var RewardedVideo18 = 1;
        var RewardedInterstitial18 = 1;
        var NativeBanner18 = 1;
        var AppOpen18 = 1;


        var banner19 = 1;
        var Interstitial19 = 1;
        var Native19 = 1;
        var RewardedVideo19 = 1;
        var RewardedInterstitial19 = 1;
        var NativeBanner19 = 1;
        var AppOpen19 = 1;


        var banner23 = 1;
        var Interstitial23 = 1;
        var Native23 = 1;
        var RewardedVideo23 = 1;
        var RewardedInterstitial23 = 1;
        var NativeBanner23 = 1;
        var AppOpen23 = 1;


        var banner24 = 1;
        var Interstitial24 = 1;
        var Native24 = 1;
        var RewardedVideo24 = 1;
        var RewardedInterstitial24 = 1;
        var NativeBanner24 = 1;
        var AppOpen24 = 1;


        var banner25 = 1;
        var Interstitial25 = 1;
        var Native25 = 1;
        var RewardedVideo25 = 1;
        var RewardedInterstitial25 = 1;
        var NativeBanner25 = 1;
        var AppOpen25 = 1;


        var banner26 = 1;
        var Interstitial26 = 1;
        var Native26 = 1;
        var RewardedVideo26 = 1;
        var RewardedInterstitial26 = 1;
        var NativeBanner26 = 1;
        var AppOpen26 = 1;


        var banner27 = 1;
        var Interstitial27 = 1;
        var Native27 = 1;
        var RewardedVideo27 = 1;
        var RewardedInterstitial27 = 1;
        var NativeBanner27 = 1;
        var AppOpen27 = 1;


        var banner28 = 1;
        var Interstitial28 = 1;
        var Native28 = 1;
        var RewardedVideo28 = 1;
        var RewardedInterstitial28 = 1;
        var NativeBanner28 = 1;
        var AppOpen28 = 1;


        var banner29 = 1;
        var Interstitial29 = 1;
        var Native29 = 1;
        var RewardedVideo29 = 1;
        var RewardedInterstitial29 = 1;
        var NativeBanner29 = 1;
        var AppOpen29 = 1;


        var banner30 = 1;
        var Interstitial30 = 1;
        var Native30 = 1;
        var RewardedVideo30 = 1;
        var RewardedInterstitial30 = 1;
        var NativeBanner30 = 1;
        var AppOpen30 = 1;



        function addRowBanner17() {


            if (banner17 <= 4) {
                banner17++;
                document.querySelector('#contentBanner17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner17[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner17(input) {
            input.parentNode.parentNode.remove();
            banner17--;

        }




        function addRowInterstitial17() {


            if (Interstitial17 <= 4) {
                Interstitial17++;
                document.querySelector('#contentInterstitial17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial17[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial17(input) {
            input.parentNode.parentNode.remove();
            Interstitial17--;

        }





        function addRowNative17() {


            if (Native17 <= 4) {
                Native17++;
                document.querySelector('#contentNative17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native17[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative17(input) {
            input.parentNode.parentNode.remove();
            Native17--;

        }




        function addRowRewardedVideo17() {


            if (RewardedVideo17 <= 4) {
                RewardedVideo17++;

                document.querySelector('#contentRewardedVideo17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo17[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo17(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo17--;

        }


        function addRowRewardedInterstitial17() {


            if (RewardedInterstitial17 <= 4) {
                RewardedInterstitial17++;

                document.querySelector('#contentRewardedInterstitial17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial17[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial17(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial17--;

        }



        function addRowNativeBanner17() {


            if (NativeBanner17 <= 4) {
                NativeBanner17++;

                document.querySelector('#contentNativeBanner17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner17[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner17(input) {
            input.parentNode.parentNode.remove();
            NativeBanner17--;

        }



        function addRowAppOpen17() {


            if (AppOpen17 <= 4) {
                AppOpen17++;

                document.querySelector('#contentAppOpen17').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen17[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen17(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen17(input) {
            input.parentNode.parentNode.remove();
            AppOpen17--;

        }




        function addRowBanner18() {


            if (banner18 <= 4) {
                banner18++;
                document.querySelector('#contentBanner18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner18[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner18(input) {
            input.parentNode.parentNode.remove();
            banner18--;

        }




        function addRowInterstitial18() {


            if (Interstitial18 <= 4) {
                Interstitial18++;
                document.querySelector('#contentInterstitial18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial18[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial18(input) {
            input.parentNode.parentNode.remove();
            Interstitial18--;

        }





        function addRowNative18() {


            if (Native18 <= 4) {
                Native18++;
                document.querySelector('#contentNative18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native18[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative18(input) {
            input.parentNode.parentNode.remove();
            Native18--;

        }




        function addRowRewardedVideo18() {


            if (RewardedVideo18 <= 4) {
                RewardedVideo18++;

                document.querySelector('#contentRewardedVideo18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo18[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo18(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo18--;

        }


        function addRowRewardedInterstitial18() {


            if (RewardedInterstitial18 <= 4) {
                RewardedInterstitial18++;

                document.querySelector('#contentRewardedInterstitial18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial18[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial18(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial18--;

        }



        function addRowNativeBanner18() {


            if (NativeBanner18 <= 4) {
                NativeBanner18++;

                document.querySelector('#contentNativeBanner18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner18[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner18(input) {
            input.parentNode.parentNode.remove();
            NativeBanner18--;

        }



        function addRowAppOpen18() {


            if (AppOpen18 <= 4) {
                AppOpen18++;

                document.querySelector('#contentAppOpen18').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen18[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen18(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen18(input) {
            input.parentNode.parentNode.remove();
            AppOpen18--;

        }




        function addRowBanner19() {


            if (banner19 <= 4) {
                banner19++;
                document.querySelector('#contentBanner19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner19[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner19(input) {
            input.parentNode.parentNode.remove();
            banner19--;

        }




        function addRowInterstitial19() {


            if (Interstitial19 <= 4) {
                Interstitial19++;
                document.querySelector('#contentInterstitial19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial19[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial19(input) {
            input.parentNode.parentNode.remove();
            Interstitial19--;

        }





        function addRowNative19() {


            if (Native19 <= 4) {
                Native19++;
                document.querySelector('#contentNative19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native19[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative19(input) {
            input.parentNode.parentNode.remove();
            Native19--;

        }




        function addRowRewardedVideo19() {


            if (RewardedVideo19 <= 4) {
                RewardedVideo19++;

                document.querySelector('#contentRewardedVideo19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo19[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo19(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo19--;

        }


        function addRowRewardedInterstitial19() {


            if (RewardedInterstitial19 <= 4) {
                RewardedInterstitial19++;

                document.querySelector('#contentRewardedInterstitial19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial19[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial19(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial19--;

        }



        function addRowNativeBanner19() {


            if (NativeBanner19 <= 4) {
                NativeBanner19++;

                document.querySelector('#contentNativeBanner19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner19[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner19(input) {
            input.parentNode.parentNode.remove();
            NativeBanner19--;

        }



        function addRowAppOpen19() {


            if (AppOpen19 <= 4) {
                AppOpen19++;

                document.querySelector('#contentAppOpen19').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen19[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen19(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen19(input) {
            input.parentNode.parentNode.remove();
            AppOpen19--;

        }




        function addRowBanner23() {


            if (banner23 <= 4) {
                banner23++;
                document.querySelector('#contentBanner23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner23[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner23(input) {
            input.parentNode.parentNode.remove();
            banner23--;

        }




        function addRowInterstitial23() {


            if (Interstitial23 <= 4) {
                Interstitial23++;
                document.querySelector('#contentInterstitial23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial23[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial23(input) {
            input.parentNode.parentNode.remove();
            Interstitial23--;

        }





        function addRowNative23() {


            if (Native23 <= 4) {
                Native23++;
                document.querySelector('#contentNative23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native23[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative23(input) {
            input.parentNode.parentNode.remove();
            Native23--;

        }




        function addRowRewardedVideo23() {


            if (RewardedVideo23 <= 4) {
                RewardedVideo23++;

                document.querySelector('#contentRewardedVideo23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo23[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo23(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo23--;

        }


        function addRowRewardedInterstitial23() {


            if (RewardedInterstitial23 <= 4) {
                RewardedInterstitial23++;

                document.querySelector('#contentRewardedInterstitial23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial23[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial23(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial23--;

        }



        function addRowNativeBanner23() {


            if (NativeBanner23 <= 4) {
                NativeBanner23++;

                document.querySelector('#contentNativeBanner23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner23[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner23(input) {
            input.parentNode.parentNode.remove();
            NativeBanner23--;

        }



        function addRowAppOpen23() {


            if (AppOpen23 <= 4) {
                AppOpen23++;

                document.querySelector('#contentAppOpen23').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen23[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen23(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen23(input) {
            input.parentNode.parentNode.remove();
            AppOpen23--;

        }




        function addRowBanner24() {


            if (banner24 <= 4) {
                banner24++;
                document.querySelector('#contentBanner24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner24[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner24(input) {
            input.parentNode.parentNode.remove();
            banner24--;

        }




        function addRowInterstitial24() {


            if (Interstitial24 <= 4) {
                Interstitial24++;
                document.querySelector('#contentInterstitial24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial24[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial24(input) {
            input.parentNode.parentNode.remove();
            Interstitial24--;

        }





        function addRowNative24() {


            if (Native24 <= 4) {
                Native24++;
                document.querySelector('#contentNative24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native24[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative24(input) {
            input.parentNode.parentNode.remove();
            Native24--;

        }




        function addRowRewardedVideo24() {


            if (RewardedVideo24 <= 4) {
                RewardedVideo24++;

                document.querySelector('#contentRewardedVideo24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo24[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo24(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo24--;

        }


        function addRowRewardedInterstitial24() {


            if (RewardedInterstitial24 <= 4) {
                RewardedInterstitial24++;

                document.querySelector('#contentRewardedInterstitial24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial24[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial24(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial24--;

        }



        function addRowNativeBanner24() {


            if (NativeBanner24 <= 4) {
                NativeBanner24++;

                document.querySelector('#contentNativeBanner24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner24[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner24(input) {
            input.parentNode.parentNode.remove();
            NativeBanner24--;

        }



        function addRowAppOpen24() {


            if (AppOpen24 <= 4) {
                AppOpen24++;

                document.querySelector('#contentAppOpen24').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen24[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen24(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen24(input) {
            input.parentNode.parentNode.remove();
            AppOpen24--;

        }




        function addRowBanner25() {


            if (banner25 <= 4) {
                banner25++;
                document.querySelector('#contentBanner25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner25[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner25(input) {
            input.parentNode.parentNode.remove();
            banner25--;

        }




        function addRowInterstitial25() {


            if (Interstitial25 <= 4) {
                Interstitial25++;
                document.querySelector('#contentInterstitial25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial25[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial25(input) {
            input.parentNode.parentNode.remove();
            Interstitial25--;

        }





        function addRowNative25() {


            if (Native25 <= 4) {
                Native25++;
                document.querySelector('#contentNative25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native25[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative25(input) {
            input.parentNode.parentNode.remove();
            Native25--;

        }




        function addRowRewardedVideo25() {


            if (RewardedVideo25 <= 4) {
                RewardedVideo25++;

                document.querySelector('#contentRewardedVideo25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo25[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo25(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo25--;

        }


        function addRowRewardedInterstitial25() {


            if (RewardedInterstitial25 <= 4) {
                RewardedInterstitial25++;

                document.querySelector('#contentRewardedInterstitial25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial25[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial25(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial25--;

        }



        function addRowNativeBanner25() {


            if (NativeBanner25 <= 4) {
                NativeBanner25++;

                document.querySelector('#contentNativeBanner25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner25[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner25(input) {
            input.parentNode.parentNode.remove();
            NativeBanner25--;

        }



        function addRowAppOpen25() {


            if (AppOpen25 <= 4) {
                AppOpen25++;

                document.querySelector('#contentAppOpen25').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen25[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen25(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen25(input) {
            input.parentNode.parentNode.remove();
            AppOpen25--;

        }




        function addRowBanner26() {


            if (banner26 <= 4) {
                banner26++;
                document.querySelector('#contentBanner26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner26[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner26(input) {
            input.parentNode.parentNode.remove();
            banner26--;

        }




        function addRowInterstitial26() {


            if (Interstitial26 <= 4) {
                Interstitial26++;
                document.querySelector('#contentInterstitial26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial26[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial26(input) {
            input.parentNode.parentNode.remove();
            Interstitial26--;

        }





        function addRowNative26() {


            if (Native26 <= 4) {
                Native26++;
                document.querySelector('#contentNative26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native26[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative26(input) {
            input.parentNode.parentNode.remove();
            Native26--;

        }




        function addRowRewardedVideo26() {


            if (RewardedVideo26 <= 4) {
                RewardedVideo26++;

                document.querySelector('#contentRewardedVideo26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo26[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo26(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo26--;

        }


        function addRowRewardedInterstitial26() {


            if (RewardedInterstitial26 <= 4) {
                RewardedInterstitial26++;

                document.querySelector('#contentRewardedInterstitial26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial26[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial26(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial26--;

        }



        function addRowNativeBanner26() {


            if (NativeBanner26 <= 4) {
                NativeBanner26++;

                document.querySelector('#contentNativeBanner26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner26[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner26(input) {
            input.parentNode.parentNode.remove();
            NativeBanner26--;

        }



        function addRowAppOpen26() {


            if (AppOpen26 <= 4) {
                AppOpen26++;

                document.querySelector('#contentAppOpen26').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen26[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen26(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen26(input) {
            input.parentNode.parentNode.remove();
            AppOpen26--;

        }




        function addRowBanner27() {


            if (banner27 <= 4) {
                banner27++;
                document.querySelector('#contentBanner27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner27[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner27(input) {
            input.parentNode.parentNode.remove();
            banner27--;

        }




        function addRowInterstitial27() {


            if (Interstitial27 <= 4) {
                Interstitial27++;
                document.querySelector('#contentInterstitial27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial27[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial27(input) {
            input.parentNode.parentNode.remove();
            Interstitial27--;

        }





        function addRowNative27() {


            if (Native27 <= 4) {
                Native27++;
                document.querySelector('#contentNative27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native27[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative27(input) {
            input.parentNode.parentNode.remove();
            Native27--;

        }




        function addRowRewardedVideo27() {


            if (RewardedVideo27 <= 4) {
                RewardedVideo27++;

                document.querySelector('#contentRewardedVideo27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo27[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo27(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo27--;

        }


        function addRowRewardedInterstitial27() {


            if (RewardedInterstitial27 <= 4) {
                RewardedInterstitial27++;

                document.querySelector('#contentRewardedInterstitial27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial27[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial27(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial27--;

        }



        function addRowNativeBanner27() {


            if (NativeBanner27 <= 4) {
                NativeBanner27++;

                document.querySelector('#contentNativeBanner27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner27[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner27(input) {
            input.parentNode.parentNode.remove();
            NativeBanner27--;

        }



        function addRowAppOpen27() {


            if (AppOpen27 <= 4) {
                AppOpen27++;

                document.querySelector('#contentAppOpen27').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen27[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen27(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen27(input) {
            input.parentNode.parentNode.remove();
            AppOpen27--;

        }




        function addRowBanner28() {


            if (banner28 <= 4) {
                banner28++;
                document.querySelector('#contentBanner28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner28[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner28(input) {
            input.parentNode.parentNode.remove();
            banner28--;

        }




        function addRowInterstitial28() {


            if (Interstitial28 <= 4) {
                Interstitial28++;
                document.querySelector('#contentInterstitial28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial28[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial28(input) {
            input.parentNode.parentNode.remove();
            Interstitial28--;

        }





        function addRowNative28() {


            if (Native28 <= 4) {
                Native28++;
                document.querySelector('#contentNative28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native28[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative28(input) {
            input.parentNode.parentNode.remove();
            Native28--;

        }




        function addRowRewardedVideo28() {


            if (RewardedVideo28 <= 4) {
                RewardedVideo28++;

                document.querySelector('#contentRewardedVideo28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo28[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo28(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo28--;

        }


        function addRowRewardedInterstitial28() {


            if (RewardedInterstitial28 <= 4) {
                RewardedInterstitial28++;

                document.querySelector('#contentRewardedInterstitial28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial28[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial28(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial28--;

        }



        function addRowNativeBanner28() {


            if (NativeBanner28 <= 4) {
                NativeBanner28++;

                document.querySelector('#contentNativeBanner28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner28[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner28(input) {
            input.parentNode.parentNode.remove();
            NativeBanner28--;

        }



        function addRowAppOpen28() {


            if (AppOpen28 <= 4) {
                AppOpen28++;

                document.querySelector('#contentAppOpen28').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen28[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen28(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen28(input) {
            input.parentNode.parentNode.remove();
            AppOpen28--;

        }




        function addRowBanner29() {


            if (banner29 <= 4) {
                banner29++;
                document.querySelector('#contentBanner29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner29[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner29(input) {
            input.parentNode.parentNode.remove();
            banner29--;

        }




        function addRowInterstitial29() {


            if (Interstitial29 <= 4) {
                Interstitial29++;
                document.querySelector('#contentInterstitial29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial29[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial29(input) {
            input.parentNode.parentNode.remove();
            Interstitial29--;

        }





        function addRowNative29() {


            if (Native29 <= 4) {
                Native29++;
                document.querySelector('#contentNative29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native29[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative29(input) {
            input.parentNode.parentNode.remove();
            Native29--;

        }




        function addRowRewardedVideo29() {


            if (RewardedVideo29 <= 4) {
                RewardedVideo29++;

                document.querySelector('#contentRewardedVideo29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo29[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo29(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo29--;

        }


        function addRowRewardedInterstitial29() {


            if (RewardedInterstitial29 <= 4) {
                RewardedInterstitial29++;

                document.querySelector('#contentRewardedInterstitial29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial29[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial29(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial29--;

        }



        function addRowNativeBanner29() {


            if (NativeBanner29 <= 4) {
                NativeBanner29++;

                document.querySelector('#contentNativeBanner29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner29[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner29(input) {
            input.parentNode.parentNode.remove();
            NativeBanner29--;

        }



        function addRowAppOpen29() {


            if (AppOpen29 <= 4) {
                AppOpen29++;

                document.querySelector('#contentAppOpen29').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen29[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen29(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen29(input) {
            input.parentNode.parentNode.remove();
            AppOpen29--;

        }




        function addRowBanner30() {


            if (banner30 <= 4) {
                banner30++;
                document.querySelector('#contentBanner30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Banner30[]" placeholder="Enter Banner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowBanner30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Banner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Banner ID Limit");
            }
        }

        function removeRowBanner30(input) {
            input.parentNode.parentNode.remove();
            banner30--;

        }




        function addRowInterstitial30() {


            if (Interstitial30 <= 4) {
                Interstitial30++;
                document.querySelector('#contentInterstitial30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Interstitial30[]" placeholder="Enter Interstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowInterstitial30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Interstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Interstitial ID Limit");
            }
        }

        function removeRowInterstitial30(input) {
            input.parentNode.parentNode.remove();
            Interstitial30--;

        }





        function addRowNative30() {


            if (Native30 <= 4) {
                Native30++;
                document.querySelector('#contentNative30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="Native30[]" placeholder="Enter Native ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNative30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter Native Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 Native ID Limit");
            }
        }

        function removeRowNative30(input) {
            input.parentNode.parentNode.remove();
            Native30--;

        }




        function addRowRewardedVideo30() {


            if (RewardedVideo30 <= 4) {
                RewardedVideo30++;

                document.querySelector('#contentRewardedVideo30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedVideo30[]" placeholder="Enter RewardedVideo ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedVideo30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedVideo Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedVideo ID Limit");
            }
        }

        function removeRowRewardedVideo30(input) {
            input.parentNode.parentNode.remove();
            RewardedVideo30--;

        }


        function addRowRewardedInterstitial30() {


            if (RewardedInterstitial30 <= 4) {
                RewardedInterstitial30++;

                document.querySelector('#contentRewardedInterstitial30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="RewardedInterstitial30[]" placeholder="Enter RewardedInterstitial ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowRewardedInterstitial30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter RewardedInterstitial Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 RewardedInterstitial ID Limit");
            }
        }

        function removeRowRewardedInterstitial30(input) {
            input.parentNode.parentNode.remove();
            RewardedInterstitial30--;

        }



        function addRowNativeBanner30() {


            if (NativeBanner30 <= 4) {
                NativeBanner30++;

                document.querySelector('#contentNativeBanner30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="NativeBanner30[]" placeholder="Enter NativeBanner ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowNativeBanner30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter NativeBanner Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 NativeBanner ID Limit");
            }
        }

        function removeRowNativeBanner30(input) {
            input.parentNode.parentNode.remove();
            NativeBanner30--;

        }



        function addRowAppOpen30() {


            if (AppOpen30 <= 4) {
                AppOpen30++;

                document.querySelector('#contentAppOpen30').insertAdjacentHTML(
                    'afterend',
                    `<div class="row">

                           <div class="input-group mb-3">
                            <input type="text" class="form-control" required name="AppOpen30[]" placeholder="Enter AppOpen ID" />

                             <div class="input-group-append">
                               <button class="btn btn-danger" type="button" onclick="removeRowAppOpen30(this)" ><i class="fas fa-times"></i></button>
                             </div>
                             <div class="invalid-feedback">
                                                        Enter AppOpen Id
                                                    </div>
                           </div>




         </div>`
                )
            } else {
                swal("Maximum 5 AppOpen ID Limit");
            }
        }

        function removeRowAppOpen30(input) {
            input.parentNode.parentNode.remove();
            AppOpen30--;

        }
    </script>
    <script type="text/javascript">
        var Parameter_cnt = $('#Parameter_cnt').val();

        function addRowParameter() {





            if (Parameter_cnt <= 100) {
                Parameter_cnt = $('#Parameter_cnt').val();
                Parameter_cnt++;
                $('#Parameter_cnt').val(Parameter_cnt);
                document.querySelector('#contentParameter').insertAdjacentHTML(
                    'beforeend',
                    `<div class="form-row" style="margin: auto;  justify-content: center;  align-items: center; ">
                                                                       <div class="form-group col-md-2">

                                                                         <input type="text" required class="form-control" name="ParameterName` + Parameter_cnt + `" placeholder="Name" onkeypress="return blockSpecialChar(event)" >
                                                                         <div class="invalid-feedback">
                                                                              Enter Name
                                                                          </div>
                                                                       </div>
                                                                       <div class="form-group col-md-4">
                                                                         <input type="text"  class="form-control" name="ParameterValue` + Parameter_cnt + `" placeholder="Value" >
                                                                         <div class="invalid-feedback">
                                                                              Enter Value
                                                                          </div>
                                                                       </div>
                                                                       <div class="form-group col-md-2">

                                                                         <input type="text" class="form-control" name="ParameterHint` + Parameter_cnt + `" placeholder="Hint" >
                                                                       </div>
                                                                       <div class="form-group col-md-1">

                                                                         <button class="btn btn-danger" type="button" onclick="removeRowParameter(this)" ><i class="fas fa-times"></i></button>
                                                                       </div>

                                                                     </div>`

                )
            } else {
                swal("Parameter Limit over");
            }
        }

        function removeRowParameter(input) {
            input.parentNode.parentNode.remove();
            //  Parameter_cnt--;
            //  $('#Parameter_cnt').val(Parameter_cnt);

        }
    </script>
    <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: 242px; height: 646px; display: block; opacity: 0;">
        <div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 561px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
    </div>
    <div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 892; top: 638px; left: 0px; position: fixed; cursor: default; display: none; width: 242px; opacity: 0.8;">
        <div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
    </div>
        <!-- datepicker with dropdown -->

        <div class="daterangepicker ltr show-ranges opensright show-calendar" style=" top: 448px; left: 403.422px; right: auto;">
            <div class="ranges">
                <ul>
                    <li data-range-key="Today" class="active">Today</li>
                    <li data-range-key="Yesterday">Yesterday</li>
                    <li data-range-key="Last 7 Days">Last 7 Days</li>
                    <li data-range-key="Last 30 Days">Last 30 Days</li>
                    <li data-range-key="This Month">This Month</li>
                    <li data-range-key="Last Month">Last Month</li>
                    <li data-range-key="Custom Range">Custom Range</li>
                </ul>
            </div>
            <div class="drp-calendar left">
                <div class="calendar-table">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th class="prev available"><span></span></th>
                                <th colspan="5" class="month">Jun 2022</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Su</th>
                                <th>Mo</th>
                                <th>Tu</th>
                                <th>We</th>
                                <th>Th</th>
                                <th>Fr</th>
                                <th>Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="weekend off ends available" data-title="r0c0">29</td>
                                <td class="off ends available" data-title="r0c1">30</td>
                                <td class="off ends available" data-title="r0c2">31</td>
                                <td class="available" data-title="r0c3">1</td>
                                <td class="available" data-title="r0c4">2</td>
                                <td class="available" data-title="r0c5">3</td>
                                <td class="weekend available" data-title="r0c6">4</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r1c0">5</td>
                                <td class="available" data-title="r1c1">6</td>
                                <td class="available" data-title="r1c2">7</td>
                                <td class="available" data-title="r1c3">8</td>
                                <td class="available" data-title="r1c4">9</td>
                                <td class="available" data-title="r1c5">10</td>
                                <td class="weekend available" data-title="r1c6">11</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r2c0">12</td>
                                <td class="available" data-title="r2c1">13</td>
                                <td class="available" data-title="r2c2">14</td>
                                <td class="available" data-title="r2c3">15</td>
                                <td class="available" data-title="r2c4">16</td>
                                <td class="available" data-title="r2c5">17</td>
                                <td class="weekend available" data-title="r2c6">18</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r3c0">19</td>
                                <td class="available" data-title="r3c1">20</td>
                                <td class="available" data-title="r3c2">21</td>
                                <td class="available" data-title="r3c3">22</td>
                                <td class="available" data-title="r3c4">23</td>
                                <td class="available" data-title="r3c5">24</td>
                                <td class="today weekend active start-date active end-date available" data-title="r3c6">25</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r4c0">26</td>
                                <td class="available" data-title="r4c1">27</td>
                                <td class="available" data-title="r4c2">28</td>
                                <td class="available" data-title="r4c3">29</td>
                                <td class="available" data-title="r4c4">30</td>
                                <td class="off ends available" data-title="r4c5">1</td>
                                <td class="weekend off ends available" data-title="r4c6">2</td>
                            </tr>
                            <tr>
                                <td class="weekend off ends available" data-title="r5c0">3</td>
                                <td class="off ends available" data-title="r5c1">4</td>
                                <td class="off ends available" data-title="r5c2">5</td>
                                <td class="off ends available" data-title="r5c3">6</td>
                                <td class="off ends available" data-title="r5c4">7</td>
                                <td class="off ends available" data-title="r5c5">8</td>
                                <td class="weekend off ends available" data-title="r5c6">9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="calendar-time" style="display: none;"></div>
            </div>
            <div class="drp-calendar right">
                <div class="calendar-table">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th></th>
                                <th colspan="5" class="month">Jul 2022</th>
                                <th class="next available"><span></span></th>
                            </tr>
                            <tr>
                                <th>Su</th>
                                <th>Mo</th>
                                <th>Tu</th>
                                <th>We</th>
                                <th>Th</th>
                                <th>Fr</th>
                                <th>Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="weekend off ends available" data-title="r0c0">26</td>
                                <td class="off ends available" data-title="r0c1">27</td>
                                <td class="off ends available" data-title="r0c2">28</td>
                                <td class="off ends available" data-title="r0c3">29</td>
                                <td class="off ends available" data-title="r0c4">30</td>
                                <td class="available" data-title="r0c5">1</td>
                                <td class="weekend available" data-title="r0c6">2</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r1c0">3</td>
                                <td class="available" data-title="r1c1">4</td>
                                <td class="available" data-title="r1c2">5</td>
                                <td class="available" data-title="r1c3">6</td>
                                <td class="available" data-title="r1c4">7</td>
                                <td class="available" data-title="r1c5">8</td>
                                <td class="weekend available" data-title="r1c6">9</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r2c0">10</td>
                                <td class="available" data-title="r2c1">11</td>
                                <td class="available" data-title="r2c2">12</td>
                                <td class="available" data-title="r2c3">13</td>
                                <td class="available" data-title="r2c4">14</td>
                                <td class="available" data-title="r2c5">15</td>
                                <td class="weekend available" data-title="r2c6">16</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r3c0">17</td>
                                <td class="available" data-title="r3c1">18</td>
                                <td class="available" data-title="r3c2">19</td>
                                <td class="available" data-title="r3c3">20</td>
                                <td class="available" data-title="r3c4">21</td>
                                <td class="available" data-title="r3c5">22</td>
                                <td class="weekend available" data-title="r3c6">23</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r4c0">24</td>
                                <td class="available" data-title="r4c1">25</td>
                                <td class="available" data-title="r4c2">26</td>
                                <td class="available" data-title="r4c3">27</td>
                                <td class="available" data-title="r4c4">28</td>
                                <td class="available" data-title="r4c5">29</td>
                                <td class="weekend available" data-title="r4c6">30</td>
                            </tr>
                            <tr>
                                <td class="weekend available" data-title="r5c0">31</td>
                                <td class="off ends available" data-title="r5c1">1</td>
                                <td class="off ends available" data-title="r5c2">2</td>
                                <td class="off ends available" data-title="r5c3">3</td>
                                <td class="off ends available" data-title="r5c4">4</td>
                                <td class="off ends available" data-title="r5c5">5</td>
                                <td class="weekend off ends available" data-title="r5c6">6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="calendar-time" style="display: none;"></div>
            </div>
            <div class="drp-buttons"><span class="drp-selected">06/25/2022 - 06/25/2022</span><button class="cancelBtn btn btn-sm btn-default" type="button">Clear</button><button class="applyBtn btn btn-sm btn-primary" type="button">Apply</button> </div>
        </div>
</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>
