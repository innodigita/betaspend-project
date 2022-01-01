



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
                    <li><a href="demo1.html">Home</a></li>
                    <li>Products</li>
                </ul>
                <ul class="product-nav list-style-none">
                    <li class="product-nav-prev">
                        <a href="#">
                            <i class="w-icon-angle-left"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Soft Sound Maker</span>
                        </span>
                    </li>
                    <li class="product-nav-next">
                        <a href="#">
                            <i class="w-icon-angle-right"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Fabulous Sound Speaker</span>
                        </span>
                    </li>
                </ul>
            </nav>
            {{--  <!-- End of Breadcrumb -->  --}}

            {{--  <!-- Start of Page Content -->  --}}
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content">
                            <div class="product product-single row mb-2">
                                <div class="col-md-6 mb-4 mb-md-8">


                                    <div class="product-gallery product-gallery-sticky">
                                        <div
                                            class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            <figure class="product-image">
                                                <img src="{{url('assets/images/products/product_images/'.$product->Product_img)}}"
                                                    data-zoom-image="assets/images/products/section/1-800x900.jpg"
                                                    alt="{{$product->Product_name}}" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="assets/images/products/section/2-800x900.jpg"
                                                    data-zoom-image="assets/images/products/section/2-800x900.jpg"
                                                    alt="Classic Simple Backpack" width="488" height="549">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="assets/images/products/section/3-800x900.jpg"
                                                    data-zoom-image="assets/images/products/section/3-800x900.jpg"
                                                    alt="Classic Simple Backpack" width="800" height="900">
                                            </figure>
                                            <figure class="product-image">
                                                <img src="assets/images/products/section/4-800x900.jpg"
                                                    data-zoom-image="assets/images/products/section/4-800x900.jpg"
                                                    alt="Classic Simple Backpack" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs row cols-4 gutter-sm">
                                                <div class="product-thumb active">
                                                    <img src="assets/images/products/section/1-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="assets/images/products/section/2-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="assets/images/products/section/3-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                <div class="product-thumb">
                                                    <img src="assets/images/products/section/4-800x900.jpg"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                            </div>
                                            <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                                            <button class="thumb-down disabled"><i
                                                    class="w-icon-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-6 mb-6 mb-md-8">
                                    <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                        <h1 class="product-title">{{$product->Product_name}}</h1>
                                        <div class="product-bm-wrapper">
                                            <figure class="brand">
                                                <img src="{{url('assets/images/brands/category/'.$brand->image)}}" alt="Brand"
                                                    width="106" height="48" />
                                            </figure>
                                            <div class="product-meta">
                                                <div class="product-categories">
                                                    Category:
                                                    <span class="product-category"><a href="#">{{$category->Parent_cat_title}}</a></span>
                                                </div>
                                                <div class="product-sku">
                                                    SKU: <span>{{$product->Sku}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="product-divider">

                                        <div class="product-price">
                                            <ins class="new-price">${{$product->Price}}</ins>
                                        </div>

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#product-tab-reviews" class="rating-reviews">(3 Reviews)</a>
                                        </div>

                                        <div class="product-short-desc">
                                            <ul class="list-type-check list-style-none">
                                                <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                                <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                                <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                            </ul>
                                        </div>

                                        <hr class="product-divider">

                                        <div class="fix-bottom product-sticky-content sticky-content">
                                            <div class="product-form container">
                                                <div class="product-qty-form">
                                                    <div class="input-group">
                                                        <input class="quantity form-control" type="number" min="1" id="product_q"
                                                            max="10000000" value=1>
                                                        <button class="quantity-plus w-icon-plus"
                                                        onclick="
                                                        plus_quant( document.getElementById('product_q').value )
                                                            
                                                        "
                                                        ></button>
                                                        <button class="quantity-minus w-icon-minus"
                                                         onclick="
                                                        minus_quant( document.getElementById('product_q').value )   
                                                        "></button>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-cart"
                                                onclick= " add_to_cart( {{$product->id}}, document.getElementById('product_q').value, '{{csrf_token()}}' )"
                                                >
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
                                </div>
                            </div>
                            <section class="description-section">
                                <div class="title-link-wrapper no-link">
                                    <h2 class="title title-link">Description</h2>
                                    <script>
                                    </script>
                                </div>
                                <div class="pt-4 pb-1" id="product-tab-description">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-4">{{$product->Product_long_desc}}
                                            <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt arcu cursus vitae congue mauris.
                                                Sagittis id consectetur purus ut. Tellus rutrum tellus pelle Vel
                                                pretium lectus quam id leo in vitae turpis massa.--></p>
                                            <ul class="list-type-check list-style-none pl-0">
                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.
                                                </li>
                                                <li>Vivamus finibus vel mauris ut vehicula.</li>
                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                                <li>Ultrices eros in cursus turpis massa tincidunt ante in nibh mauris.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="banner banner-video product-video br-xs">
                                                <figure class="banner-media">
                                                    <a href="#">
                                                        <img src="assets/images/products/video-banner-610x300.jpg"
                                                            alt="banner" width="610" height="300"
                                                            style="background-color: #bebebe;">
                                                    </a>
                                                    <a class="btn-play-video btn-iframe"
                                                        href="assets/video/memory-of-a-woman.mp4"></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row cols-md-3 mt-5">
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                                Shipping &amp; Return</h5>
                                            <p class="detail pl-5">We offer free shipping for products on orders above
                                                50$ and offer free delivery for all orders in US.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy Returns
                                            </h5>
                                            <p class="detail pl-5">We guarantee our products and you could get back all
                                                of your money anytime you want in 30 days.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing</h5>
                                            <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or over
                                                250$ for a year with our special credit card.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="review-section">
                                <div class="title-link-wrapper no-link">
                                    <h2 class="title title-link">Customer Reviews</h2>
                                </div>
                                <div class="pt-4 pb-1" id="product-tab-reviews">
                                    <div class="row mb-4">
                                        <div class="col-xl-4 col-lg-5 mb-4">
                                            <div class="ratings-wrapper">
                                                <div class="avg-rating-container">
                                                    <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                    <div class="avg-rating">
                                                        <p class="text-dark mb-1">Average Rating</p>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                    <span
                                                        class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                        class="count">(2 of 3)</span>
                                                </div>
                                                <div class="ratings-list">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>70%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>30%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>40%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 40%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>0%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 20%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>0%</mark>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 mb-4">
                                            <div class="review-form-wrapper">
                                                <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                    Review</h3>
                                                <p class="mb-3">Your email address will not be published. Required
                                                    fields are marked *</p>
                                                <form action="#" method="POST" class="review-form">
                                                    <div class="rating-form">
                                                        <label for="rating">Your Rating Of This Product :</label>
                                                        <span class="rating-stars">
                                                            <a class="star-1" href="#">1</a>
                                                            <a class="star-2" href="#">2</a>
                                                            <a class="star-3" href="#">3</a>
                                                            <a class="star-4" href="#">4</a>
                                                            <a class="star-5" href="#">5</a>
                                                        </span>
                                                        <select name="rating" id="rating" required=""
                                                            style="display: none;">
                                                            <option value="">Rate…</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very poor</option>
                                                        </select>
                                                    </div>
                                                    <textarea cols="30" rows="6" placeholder="Write Your Review Here..."
                                                        class="form-control" id="review"></textarea>
                                                    <div class="row gutter-md">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="Your Name" id="author">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="Your Email" id="email_1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" class="custom-checkbox"
                                                            id="save-checkbox">
                                                        <label for="save-checkbox">Save my name, email, and website in
                                                            this browser for the next time I comment.</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-dark">Submit Review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <section class="vendor-product-section">
                                <div class="title-link-wrapper mb-4">
                                    <h4 class="title text-left">More Products From This Vendor</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                        Products<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <div class="owl-carousel owl-theme row cols-lg-3 cols-md-4 cols-sm-3 cols-2"
                                    data-owl-options="{
                                    'nav': false,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 2
                                        },
                                        '576': {
                                            'items': 3
                                        },
                                        '768': {
                                            'items': 4
                                        },
                                        '992': {
                                            'items': 3
                                        }
                                    }
                                }">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/1-1.jpg" alt="Product"
                                                    width="300" height="338" />
                                                <img src="assets/images/products/default/1-2.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                            </div>
                                            <h4 class="product-name"><a href="product-default.html">Sticky Pencil</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$20.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/2.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat"><a href="shop-banner-sidebar.html">Electronics</a>
                                            </div>
                                            <h4 class="product-name"><a href="product-default.html">Mini
                                                    Multi-Functional Cooker</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">$480.00</ins><del
                                                        class="old-price">$534.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/3.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat"><a href="shop-banner-sidebar.html">Sports</a></div>
                                            <h4 class="product-name"><a href="product-default.html">Skate Pan</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">$278.00</ins><del
                                                        class="old-price">$310.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/4-1.jpg" alt="Product"
                                                    width="300" height="338" />
                                                <img src="assets/images/products/default/4-2.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat"><a href="shop-banner-sidebar.html">Accessories</a>
                                            </div>
                                            <h4 class="product-name"><a href="product-default.html">Clip Attachment</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$40.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="related-product-section">
                                <div class="title-link-wrapper mb-4">
                                    <h4 class="title">Related Products</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                        Products<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <div class="owl-carousel owl-theme row cols-lg-3 cols-md-4 cols-sm-3 cols-2"
                                    data-owl-options="{
                                    'nav': false,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 2
                                        },
                                        '576': {
                                            'items': 3
                                        },
                                        '768': {
                                            'items': 4
                                        },
                                        '992': {
                                            'items': 3
                                        }
                                    }
                                }">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/5.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Drone</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$632.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/6.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Official Camera</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                    <ins class="new-price">$263.00</ins><del
                                                        class="old-price">$300.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/7-1.jpg" alt="Product"
                                                    width="300" height="338" />
                                                <img src="assets/images/products/default/7-2.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Phone Charge Pad</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$23.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/products/default/8.jpg" alt="Product"
                                                    width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Fashionalble
                                                    Pencil</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$50.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                            <div class="sidebar-content scrollable">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-icon-box mb-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-truck"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                                <p>For all orders over $99</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-bag"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Secure Payment</h4>
                                                <p>We ensure secure payment</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-money"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                                <p>Any back within 30 days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Icon Box -->

                                    <div class="widget widget-banner mb-9">
                                        <div class="banner banner-fixed br-sm">
                                            <figure>
                                                <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                                    height="220" style="background-color: #1D2D44;" />
                                            </figure>
                                            <div class="banner-content">
                                                <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                    40<sup class="font-weight-bold">%</sup><sub
                                                        class="font-weight-bold text-uppercase ls-25">Off</sub>
                                                </div>
                                                <h4
                                                    class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                    Ultimate Sale</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Banner -->

                                    <div class="widget widget-products">
                                        <div class="title-link-wrapper mb-2">
                                            <h4 class="title title-link font-weight-bold">More Products</h4>
                                        </div>

                                        <div class="owl-carousel owl-theme owl-nav-top" data-owl-options="{
                                            'nav': true,
                                            'dots': false,
                                            'items': 1,
                                            'margin': 20
                                        }">
                                            <div class="widget-col">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/13.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Smart Watch</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$80.00 - $90.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/14.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Sky Medical Facility</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$58.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/15.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Black Stunt Motor</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$374.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-col">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/16.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Skate Pan</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$278.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/17.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Modern Cooker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$324.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="assets/images/shop/18.jpg" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">CT Machine</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$236.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>

        {{--  <!-- End of Main -->  --}}



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


