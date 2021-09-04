<div class="wrapper box-layout">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="/shop">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">product details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- product details wrapper start -->
    <div class="product-details-wrapper">
        @php
            $witems = Cart::instance('wishlist')->content()->pluck('id');
            $images = explode(",",$product->images);
            $num = 1;
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-6" wire:ignore>
                                <div class="product-large-slider mb-20 slick-arrow-style_2">
                                    <div class="pro-large-img img-zoom" id="img1">
                                        <img src="{{ asset('assets/img/product')}}/{{$product->image}}" alt="{{$product->name}}" />
                                    </div>
                                    @foreach ($images as $image)
                                        @if ($image)
                                            <div class="pro-large-img img-zoom" id="img{{$num}}">
                                                <img src="{{ asset('assets/img/product')}}/{{$image}}" alt="{{$product->name}}" />
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product')}}/{{$product->image}}" alt="{{$product->name}}" /></div>
                                    @foreach ($images as $image)
                                        @if ($image)
                                            <div class="pro-nav-thumb"><img src="{{ asset('assets/img/product')}}/{{$image}}" alt="{{$product->name}}" /></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="{{route('product.details',['slug' => $product->slug])}}">{{$product->name}}</a></h3>
                                    <div class="ratings">
                                        @php
                                            $avgrating = 0;
                                        @endphp
                                        @foreach ($product->orderItems->where('rstatus',1) as $orderItem)
                                            @php
                                                $avgrating = ($avgrating + $orderItem->review->rating)/$product->orderItems->where('rstatus',1)->count();
                                                $avgrating = ceil($avgrating);
                                            @endphp
                                        @endforeach
                                        @for ($i=1;$i<=5;$i++)
                                            @if ($i<=$avgrating)
                                                <span class="good"><i class="fa fa-star"></i></span>
                                            @else
                                                <span><i class="fa fa-star" style="color: gainsboro"></i></span>
                                            @endif
                                        @endfor
                                        <div class="pro-review">
                                            <span>{{$product->orderItems->where('rstatus',1)->count()}} review(s)</span>
                                        </div>
                                    </div>
                                    {{-- <div class="customer-rev">
                                        <a href="#">({{$product->orderItems->where('rstatus',1)->count()}} customer review)</a>
                                    </div> --}}
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        @if ($product->stock_status == 'instock')
                                            <span>{{$product->stock_status}}</span>
                                        @else
                                            <span><span>{{$product->stock_status}}</span></span>
                                        @endif
                                    </div>
                                    <div class="pricebox">
                                        @if ($product->sale_price > 0)
                                            <div class="regular-price">
                                                ${{$product->sale_price}}
                                            </div>
                                            <div class="old-price">
                                                <del>${{$product->regular_price}}</del>
                                            </div>
                                        @else
                                            <span class="regular-price">${{$product->regular_price}}</span>
                                        @endif
                                    </div>
                                    <p>{!! $product->short_description !!}</p>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" wire:click.prevent="decreaseQuantity">-</span>
                                                <input type="text" value="1" pattern="[0-9]*" wire:model="qty">
                                                <span class="inc qtybtn" wire:click.prevent="increaseQuantity">+</span>
                                            </div>
                                        </div>
                                        <div class="action_link">
                                            @if ($product->sale_price > 0)
                                                <a class="buy-btn" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">add to cart<i class="fa fa-shopping-cart"></i></a>
                                            @else
                                                <a class="buy-btn" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">add to cart<i class="fa fa-shopping-cart"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="useful-links mt-20">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i>compare</a>
                                        @if ($witems->contains($product->id))
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Remove from Wishlist" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart"></i>Remove from Wishlist</a>
                                        @else
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart-o"></i>Add to Wishlist</a>
                                        @endif
                                    </div>
                                    <div class="share-icon mt-20">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                        <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews mt-34">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_two">information</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_three">reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>{!! $product->description !!}</p>
                                                <div class="review-description">
                                                    {{-- <div class="tab-thumb">
                                                        <img src="{{ asset('assets/img/about/services.jpg')}}" alt="">
                                                    </div> --}}
                                                    <div class="tab-des mt-sm-24">
                                                        <h3>Product Information :</h3>
                                                        <ul>
                                                            <li>Donec non est at libero vulputate rutrum.</li>
                                                            <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                            <li>Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla</li>
                                                            <li>Donec a neque libero.</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                            <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>color</td>
                                                        <td>black, blue, red</td>
                                                    </tr>
                                                    <tr>
                                                        <td>size</td>
                                                        <td>L, M, S</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <h5 class="mb-20">{{$product->orderItems->where('rstatus',1)->count()}} review for {{$product->name}}</h5>
                                            @foreach ($product->orderItems->where('rstatus',1) as $orderItem)
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="{{ asset('assets/img/about/avatar.jpg')}}" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            @for ($i=1;$i<=5;$i++)
                                                                @if ($i <= $orderItem->review->rating)
                                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                                @else
                                                                    <span><i class="fa fa-star" style="color: gainsboro"></i></span>
                                                                @endif
                                                            @endfor
                                                            {{-- <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span> --}}
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>{{$orderItem->order->user->name}} -</span> {{Carbon\Carbon::parse($orderItem->review->created_at->format('d F Y g:i A'))}}</p>
                                                        </div>
                                                        <p>{{$orderItem->review->comment}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->

                    <!-- related products area start -->
                    <div class="related-products-area mt-34" wire:ignore>
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h3>related products</h3>
                        </div> <!-- section title end -->
                        <!-- featured category start -->
                        <div class="featured-carousel-active slick-padding slick-arrow-style">
                            @foreach ($related_products as $r_product)
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="{{route('product.details',['slug'=>$r_product->slug])}}">
                                            <img src="{{ asset('assets/img/product')}}/{{$r_product->image}}" class="img-pri" alt="">
                                            {{-- <img src="{{ asset('assets/img/product/product-img2.jpg')}}" class="img-sec" alt=""> --}}
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">
                                            @if ($witems->contains($r_product->id))
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Remove from Wishlist" wire:click.prevent="removeFromWishlist({{$r_product->id}})"><i class="fa fa-heart"></i></a>
                                            @else
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist" wire:click.prevent="addToWishlist({{$r_product->id}},'{{$r_product->name}}',{{$r_product->regular_price}})"><i class="fa fa-heart-o"></i></a>
                                            @endif
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart" wire:click.prevent="store({{$r_product->id}},'{{$r_product->name}}',{{$r_product->regular_price}})"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('product.details',['slug'=>$r_product->slug])}}">{{$r_product->name}}</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">${{$r_product->regular_price}}</span>
                                            <div class="ratings">
                                                @php
                                                    $avgrating = 0;
                                                @endphp
                                                @foreach ($r_product->orderItems->where('rstatus',1) as $orderItem)
                                                    @php
                                                        $avgrating = ($avgrating + $orderItem->review->rating)/$r_product->orderItems->where('rstatus',1)->count();
                                                        $avgrating = ceil($avgrating);
                                                    @endphp
                                                @endforeach
                                                @for ($i=1;$i<=5;$i++)
                                                    @if ($i<=$avgrating)
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                    @else
                                                        <span><i class="fa fa-star" style="color: gainsboro"></i></span>
                                                    @endif
                                                @endfor
                                                <div class="pro-review">
                                                    <span>{{$r_product->orderItems->where('rstatus',1)->count()}} review(s)</span>
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
                                        <img src="{{ asset('assets/img/product/product-img1.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img2.jpg')}}" class="img-sec" alt="">
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
                                        <img src="{{ asset('assets/img/product/product-img3.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img4.jpg')}}" class="img-sec" alt="">
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
                                        <img src="{{ asset('assets/img/product/product-img5.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img6.jpg')}}" class="img-sec" alt="">
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
                                        <img src="{{ asset('assets/img/product/product-img7.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img8.jpg')}}" class="img-sec" alt="">
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
                                        <img src="{{ asset('assets/img/product/product-img9.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img10.jpg')}}" class="img-sec" alt="">
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
                                        <img src="{{ asset('assets/img/product/product-img11.jpg')}}" class="img-pri" alt="">
                                        <img src="{{ asset('assets/img/product/product-img12.jpg')}}" class="img-sec" alt="">
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
                            <!-- product single item end --> --}}
                        </div>
                        <!-- featured category end -->
                    </div>
                    <!-- related products area end -->
                </div>

                <!-- sidebar start -->
                <div class="col-lg-3">
                    <div class="shop-sidebar-wrap fix mt-md-22 mt-sm-22">
                        <!-- featured category start -->
                        <div class="sidebar-widget mb-22" wire:ignore>
                            <div class="section-title-2 d-flex justify-content-between mb-28">
                                <h3>featured</h3>
                                <div class="category-append"></div>
                            </div> <!-- section title end -->
                            <div class="category-carousel-active row" data-row="4">
                                @foreach ($popular_products as $p_product)
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="{{route('product.details',['slug'=>$p_product->slug])}}">
                                                    <img src="{{ asset('assets/img/product')}}/{{$p_product->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="{{route('product.details',['slug'=>$p_product->slug])}}">{{$p_product->name}}</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        ${{$p_product->regular_price}}
                                                    </div>
                                                    {{-- <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div> --}}
                                                </div>
                                                <div class="ratings">
                                                    @php
                                                        $avgrating = 0;
                                                    @endphp
                                                    @foreach ($p_product->orderItems->where('rstatus',1) as $orderItem)
                                                        @php
                                                            $avgrating = ($avgrating + $orderItem->review->rating)/$p_product->orderItems->where('rstatus',1)->count();
                                                            $avgrating = ceil($avgrating);
                                                        @endphp
                                                    @endforeach
                                                    @for ($i=1;$i<=5;$i++)
                                                        @if ($i<=$avgrating)
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                        @else
                                                            <span><i class="fa fa-star" style="color: gainsboro"></i></span>
                                                        @endif
                                                    @endfor
                                                    <div class="pro-review">
                                                        <span>{{$p_product->orderItems->where('rstatus',1)->count()}} review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                @endforeach

                                {{-- <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/img/product/product-img1.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img2.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img3.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img4.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img5.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img6.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img10.jpg')}}" alt="">
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
                                                <img src="{{ asset('assets/img/product/product-img12.jpg')}}" alt="">
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
                                </div> <!-- end single item column --> --}}
                            </div>
                        </div>
                        <!-- featured category end -->

                        <!-- manufacturer start -->
                        <div class="sidebar-widget mb-22">
                            <div class="sidebar-title mb-10">
                                <h3>Manufacturers</h3>
                            </div>
                            <div class="sidebar-widget-body">
                                <ul>
                                    <li><i class="fa fa-angle-right"></i><a href="#">calvin klein</a><span>(10)</span></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">diesel</a><span>(12)</span></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">polo</a><span>(20)</span></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">Tommy Hilfiger</a><span>(12)</span></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">Versace</a><span>(16)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- manufacturer end -->

                        <!-- product tag start -->
                        <div class="sidebar-widget mb-22">
                            <div class="sidebar-title mb-20">
                                <h3>tag</h3>
                            </div>
                            <div class="sidebar-widget-body">
                                <div class="product-tag">
                                    <a href="#">camera</a>
                                    <a href="#">computer</a>
                                    <a href="#">tablet</a>
                                    <a href="#">watch</a>
                                    <a href="#">smart phones</a>
                                    <a href="#">handbag</a>
                                    <a href="#">shoe</a>
                                    <a href="#">men</a>
                                </div>
                            </div>
                        </div>
                        <!-- product tag end -->

                        <!-- sidebar banner start -->
                        <div class="sidebar-widget mb-22">
                            <div class="img-container fix img-full mt-30">
                                <a href="#"><img src="{{ asset('assets/img/banner/banner_shop.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- sidebar banner end -->
                    </div>
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
    <!-- product details wrapper end -->
</div>
