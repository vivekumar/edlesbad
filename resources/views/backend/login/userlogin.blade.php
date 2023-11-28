
<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 10:03:24 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>Login 2 | User Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/storage/static_images/logo-light.svg')}}">
    
        <!-- Bootstrap Css -->
        <link href="{{asset('/backendassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('/backendassets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('/backendassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body>

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg" style="background-color:gray;background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="{{asset('/storage/static_images/logo.svg')}}" height="30" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center">Sign in to continue to User.</p>


                                @if(session ('userloginerror'))
                                        <div class="alert alert-info">
                                            {{ session ('userloginerror') }}
                                        </div>
                                    @endif

                              <form class="mt-4" method="post" action="{{route('user.signin')}}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">User Email</label>
                                    <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Enter username">
                                </div>
                                @error('user_email')
                                            <div class="alert alert-danger" role="alert">
                                            {{$message}} 
                                            </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter password">
                                </div>
                                @error('user_password')
                                            <div class="alert alert-danger" role="alert">
                                            {{$message}} 
                                            </div>
                                @enderror
    
                                <div class="mb-3 row">
                                    <!-- <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                <!-- <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="pages-recoverpw-2.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                </div> -->
                            </form>

                            <!-- <div class="mt-5 pt-4 text-center position-relative">
                                <p>Don't have an account ? <a href="pages-register-2.html" class="fw-medium text-primary"> Signup now </a> </p>
                                <p><script>document.write(new Date().getFullYear())</script> © Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div> -->

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    

                             
        <!-- JAVASCRIPT -->
        <script src="{{asset('/backendassets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('/backendassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/backendassets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('/backendassets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('/backendassets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('/backendassets/js/app.js')}}"></script>

    </body>


</html>
