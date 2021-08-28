<div class="wrapper">
    <!-- footer area start -->
    <footer>
        <!-- footer top start -->
        <div class="footer-top bg-black pt-14 pb-14">
            <div class="container">
                <div class="footer-top-wrapper">
                    <div class="newsletter__wrap">
                        <div class="newsletter__title">
                            <div class="newsletter__icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="newsletter__content">
                                <h3>sign up for newsletter</h3>
                                <p>Duis autem vel eum iriureDuis autem vel eum</p>
                            </div>
                        </div>
                        <div class="newsletter__box">
                            <form id="mc-form">
                                <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                <button id="mc-submit">subscribe!</button>
                            </form>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                    <div class="social-icons">
                        <a href="{{$setting->facebook}}" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{$setting->twitter}}" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{$setting->instagram}}" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="{{$setting->youtube}}" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top end -->

        <!-- footer main start -->
        <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget mb-sm-30">
                            <div class="widget-title mb-10 mb-sm-6">
                                <h4>contact us</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="location">
                                    <li><i class="fa fa-envelope"></i>{{$setting->email}}</li>
                                    <li><i class="fa fa-phone"></i>{{$setting->phone}}</li>
                                    <li><i class="fa fa-map-marker"></i>Address: {{$setting->address}}</li>
                                </ul>
                                <a class="map-btn" href="{{$setting->map}}">open in google map</a>
                            </div>
                        </div> <!-- single widget end -->
                    </div> <!-- single widget column end -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget mb-sm-30">
                            <div class="widget-title mb-10 mb-sm-6">
                                <h4>my account</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">my cart</a></li>
                                    <li><a href="#">checkout</a></li>
                                    <li><a href="#">my wishlist</a></li>
                                    <li><a href="#">login</a></li>
                                </ul>
                            </div>
                        </div> <!-- single widget end -->
                    </div> <!-- single widget column end -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget mb-sm-30">
                            <div class="widget-title mb-10 mb-sm-6">
                                <h4>short code</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li><a href="#">gallery</a></li>
                                    <li><a href="#">accordion</a></li>
                                    <li><a href="#">carousel</a></li>
                                    <li><a href="#">map</a></li>
                                    <li><a href="#">tab</a></li>
                                </ul>
                            </div>
                        </div> <!-- single widget end -->
                    </div> <!-- single widget column end -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget mb-sm-30">
                            <div class="widget-title mb-10 mb-sm-6">
                                <h4>product tags</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li><a href="#">computer</a></li>
                                    <li><a href="#">camera</a></li>
                                    <li><a href="#">smart phone</a></li>
                                    <li><a href="#">watch</a></li>
                                    <li><a href="#">tablet</a></li>
                                </ul>
                            </div>
                        </div> <!-- single widget end -->
                    </div> <!-- single widget column end -->
                </div>
            </div>
        </div>
        <!-- footer main end -->

        <!-- footer bootom start -->
        <div class="footer-bottom-area bg-gray pt-20 pb-20">
            <div class="container">
                <div class="footer-bottom-wrap">
                    <div class="copyright-text">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                    <div class="payment-method-img">
                        <img src="{{ asset('assets/img/payment.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bootom end -->

    </footer>
    <!-- footer area end -->
</div>
