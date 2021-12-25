<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Betaspend Admin Registration</title>
    <meta name="description" content="Betaspend is a multi-vendor ecommerce platform">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/betaspend_favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    @yield('content')


    <script src="{{ asset('/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/main.js') }}"></script>



</body>

</html>
