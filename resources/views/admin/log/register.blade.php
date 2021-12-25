@extends('Admin.Log.app')

@section('content')
  
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#" class="rounded-circle">
                    <img class="align-content" src="{{ asset('assets/images/icons/betaspend_favicon.png') }}" alt="Betaspend Logo">
                </a>
            </div>
            <div class="login-form">
                
                <form>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="name" name="fname" class="form-control" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="name" name="lname" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="example@betaspend.com">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" placeholder="+234815563836">
                </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                    </div>
                                <div class="checkbox">
                                    <label>
                            <input type="checkbox"> Agree to the terms and policy
                        </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i><a href="#" style="color:#fff">Register with facebook</a></button>
                                        <button type="button" class="btn social linkedin btn-flat btn-addon mt-2"><i class="ti-linkedin" ></i><a href="#    c    " style="color:#fff">Register with twitter</a></button>
                                    </div>
                                </div>

                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{ url('./administration/login') }}"> Sign in</a></p>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection