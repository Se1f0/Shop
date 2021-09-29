<div class="wrapper">
    @php
        $witems = Cart::instance('wishlist')->content()->pluck('id');
    @endphp
    <!-- hero slider start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-wrapper-area">
                    <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                        @foreach ($sliders as $slide)
                            <div class="single-slider" style="background-image: url({{ asset('assets/img/slider')}}/{{$slide->image}});">
                                <div class="container p-0">
                                    <div class="slider-main-content">
                                        <div class="slider-content-img">
                                            {{-- <img src="{{ asset('assets/img/slider/slider11_lable1.png') }}" alt="">
                                            <img src="{{ asset('assets/img/slider/slider11_lable2.png') }}" alt="">
                                            <img src="{{ asset('assets/img/slider/slider11_lable3.png') }}" alt=""> --}}
                                        </div>
                                        <div class="slider-text">
                                            {{-- <div class="slider-label">
                                                <img src="{{ asset('assets/img/slider/slider11_lable4.png') }}" alt="">
                                            </div> --}}
                                            <h1 >{{$slide->title}}</h1>
                                            <p>{{$slide->subtitle}}</p>
                                            <h2 class="mb-10 text-warning">Only price: <span class="regular-price">{{$slide->price}}$</span></h2>
                                            <a href="{{$slide->link}}" class="btn btn-danger mt-10">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->

    <!-- home banner area start -->
    <div class="banner-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                    <div class="img-container img-full fix imgs-res mb-sm-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/banner/banner_left.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 order-sm-3">
                    <div class="img-container img-full fix mb-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/banner/banner_static_top1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="img-container img-full fix mb-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/banner/banner_static_top2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                    <div class="img-container img-full fix">
                        <a href="#">
                            <img src="{{ asset('assets/img/banner/banner_static_top3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner area end -->

    <!-- page wrapper start -->
    <div class="page-wrapper pt-6 pb-28 pb-md-6 pb-sm-6 pt-xs-36">
        <div class="container">
            <div class="row">
                <!-- start home sidebar -->
                <div class="col-lg-3">
                    <div class="home-sidebar">
                        <!-- hot deals area start -->
                        <div class="main-sidebar hot-deals-wrap mb-30" wire:ignore>
                            <div class="section-title-2 d-flex justify-content-between mb-28">
                                <h3>hot deals</h3>
                                <div class="slick-append"></div>
                            </div> <!-- section title end -->
                            <div class="deals-carousel-active slick-padding slick-arrow-style">
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/product-img7.jpg') }}" class="img-pri" alt="">
                                            <img src="{{ asset('assets/img/product/product-img13.jpg') }}" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                        class="fa fa-search"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">vertual product 01</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/product-img3.jpg') }}" class="img-pri" alt="">
                                            <img src="{{ asset('assets/img/product/product-img4.jpg') }}" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                        class="fa fa-search"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">vertual product 01</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/product-img5.jpg') }}" class="img-pri" alt="">
                                            <img src="{{ asset('assets/img/product/product-img1.jpg') }}" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                        class="fa fa-search"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">vertual product 01</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                            </div>
                        </div>
                        <!-- hot deals area end -->

                        <!-- best seller area start -->
                        <div class="main-sidebar category-wrapper mb-24" wire:ignore>
                            <div class="section-title-2 d-flex justify-content-between mb-28">
                                <h3>best seller</h3>
                                <div class="category-append"></div>
                            </div> <!-- section title end -->
                            <div class="category-carousel-active row" data-row="4">
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img3.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img4.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img6.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img10.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">simple Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $150.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img12.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="product-details.html">external Product 01</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    $140.00
                                                </div>
                                                <div class="old-price">
                                                    <del>$160.00</del>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div> <!-- end single item column -->
                            </div>
                        </div>
                        <!-- best seller area end -->

                        <!-- blog area start -->
                        {{-- <div class="main-sidebar blog-area mb-24">
                            <div class="section-title-2 d-flex justify-content-between mb-28">
                                <h3>latest blog</h3>
                                <div class="category-append"></div>
                            </div> <!-- section title end -->
                            <!-- blog wrapper start -->
                            <div class="blog-carousel-active">
                                <div class="blog-item">
                                    <div class="blog-thumb img-full fix">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/img/blog/img_blog1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="blog-details.html">post format audio</a></h3>
                                        <div class="blog-meta">
                                            <span class="posted-author">by: admin</span>
                                            <span class="post-date">25 nov, 2018</span>
                                        </div>
                                        <p>curabitur sed diam enim. sed varius faucibus lectus, a scelerisque massa
                                            posuere ac. quisque dapibus, est ac...</p>
                                    </div>
                                    <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div> <!-- end single blog item -->
                                <div class="blog-item">
                                    <div class="blog-thumb img-full fix">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/img/blog/img_blog2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="blog-details.html">post format image</a></h3>
                                        <div class="blog-meta">
                                            <span class="posted-author">by: admin</span>
                                            <span class="post-date">25 nov, 2018</span>
                                        </div>
                                        <p>curabitur sed diam enim. sed varius faucibus lectus, a scelerisque massa
                                            posuere ac. quisque dapibus, est ac...</p>
                                    </div>
                                    <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div> <!-- end single blog item -->
                            </div>
                            <!-- blog wrapper end -->
                        </div> --}}
                        <!-- blog area end -->

                        <!-- testimonial area start -->
                        <div class="main-sidebar testimonial-area pb-sm-70" wire:ignore>
                            <div class="section-title-2 mb-28">
                                <h3>Clients Say</h3>
                            </div> <!-- section title end -->
                            <div class="testimonial-carousel-active slick-dot-style">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/img/testimonial/team_member1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3><a href="#">Elizabeth Taylor</a></h3>
                                        <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                            aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                            sodales ac eu lacus</p>
                                    </div>
                                </div> <!-- end single testimonial item -->
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/img/testimonial/team_member2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3><a href="#">Elizabeth Taylor</a></h3>
                                        <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                            aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                            sodales ac eu lacus</p>
                                    </div>
                                </div> <!-- end single testimonial item -->
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/img/testimonial/team_member3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <h3><a href="#">Elizabeth Taylor</a></h3>
                                        <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                            aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                            sodales ac eu lacus</p>
                                    </div>
                                </div> <!-- end single testimonial item -->
                            </div>
                        </div>
                        <!-- testimonial area end -->

                    </div>
                </div>
                <!-- end home sidebar -->

                <div class="col-lg-9">
                    <!-- featured category area start -->
                    <div class="feature-category-area mt-md-70" wire:ignore>
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <h3>featured</h3>
                        </div> <!-- section title end -->
                        <!-- featured category start -->
                        <div class="featured-carousel-active slick-padding slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img1.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">affiliate product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$90.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img3.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img4.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$120.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img5.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img6.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 05</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$60.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img7.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img8.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">grouped product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$10.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img9.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img10.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 10</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img11.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img12.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">affiliate product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                        <!-- featured category end -->
                    </div>
                    <!-- featured category area end -->

                    <!-- banner statistic start -->
                    <div class="banner-statistic pt-28 pb-36">
                        <div class="img-container fix img-full">
                            <a href="#">
                                <img src="{{ asset('assets/img/banner/banner_static1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- banner statistic end -->

                    <!-- featured category area start -->
                    <div class="feature-category-area" wire:ignore>
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </div>
                            <h3>New Arrivals</h3>
                        </div> <!-- section title end -->
                        <!-- featured category start -->
                        <div class="featured-carousel-active slick-padding slick-arrow-style">
                            @foreach ($lproducts as $lproduct)
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="{{route('product.details',['slug' => $lproduct->slug])}}">
                                            <img src="{{ asset('assets/img/product') }}/{{$lproduct->image}}" class="img-pri" alt="">
                                            {{-- <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt=""> --}}
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        @if ($witems->contains($lproduct->id))
                                            <div class="product-label-wish">
                                                <span><i class="fa fa-heart"></i></span>
                                            </div>
                                        @endif
                                        <div class="product-action-link">
                                            {{-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                        class="fa fa-search"></i></span> </a> --}}
                                            @if ($witems->contains($lproduct->id))
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Remove from Wishlist" wire:click.prevent="removeFromWishlist({{$lproduct->id}})" wire:ignore><i class="fa fa-heart"></i></a>
                                            @else
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist" wire:click.prevent="addToWishlist({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->regular_price}})"><i class="fa fa-heart-o"></i></a>
                                            @endif
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart" wire:click.prevent="store({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->regular_price}})"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('product.details',['slug' => $lproduct->slug])}}">{{$lproduct->name}}</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">${{$lproduct->regular_price}}</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                            @endforeach

                            {{-- <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img1.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img3.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img4.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 02</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$100.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img5.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img6.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">affiliate product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$60.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img7.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img8.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">trendy product 03</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$50.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img9.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img10.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 20</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$80.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('assets/img/product/product-img11.jpg') }}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img12.jpg') }}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">grouped product</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end --> --}}
                        </div>
                        <!-- featured category end -->
                    </div>
                    <!-- featured category area end -->

                    <!-- banner statistic start -->
                    <div class="banner-statistic pt-28 pb-30 pb-sm-0">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="img-container fix img-full mb-sm-30">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/banner/banner_static2.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="img-container fix img-full mb-sm-30">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/banner/banner_static3.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner statistic end -->

                    <!-- category features area start -->
                    <div class="feature-category-area">
                        @if ($s_products->count() > 0)
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h3>On Sale : 00 Day 00 hours 00 sec</h3>
                            </div> <!-- section title end -->
                            <!-- featured category start -->
                            <div class="featured-carousel-active slick-padding slick-arrow-style">
                                @foreach ($s_products as $s_product)
                                    <!-- product single item start -->
                                    <div class="product-item fix">
                                        <div class="product-thumb">
                                            <a href="{{route('product.details',['slug' => $s_product->slug])}}">
                                                <img src="{{ asset('assets/img/product')}}/{{$s_product->image}}" class="img-pri" alt="">
                                                {{-- <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt=""> --}}
                                            </a>
                                            <div class="product-label">
                                                <span>Sale</span>
                                            </div>
                                            <div class="product-action-link">
                                                {{-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                        data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                            class="fa fa-search"></i></span> </a> --}}
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                        class="fa fa-refresh"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('product.details',['slug' => $s_product->slug])}}">{{$s_product->name}}</a></h4>
                                            <div class="pricebox">
                                                <div class="regular-price">
                                                    ${{$s_product->sale_price}}
                                                </div>
                                                <div class="old-price">
                                                    <del>${{$s_product->regular_price}}</del>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- product single item end -->
                                @endforeach
                            </div>
                            <!-- featured category end -->
                        @endif

                    </div>
                    {{-- <div class="category-feature-area">
                        <div class="row">
                            <!-- New Products area start -->
                            <div class="col-lg-4">
                                <div class="category-wrapper mb-md-24 mb-sm-24">
                                    <div class="section-title-2 d-flex justify-content-between mb-28">
                                        <h3>New Products</h3>
                                        <div class="category-append"></div>
                                    </div> <!-- section title end -->
                                    <div class="category-carousel-active row" data-row="4">
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del></del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img2.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">grouped Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $100.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del></del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">simple Product 05</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $155.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$160.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img4.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">demandable Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $210.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$240.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img6.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">simple Product 12</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img7.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img8.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">grouped Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $90.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$115.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                    </div>
                                </div>
                            </div>
                            <!-- New Products area end -->
                            <!-- Most viewed area start -->
                            <div class="col-lg-4">
                                <div class="category-wrapper mb-md-24 mb-sm-24">
                                    <div class="section-title-2 d-flex justify-content-between mb-28">
                                        <h3>Most viewed</h3>
                                        <div class="category-append"></div>
                                    </div> <!-- section title end -->
                                    <div class="category-carousel-active row" data-row="4">
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img14.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">simple Product 06</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $190.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$210.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img13.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">affiliate Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $45.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$650.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img12.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">grouped Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $120.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$170.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img10.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $180.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del></del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img9.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">external Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img8.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img6.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">download Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                    </div>
                                </div>
                            </div>
                            <!-- Most viewed area end -->
                            <!-- Most viewed area start -->
                            <div class="col-lg-4">
                                <div class="category-wrapper mb-md-24 mb-sm-24">
                                    <div class="section-title-2 d-flex justify-content-between mb-28">
                                        <h3>hot sale</h3>
                                        <div class="category-append"></div>
                                    </div> <!-- section title end -->
                                    <div class="category-carousel-active row" data-row="4">
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img6.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $120.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$150.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img15.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">grouped Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $160.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del></del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img11.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">download Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $140.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$160.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img16.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">simple Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $80.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$100.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img15.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">affiliate Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $120.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del></del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">external Product</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $130.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$140.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img13.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $150.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$180.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                        <div class="col">
                                            <div class="category-item">
                                                <div class="category-thumb">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('assets/img/product/product-img3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="category-content">
                                                    <h4><a href="product-details.html">variable Product 01</a></h4>
                                                    <div class="price-box">
                                                        <div class="regular-price">
                                                            $70.00
                                                        </div>
                                                        <div class="old-price">
                                                            <del>$90.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end single item -->
                                        </div> <!-- end single item column -->
                                    </div>
                                </div>
                            </div>
                            <!-- Most viewed area end -->
                        </div>
                    </div> --}}
                    <!-- category features area end -->
                    <div class="banner-statistic pt-28 pb-36">
                        <div class="img-container fix img-full">
                            <a href="#">
                                <img src="{{ asset('assets/img/banner/banner_static1.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page wrapper end -->

    <!-- latest product start -->
    <div class="latest-product">
        <div class="container">
            <div class="category-tab-area mb-30">
                <div class="category-tab">
                    <ul class="nav">
                        <li>
                            <i class="fa fa-flask"></i>
                        </li>
                        @foreach ($categories as $key=>$category)
                           <li>
                                <a class="{{$key == 0 ? 'active' : ''}}" data-toggle="tab" href="#category_{{$category->id}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-content pb-md-20 pb-sm-20" wire:ignore>
                @foreach ($categories as $key=>$category)
                    <div class="tab-pane fade {{$key == 0 ? 'active' : ''}}" id="category_{{$category->id}}">
                        <div class="feature-category-carousel-wrapper">
                            <div class="featured-carousel-active slick-padding slick-arrow-style arrow-space">
                                    @php
                                        $c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
                                    @endphp
                                    @foreach ($c_products as $c_product)
                                        <!-- product single item start -->
                                        <div class="product-item fix">
                                            <div class="product-thumb">
                                                <a href="{{route('product.details',['slug' => $c_product->slug])}}">
                                                    <img src="{{asset('assets/img/product')}}/{{$c_product->image}}" class="img-pri" alt="{{$c_product->name}}">
                                                    {{-- <img src="assets/img/product/product-s-2.jpg" class="img-sec" alt=""> --}}
                                                </a>
                                                <div class="product-action-link">
                                                    {{-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a> --}}
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="{{route('product.details',['slug' => $c_product->slug])}}">{{$c_product->name}}</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">${{$c_product->regular_price}}</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product single item end -->
                                    @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="tab-pane fade" id="tab_two">
                    <div class="feature-category-carousel-wrapper">
                        <div class="featured-carousel-active slick-padding slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-1.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-f-2.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-3.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-f-4.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 04</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$80.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-2.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-s-4.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">grouped product 05</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-4.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-s-2.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">affiliate product 06</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$100.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-2.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-f-3.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-b-1.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-b-2.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$50.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_three">
                    <div class="feature-category-carousel-wrapper">
                        <div class="featured-carousel-active slick-padding slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-1.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-f-2.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-3.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-f-4.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 04</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$80.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-b-2.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-b-4.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">grouped product 05</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-f-3.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-s-1.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">affiliate product 06</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$100.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-b-2.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-b-3.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-s-1.jpg" class="img-pri" alt="">
                                        <img src="assets/img/product/product-s-2.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">simple product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$50.00</span>
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- featured category end -->
        </div>
    </div>
<!-- latest product end -->

</div>
