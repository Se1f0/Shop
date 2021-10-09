<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Galio - Mega Shop Responsive Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- helper class css -->
    <link href="{{ asset('assets/css/helper.min.css') }}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-default.css') }}" rel="stylesheet" id="galio-skin">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" id="galio-skin">

    @livewireStyles
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/1.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/2.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/3.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/4.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/5.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-pettern/6.png') }}" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/01.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/02.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/03.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/04.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/05.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('assets/img/bg-panel/bg-img/06.jpg') }}" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                @php
                                    $setting = DB::table('settings')->first();
                                @endphp
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    {{$setting->email}}
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    {{$setting->phone}}
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        @if (Route::has('login'))
                                            @auth
                                                @if (Auth::user()->utype === 'ADM')
                                                    <li>
                                                        <div class="dropdown header-top-dropdown">
                                                            <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                {{Auth::user()->name}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="myaccount">
                                                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                                <a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a>
                                                                <a class="dropdown-item" href="{{ route('admin.products') }}">Products</a>
                                                                <a class="dropdown-item" href="{{ route('admin.homeslider') }}">Manage Home Slider</a>
                                                                <a class="dropdown-item" href="{{ route('admin.homecategories') }}">Manage Home Categories</a>
                                                                <a class="dropdown-item" href="{{ route('admin.sale') }}">Sale Setting</a>
                                                                <a class="dropdown-item" href="{{ route('admin.coupons') }}">All coupons</a>
                                                                <a class="dropdown-item" href="{{ route('admin.orders') }}">All Orders</a>
                                                                <a class="dropdown-item" href="{{ route('admin.contact') }}">All Contacts</a>
                                                                <a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a>
                                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> logout</a>
                                                                <form  id="logout-form" method="POST" action= "{{ route('logout') }}">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>

                                                    </li>
                                                @else
                                                    <li>
                                                        <div class="dropdown header-top-dropdown">
                                                            <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                {{Auth::user()->name}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="myaccount">
                                                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                                <a class="dropdown-item" href="{{route('user.orders')}}">My Orders</a>
                                                                <a class="dropdown-item" href="{{route('user.profile')}}">My Profile</a>
                                                                <a class="dropdown-item" href="{{route('user.changepassword')}}">Change My Password</a>
                                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> logout</a>
                                                                <form  id="logout-form" method="POST" action= "{{ route('logout') }}">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @else
                                            <li>
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}">Register</a>
                                            </li>
                                            @endif
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="\">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Working time</h5>
                                            <span>Mon- Sun: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>free shipping</h5>
                                            <span>On order over $199</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>money back 100%</h5>
                                            <span>Within 30 Days after delivery</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    @livewire('header-search-component')
                                    @livewire('cart-count-component')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                @livewire('category-menu-component')
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="{{\Request::route()->getName() == 'home' ? 'active' : 'static'}}"><a href="/"><i class="fa fa-home"></i>Home</a>
                                                {{-- <ul class="dropdown">
                                                    <li><a href="index.html">Home version 01</a></li>
                                                    <li><a href="index-2.html">Home version 02</a></li>
                                                    <li><a href="index-3.html">Home version 03</a></li>
                                                    <li><a href="index-4.html">Home version 04</a></li>
                                                </ul> --}}
                                            </li>
                                            <li class="{{\Request::route()->getName() == 'shop' ? 'active' : 'static'}}"><a href="/shop"><i class="fa fa-shopping-bag"></i>Shop</a>
                                                {{-- <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="my-account.html">my-account</a></li>
                                                            <li><a href="login-register.html">login-register</a></li>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="contact-us.html">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            <li class="{{\Request::route()->getName() == 'product.cart' ? 'active' : 'static'}}"><a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a>
                                                {{-- <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-left-sidebar-3-col.html">left
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar-3-col.html">grid right
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-list-left-sidebar.html">shop list left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">shop list right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-full.html">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                            <li><a href="product-details-box.html">product details box
                                                                    slider</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            @livewire('wishlist-count-component')
                                            {{-- <li class="{{\Request::route()->getName() == 'checkout' ? 'active' : 'static'}}"><a href="/checkout"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Checkout</a></li> --}}
                                            <li class="{{\Request::route()->getName() == 'contact' ? 'active' : 'static'}}"><a href="/contact-us"><i class="fa fa-envelope" aria-hidden="true"></i>Contact Us</a>
                                            <li class="static"><a href="contact-us.html"><i class="fa fa-question-circle" aria-hidden="true"></i>About us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- main menu area end -->
        <span id="temp"></span>
        {{$slot}}
        <!-- brand area start -->
        <div class="brand-area pt-28 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Popular Brand</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br1.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br2.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br3.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br4.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br5.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br6.png') }}" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="{{ asset('assets/img/brand/br4.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        @livewire('footer-component')
    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="{{ asset('assets/img/product/product-details-img1.jpg') }}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ asset('assets/img/product/product-details-img2.jpg') }}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ asset('assets/img/product/product-details-img3.jpg') }}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ asset('assets/img/product/product-details-img4.jpg') }}" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ asset('assets/img/product/product-details-img5.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product/product-details-img1.jpg') }}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product/product-details-img2.jpg') }}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product/product-details-img3.jpg') }}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product/product-details-img4.jpg') }}"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product/product-details-img5.jpg') }}"
                                            alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
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
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- Jquery Min Js -->
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper Min Js -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Plugins Js-->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail Js -->
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <!-- Active Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="{{ asset('assets/js/switcher.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="https://cdn.tiny.cloud/1/ouwy7vhemkph0w403wcs858w47vwx3q8sf3qhco8hgzprpxo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
