@extends('Admin.Log.app')

@section('content')
  
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img class="align-content" src="{{ asset('assets/images/icons/betaspend_favicon.png') }}" alt="Betaspend Logo">
                </a>
            </div>
            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                    </div>
                            <div class="checkbox">
                                <label>
                            <input type="checkbox"> Remember Me
                        </label>
                                <label class="pull-right">
                            <a href="{{ url('./administration/reset') }}">Forgotten Password?</a>
                        </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                            <div class="social-login-content">
                                <div class="social-button">

                                    <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i><a href="#" style="color:#fff">Sign in with facebook</a></button>
                                    <button type="button" class="btn social linkedin btn-flat btn-addon mt-2"><i class="ti-linkedin" ></i><a href="#    c    " style="color:#fff">Sign in with Linkedin</a></button>
                                </div>
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="{{ url('./administration/register') }}"> Sign Up Here</a></p>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection