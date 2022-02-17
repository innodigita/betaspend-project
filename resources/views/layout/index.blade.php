

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Betaspend</title>

    <meta name="keywords" content="Affilate, vendors, Sellers" />
    <meta name="description" content="Betaspend Multi vendor ecommerce platform">
    <meta name="author" content="Betaspend">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset("assets/images/icons/betaspend_favicon.png") }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

     <link rel="preload" href="{{ asset("assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2") }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset("assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2") }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset("assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2") }}" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="{{ asset("assets/fonts/wolmart87d5.ttf?png09e") }}" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendor/fontawesome-free/css/all.min.css") }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendor/owl-carousel/owl.carousel.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendor/animate/animate.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendor/magnific-popup/magnific-popup.min.css") }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/home.css") }}">
    
    
    <!-- Add to Cart JS -->
    <script src="{{ asset("assets/js/cart.js") }}"></script>


</head>

{{--  home_menu_header Starts  --}}
@include('Layout.home_menu_header')
{{--  home_menu_header Ends  --}}


<!-- Start of Home Main Content-->
@include('Layout.home')
<!-- End of Home Main Content-->

<!-- Start of Footer -->
@include('Layout.footer')
<!-- End of Footer-->

<!-- Start of Mobile Sticky Footer -->
@include('Layout.mobile-sticky-bottom')
<!-- End of Mobile Sticky Footer -->

<!-- Start of Quick view -->
@include('Layout.quick_view')
<!-- End of Quick View -->

 {{-- <!-- Start of Mobile Sticky Footer -->
@include('Layout.mobile_sticky_bottom')
<!-- End of Mobile Sticky Footer -->  --}}

@include('Layout.boiler-bottom')



