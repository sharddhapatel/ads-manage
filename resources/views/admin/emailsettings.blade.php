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



                            <div class="card-header">
                                <div class="col-10">
                                    <h4>Email Settings</h4>
                                </div>
                                <div class="col-2">


                                </div>

                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">Protocol*</label>
                                                    <input type="text" class="form-control" name="protocol" value="smtp" required="">
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">smtp_crypto *</label>
                                                    <input type="text" class="form-control" name="smtp_crypto" value="ssl" required="">
                                                </div>
                                            </div>


                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">SMTP Host*</label>
                                                    <input type="text" class="form-control" name="smtp_host" value="smtp.gmail.com" required="">
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">SMTP Email*</label>
                                                    <input type="text" class="form-control" name="smtp_email" value="jayeshsmtp@gmail.com" required="">
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">SMTP Password*</label>
                                                    <input type="password" class="form-control" name="smtp_password" value="12345678@Abc" required="">
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-label">SMTP Port*</label>
                                                    <input type="text" class="form-control" name="smtp_port" value="465" required="">
                                                </div>
                                            </div>
                                            <div>
                                                <input type="Submit" name="update" class="btn btn-lg btn-primary" value="Save">
                                            </div>


                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="section-title">SMTP Protocol Settings</div>
                                            <p>make the following settings in your Gmail account so that the email is sent correctly:</p>
                                            <ul>
                                                <li>1. Login to your GMail account. </li>
                                                <li>2. Go to: https://myaccount.google.com/lesssecureapps </li>
                                                <li>3. Enable "Allow less secure apps" </li>
                                                <li>4. Also, from the Password &amp; sign-in method section, you must disable the Two Step Verification feature, which is by default disabled, but also check it. If you encounter an error when sending emails
                                                    based on Gmail SMTP, you must also enable the php_openssl.dll feature in your web hosting php.ini file. </li>
                                            </ul>


                                            <div class="section-title">Input Settings</div>
                                            <ul>
                                                <li>1. Protocol: 'mail', 'sendmail', or 'smtp'</li>
                                                <li>2. smtp_crypto : can be 'ssl' or 'tls' for example</li>
                                                <li>3. SMTP Host: smtp.gmail.com</li>
                                                <li>4. SMTP Email: YourEmail@gmail.com</li>
                                                <li>5. SMTP Password: Your Gmail Password</li>
                                                <li>6. SMTP Port: 465</li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
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
