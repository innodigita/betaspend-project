


@include('Layout.boiler-general')

<body>
    <div class="page-wrapper">


        {{--  <!-- Start of Header -->  --}}
        @include('Layout.general-top-header')
        {{--  <!-- End of Header -->  --}}


        {{--  <!-- Start of Main -->  --}}
        @include('Products.main-content')
        {{--  <!-- End of Main -->  --}}



        {{--  <!-- Starting of Footer -->  --}}
        @include('Layout.footer')
        {{--  <!-- End of Footer -->  --}}
    </div>
    {{--  <!-- End of Page Wrapper -->  --}}

    {{--  <!-- Start of Sticky Footer -->  --}}
   @include('Layout.mobile-sticky-bottom')
    {{--  <!-- End of Sticky Footer -->  --}}

    {{--  <!-- Start of Scroll Top -->  --}}
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
    {{--  <!-- End of Scroll Top -->  --}}

    {{--  <!-- Start of Mobile Menu -->  --}}
    @include('Layout.mobile_menu')
    {{--  <!-- End of Mobile Menu -->  --}}


    {{--  <!-- Start of Quick View -->  --}}
     
 @include('Layout.quick_view')

    {{--  <!-- End of Quick view -->  --}}

    
@include('Layout.boiler-bottom')


