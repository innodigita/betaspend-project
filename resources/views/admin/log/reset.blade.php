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
                        <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection