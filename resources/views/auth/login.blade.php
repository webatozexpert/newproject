<!DOCTYPE html>
<html>

<head>
    <title>Login Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('public/backend')}}/login/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <link href="{{asset('public/backend')}}/login/vendors/iCheck/css/square/blue.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend')}}/login/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/login/css/pages/login.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="POST" action="{{ route('login') }}" id="authentication" autocomplete="on">
                                @csrf
                                <h3 class="black_bg ">
                                    <img src="{{asset('public/backend')}}/img/Login.png" alt="AFL-Logo">
                                </h3>
                                @if($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  @foreach($errors->all() as $error)
                                  <strong>{{$error}}</strong> 
                                  @endforeach
                                </div>
                                @endif
                                 <div class="form-group ">
                                    <label style="margin-bottom:0;" for="email1" class="uname control-label"> <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                    </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter your Email">

                                </div>
                                <div class="form-group ">
                                    <label style="margin-bottom:0;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Password
                                    </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Enter your password">

                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember-me" id="remember-me" value="remember-me" class="square-blue" /> Keep me logged in
                                    </label>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Log In" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#toforgot" class="btn btn-responsive botton-alignment btn-warning btn-sm">Forgot password
                                    </a>
                                    <a href="#toregister" id="signup" class="btn btn-responsive botton-alignment btn-success btn-sm pull-right">Sign Up
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="index.html" id="register_here" autocomplete="on" method="post">
                                <h3 class="black_bg">

                                    <br>Sign Up</h3>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="full_name" class="youmail">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Full Name
                                    </label>
                                    <input id="full_name" name="full_name" required type="text" placeholder="Enter Your Full Name" />
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="email" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                    </label>
                                    <input id="email" name="email" placeholder="Enter Your Email" />
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="mobile" class="youmail">
                                        <i class="livicon" data-name="mobile" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Mobile No
                                    </label>
                                    <input id="mobile" name="mobile" required type="text" placeholder="Enter Your Mobile No" />
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="password" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Password
                                    </label>
                                    <input id="password1" name="password" required type="password" placeholder="Enter Your Password" />
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="password_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Confirm Password
                                    </label>
                                    <input id="password_confirm" name="password_confirm" required type="password" placeholder=" Enter Your Confirm password" />
                                </div>
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="Sign Up" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="btn btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="index.html" id="reset_pw" autocomplete="on" method="post">
                                <h3 class="black_bg">

                                    <br>FORGOT PASSWORD</h3>
                                <p>
                                    Enter your email address below and we'll send a special reset password link to your inbox.
                                </p>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="username2" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>Enter your email address
                                    </label>
                                    <input id="username2" name="username2" placeholder="Enter your email address" />
                                </div>
                                <p class="login button reset_button">
                                    <input type="submit" value="Reset Password" class="btn btn-raised btn-success btn-block" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{asset('public/backend')}}/login/js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    <script src="{{asset('public/backend')}}/login/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="{{asset('public/backend')}}/login/vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="{{asset('public/backend')}}/login/js/pages/login.js" type="text/javascript"></script>
</body>

</html>
