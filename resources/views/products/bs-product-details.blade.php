

@include('Layout.boiler-general')

<body>
    <div class="page-wrapper">


        {{--  <!-- Start of Header -->  --}}
        @include('Layout.general-top-header')
        {{--  <!-- End of Header -->  --}}


        {{--  <!-- Start of Main -->  --}}
        
        <main class="main mb-10 pb-1">

            {{--  <!-- Start of Breadcrumb -->  --}}

            <nav class="breadcrumb-nav container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Products</li>
                </ul>
                <ul class="product-nav list-style-none">
                    <li class="product-nav-prev">
                        <a href="#">
                            <i class="w-icon-angle-left"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="{{ asset('assets/images/products/product-nav-prev.jpg') }}" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Soft Sound Maker</span>
                        </span>
                    </li>
                    <li class="product-nav-next">
                        <a href="#">
                            <i class="w-icon-angle-right"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="{{ asset('assets/images/products/product-nav-next.jpg') }}" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Fabulous Sound Speaker</span>
                        </span>
                    </li>
                </ul>
            </nav>
            {{--  <!-- End of Breadcrumb -->  --}}


         {{-- center ccolumn start --}}

         {{-- Details Product Details Center Starts --}}
         <div class="col-md-12 ">

       {{-- Row start  --}}
         <div class="row">
          
            <div class="col"></div>
            {{-- col-lg-10 col-md-10 col-sm-10 Starts --}}
            <div class="col-lg-10 col-md-10 col-sm-10">
                
                {{-- Card Start --}}
                <div class="card">
                    <div class="card-body">{{-- Card Body Start --}}
                        <div class="alert alert-success alert-cart-product mb-2">
                            <a href="cart.html" class="btn btn-success btn-rounded">View Cart</a>
                            <p class="mb-0 ls-normal">“Alarm Clock With Lamp” has been added to your cart.</p>
                            <a href="#" class="btn btn-link btn-close"><i class="close-icon"></i></a>
                        </div>
                 {{-- Start of Page Content --}}
                       <div class="container">{{-- Container Starts --}}
                            <div class="product product-single row">
                                <div class="col-md-6 col-lg-6">{{-- Start of Slider Column --}}
                                    <div class="product-gallery product-gallery-sticky">
                                        <div
                                            class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/1-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/1-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/2-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/2-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="488" height="549">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/3-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/3-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/4-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/4-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/5-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/5-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="{{ asset('assets/images/products/default/6-800x900.jpg') }}"
                                                    data-zoom-image="{{ asset('assets/images/products/default/6-800x900.jpg') }}"
                                                    alt="Electronics Black Wrist Watch" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs row cols-4 gutter-sm">
                                                <div class="product-thumb active">
                                                    <img src="{{ asset('assets/images/products/default/1-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/images/products/default/2-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/images/products/default/3-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/images/products/default/4-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/images/products/default/5-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="{{ asset('assets/images/products/default/6-800x900.jpg') }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                            </div>
                                            <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                                            <button class="thumb-down disabled"><i
                                                    class="w-icon-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>{{-- End of Slider Column --}}

                              {{-- Start of Page Side Description --}}
                                <div class="col-md-6 col-lg-6">
                                    <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                        <h2 class="product-title">Electronics Black Wrist Watch</h2>
                                        <div class="product-bm-wrapper">
                                            <figure class="brand">
                                                <img src="{{ asset('assets/images/products/brand/brand-1.jpg') }}" alt="Brand"
                                                    width="102" height="48" />
                                            </figure>
                                            <div class="product-meta">
                                                <div class="product-categories">
                                                    Category:
                                                    <span class="product-category"><a href="#">Electronics</a></span>
                                                </div>
                                                <div class="product-sku">
                                                    SKU: <span>MS46891340</span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="product-divider">
                                        {{-- | Only use this code if it is a variable product that is selected  else comment it out |--}}
                                        <div class="product-price">
                                            <ins class="new-price">$210.00 - $230.00</ins>
                                        </div>
                                        {{-- | Only use this code if it is a variable product that is selected  else comment it out |--}}

                                        <div class="product-price"><ins class="new-price">$30.00</ins><del class="old-price">$60.00</del></div>
                                         
                                         {{-- | Only use this code if product has a discount and if date is used on when the offer will end else else comment it out |--}}
                                        <div class="product-countdown-container">
                                            <label class="mr-2">Offer Ends In:</label>
                                            <div class="product-countdown countdown-compact" data-until="2022, 12, 31"
                                                data-compact="true">
                                                629 days, 11: 59: 52</div>
                                        </div>
                                         {{-- | Only use this code if product has a discount and if date is used on when the offer will end  else comment it out |--}}

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                                Reviews)</a>
                                        </div>

                                        <div class="product-short-desc">
                                            <p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                Ut nascetur mollis curabitur auctor morbi, viverra hendrerit convallis.</p>
                                        </div>

                                        <hr class="product-divider">

                                        <div class="product-form product-variation-form product-color-swatch">
                                            <label>Color:</label>
                                            <div class="d-flex align-items-center product-variations">
                                                <a href="#" class="color" style="background-color: #ffcc01"></a>
                                                <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                                <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                                <a href="#" class="color" style="background-color: #ccc;"></a>
                                                <a href="#" class="color" style="background-color: #333;"></a>
                                            </div>
                                        </div>
                                        <div class="product-form product-variation-form product-size-swatch">
                                            <label class="mb-1">Size:</label>
                                            <div class="flex-wrap d-flex align-items-center product-variations">
                                                <a href="#" class="size">Small</a>
                                                <a href="#" class="size">Medium</a>
                                                <a href="#" class="size">Large</a>
                                                <a href="#" class="size">Extra Large</a>
                                            </div>
                                            <a href="#" class="product-variation-clean">Clean All</a>
                                        </div>

                                        <div class="product-variation-price">
                                            <span></span>
                                        </div>

                                        <div class="fix-bottom product-sticky-content sticky-content">
                                            <div class="product-form container">
                                                <div class="product-qty-form">
                                                    <div class="input-group">
                                                        <input class="quantity form-control" type="number" min="1"
                                                            max="10000000">
                                                        <button class="quantity-plus w-icon-plus"></button>
                                                        <button class="quantity-minus w-icon-minus"></button>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-cart">
                                                    <i class="w-icon-cart"></i>
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="social-links-wrapper">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                    <a href="#"
                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                    <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                    <a href="#"
                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                                <a href="#"
                                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>{{-- End of Page Side Description --}}
                            </div>

                            <div class="frequently-bought-together mt-5">
                                <h2 class="title title-underline">Product Description</h2>                               
                            </div>

                            <div class="">
                                <p class="text-dark fw-normal long-description">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, 
                                    scelerisque tristique facilisi augue elementum integer taciti pulvinar, 
                                    interdum pretium euismod sollicitudin sociis mi. Luctus leo est hac nibh 
                                    condimentum bibendum rhoncus nascetur senectus viverra vehicula gravida 
                                    scelerisque sed, magnis blandit aliquam diam fames penatibus potenti aenean 
                                    libero mauris mollis inceptos eros. Tincidunt et sociis curabitur odio nisl 
                                    metus ridiculus augue, nascetur nunc volutpat taciti sociosqu senectus fames mus, 
                                    faucibus tristique praesent non urna pellentesque sapien. Risus fermentum dignissim 
                                    lobortis ridiculus lectus bibendum morbi cras cursus, vitae nam dui enim elementum 
                                    aliquet mollis a, metus nec pellentesque pharetra orci cum fusce mi.
                                </p>
                            </div>
                            <hr>


                            <div class="arrow-section">
                                <span class="arrow-p">
                                    <i class="fa fa-angle-down"></i>
                                 </span>
                            </div>

                            <div class="product-form container fix-bottom text-center border-5">                           
                                <button class="btn btn-primary btn-cart buy">
                                    <i class="w-icon-cart"></i>
                                    <span>Buy Now</span>
                                </button>
                            </div>

                            <div class="frequently-bought-together mt-5">
                                <h2 class="title title-underline">Product Video </h2>                               
                            </div>

                            <div class="row">
                                <div class="col"></div>
                                <div class="col-md-8">

                                    <div class="banner banner-video product-video br-xs">
                                        <figure class="banner-media">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/products/video-banner-610x300.jpg') }}"
                                                    alt="banner" width="610" height="300"
                                                    style="background-color: #bebebe;">
                                            </a>
                                            <a class="btn-play-video btn-iframe"
                                                href="{{ asset('assets/video/memory-of-a-woman.mp4') }}"></a>
                                        </figure>
                                    </div>

                                </div>
                                <div class="col"></div>
                            </div>

                            <div class="arrow-section">
                                <span class="arrow-p">
                                    <i class="fa fa-angle-down"></i>
                                 </span>
                            </div>

                            <div class="product-form container text-center mt-5 border-5">                           
                                <button class="btn btn-primary btn-cart buy">
                                    <i class="w-icon-cart"></i>
                                    <span>Buy Now</span>
                                </button>
                            </div>
                        
                 </div>{{-- Container Starts --}}
                         
                    </div>{{-- Card Body Ends --}}
                </div>{{-- Card Ends --}}
            </div>{{-- col-lg-10 col-md-10 col-sm-10 Starts --}}
            <div class="col"></div>

         </div>
         {{-- Row Ends --}}

        </main>
  {{--  <!-- Start of Main -->  --}}


        {{--  <!-- Starting of Footer -->  --}}
        @include('Layout.footer')
        <!-- End of Footer -->
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

   {{--  <!-- Root element of PhotoSwipe. Must have class pswp -->  --}}
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    {{--  <!-- End of PhotoSwipe -->  --}}

    {{--  <!-- Start of Quick View -->  --}}
     
 @include('Layout.quick_view')

    {{--  <!-- End of Quick view -->  --}}

    
@include('Layout.boiler-bottom')


