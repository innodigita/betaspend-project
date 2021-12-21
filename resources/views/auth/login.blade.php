



@include('Layout.boiler-general')

<body>
    <div class="page-wrapper">


         {{--  Start of Header  --}}
        @include('Layout.general-top-header')
         {{--  End of Header   --}}


         {{--  Start of Main   --}}



        <!-- Start of Main -->
        <main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <ul class="nav nav-tabs text-uppercase" role="tablist">
                                <li class="nav-item">
                                    <a href="#sign-in" class="nav-link active">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li>

                            </ul>

                            <div class="tab-content">


                                    <h4 class="alert-title alert alert-error alert-bg alert-block alert-inline" style="margin-top: 2px; color:red;">
                                    </i> Error message here</h4>



                                <div class="tab-pane active" id="sign-in">
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label>email address *</label>
                                        <input type="text" class="form-control" name="email" id="email" required>
                                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    
                                    
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Password *</label>
                                        <input type="text" class="form-control" name="password" id="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                                        <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                                        <label for="remember1">Remember me</label>
                                        <a href="#lost-password" class="nav-link">Lost your password?</a>
                                    </div>
                                    <!-- <a href="#" class="btn btn-primary">Sign In</a> -->
                                    <input class="btn btn-primary" type="submit" name="login" value="Sign In">
                                    </form>
                                </div>

                                <!-- Lost Password Start -->

                                <div class="tab-pane" id="lost-password">
                                    <form method="POST" enctype="multipart/form-data" action="">
                                    <div class="form-group">
                                        <label>email address *</label>
                                        <input type="text" class="form-control" name="email" id="email" required>
                                    </div>
                                    <!-- <a href="#" class="btn btn-primary">Recover Password</a> -->
                                    <input class="btn btn-primary" type="submit" name="recovery_password" value="Recover Password">
                                    </form>
                                </div>

                                <!-- Lost Password Ends -->

                                  <!-- Sign Up Form Starts -->
                                <div class="tab-pane" id="sign-up">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                                @csrf
                                    <div class="form-group">
                                        <label>Your Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your email address *</label>
                                        <input type="text" class="form-control" name="email" id="email_1" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password *</label>
                                        <input type="text" class="form-control" name="password" id="password_1" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Confirm Password *</label>
                                        <input type="text" class="form-control" name="password_confirmation" id="password_1" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Username *</label>
                                        <input type="text" class="form-control" name="username" id="username" required>
                                    </div>
                                    <div class="form-group mb-5">
                                            <label>Phone Number *</label>
                                            <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                                    </div>

                                    <div class="form-checkbox user-checkbox mt-0">
                                        <input type="checkbox" class="custom-checkbox checkbox-round active" id="check-customer" name="check-customer" required="">
                                        <label for="check-customer" class="check-customer mb-1">I am a customer</label>
                                    </div>
                                    <p>Your personal data will be used to support your experience
                                        throughout this website, to manage access to your account,
                                        and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                                    <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <input class="btn btn-primary" type="submit" name="submit" value="Sign Up">

                                    </form>
                                </div><!-- Sign Up Form Ends -->

                            </div>
                            <p class="text-center">Sign in with social account</p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

         {{--  End of Main   --}}



         {{--  Starting of Footer  --}}
        @include('Layout.footer')
         {{--  End of Footer  --}}
    </div>
     {{--  End of Page Wrapper  --}}

    {{--  Start of Sticky Footer  --}}
   @include('Layout.mobile-sticky-bottom')
     {{--  End of Sticky Footer  --}}

     {{--  Start of Scroll Top   --}}
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
     {{--  End of Scroll Top   --}}

     {{--  Start of Mobile Menu   --}}
    @include('Layout.mobile_menu')
     {{--  End of Mobile Menu   --}}

    {{--  extra content start  --}}

      @yield('extra')

    {{--  extra content ends  --}}

     {{--  Start of Quick View   --}}

 @include('Layout.quick_view')

     {{--  End of Quick view  --}}


@include('Layout.boiler-bottom')


