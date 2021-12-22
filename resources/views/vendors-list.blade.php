

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
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="#">Vendor</a></li>
                        <li><a href="#">Dokan</a></li>
                        <li>Store List</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-10 pb-2">
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
                                <a href="vendors.php" class="icon-mode-grid btn-layout">
                                    <i class="w-icon-grid"></i>
                                </a>
                                <a href="vendors-list.php" class="icon-mode-list btn-layout active">
                                    <i class="w-icon-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Vendor Toolbox -->

                    <!-- Start of Vendor Search Wrapper -->
                    <div class="vendor-search-wrapper">
                        <form class="vendor-search-form">
                            <input type="email" class="form-control mr-4 bg-white" name="vendor" id="vendor"
                                placeholder="Search Vendors" />
                            <button class="btn btn-primary btn-rounded" type="submit">Apply</button>
                        </form>
                        <!-- End of Vendor Search Form -->
                    </div>
                    <!-- End of Vendor Search Wrapper -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/1.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #40475E" />
                                </figure>
                            </a>
                            <label class="featured-label">Featured</label>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/1.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="vendor-dokan-store.html">Vendor 1</a>
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/2.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #5D5D5D" />
                                </figure>
                            </a>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/2.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="vendor-dokan-store.html">Vendor 2</a>
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/3.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #AF98C6" />
                                </figure>
                            </a>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/3.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="vendor-dokan-store.html">Vendor 3</a>
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/4.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #28282D" />
                                </figure>
                            </a>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/4.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="vendor-dokan-store.html">Vendor 4</a>
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/5.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #383737" />
                                </figure>
                            </a>
                            <label class="featured-label">Featured</label>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/5.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="vendor-dokan-store.html">Vendor 4</a>
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->

                    <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="vendor-dokan-store.html">
                                <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/6.jpg" alt="Vendor" 
                                        width="400" height="188" style="background-color: #50555C" />
                                </figure>
                            </a>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="assets/images/vendor/brand/6.jpg" alt="Brand" width="80" height="80" />
                            </figure>
                            <div class="seller-date">
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
                                <a href="about_vendor.php" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Store<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->
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

