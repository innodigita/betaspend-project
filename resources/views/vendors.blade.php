

@include('Layout.boiler-general')

<body>
    <!-- Start of Page Wrapper -->
    <div class="page-wrapper">

    {{--  <!-- Start of Header -->  --}}
        @include('Layout.general-top-header')
    {{--  <!-- End of Header -->  --}}


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb mb-6">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Vendors</a></li>
                        
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <!-- Start of Vendor Toolbox -->
                    <div class="toolbox vendor-toolbox pb-0">
                        <div class="toolbox-left mb-4 mb-md-0">
                            <a href="#" class="btn btn-primary btn-outline btn-rounded btn-icon-left vendor-search-toggle "><i class="w-icon-category"></i>Filter</a>
                            <label class="d-block">Total Store Showing 6</label>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-sort select-box mb-0">
                                <label class="font-weight-normal">Sort by:</label>
                                <select name="orderby" class="form-control">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="recent">Most Recent</option>
                                    <option value="popular">Most Popular</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-layout mb-0 d-flex">
                                <a href="{{ url('./vendors') }}" class="icon-mode-grid btn-layout active">
                                    <i class="w-icon-grid"></i>
                                </a>
                                <a href="{{ url('./vendors-list') }}" class="icon-mode-list btn-layout">
                                    <i class="w-icon-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Vendor Toolbox -->
                    <div class="vendor-search-wrapper">
                        <form class="vendor-search-form">
                            <input type="email" class="form-control mr-4 bg-white" name="vendor" id="vendor"
                                placeholder="Search Vendors" />
                            <button class="btn btn-primary btn-rounded" type="submit">Apply</button>
                        </form>
                        <!-- End of Vendor Search Form -->
                    </div>
                    <div class="row cols-lg-3 cols-md-2 cols-sm-2 cols-1 mt-4">
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/1.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #40475E" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="{{ url('./vendors-details') }}">Vendor 1</a>
                                        <label class="featured-label">Featured</label>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        Steven Street, El Carjon
                                        California, United States (US)
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                            <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/1.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                        Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/2.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #6C6C6C" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="{{ url('./vendors-details') }}">Vendor 2</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        London, United Kingdom (UK)
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                            <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/2.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="{{ url('./vendors-details') }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/3.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #A891BF" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="{{ url('./vendors-details') }}">Vendor 3</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        Rio de Janeiro, Brazil
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                          <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/3.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="{{ url('./vendors-details') }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/4.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #28292D" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="{{ url('./vendors-details') }}">Vendor 4</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        Ontario, Canada
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                            <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/4.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/5.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #7E7D7B" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="{{ url('./vendors-details') }}">Vendor 5</a>
                                        <label class="featured-label">Featured</label>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        Australia
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                          <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/5.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="{{ url('./vendors-details') }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img src="assets/images/vendor/dokan/6.jpg" alt="Vendor" 
                                            width="400" height="194" style="background-color: #5B5B62" />
                                    </figure>
                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href="vendor-dokan-store.html">Vendor 6</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="store-address">
                                        Germany
                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                            <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="assets/images/vendor/brand/6.jpg" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href="{{ url('./vendors-details') }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->



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

