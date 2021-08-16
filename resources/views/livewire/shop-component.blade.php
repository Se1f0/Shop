<div class="wrapper box-layout">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">shop</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page wrapper start -->
    <div class="page-main-wrapper">
        <div class="container">
            <div class="row">
                <!-- product main wrap start -->
                <div class="col-12">
                    <div class="shop-banner img-full">
                        <img src="{{ asset('assets/img/banner/banner_static1.jpg') }}" alt="">
                    </div>
                    <!-- product view wrapper area start -->
                    <div class="shop-product-wrapper pt-34">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode mr-70 mr-sm-0">
                                            <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                        </div>
                                        <div class="product-amount">
                                            @if ($page == $pages)
                                                <p>Showing {{($page-1)*13}}–{{$count}} of {{$count}} results</p>
                                            @else
                                                <p>Showing {{($page-1)*13+1}}–{{$page * 12}} of {{$count}} results</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby" wire:model="sorting">
                                                <option value="default">Default</option>
                                                <option value="date">Latest</option>
                                                <option value="name">Name (A - Z)</option>
                                                <option value="name-desc">Name (Z - A)</option>
                                                <option value="price">Price (Low &gt; High)</option>
                                                <option value="price-desc">Price (High &gt; Low)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item start -->
                        <div class="shop-product-wrap grid row">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- product single grid item start -->
                                    <div class="product-item fix mb-30">
                                        <div class="product-thumb">
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                                <img src="{{ asset('assets/img/product') }}/{{$product->image}}" class="img-pri" alt="">
                                                {{-- <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt=""> --}}
                                            </a>
                                            @if ($witems->contains($product->id))
                                                <div class="product-label-wish">
                                                    <span><i class="fa fa-heart"></i></span>
                                                </div>
                                            @endif
                                            <div class="product-action-link">
                                                {{-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a> --}}
                                                @if ($witems->contains($product->id))
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Remove from Wishlist" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart"></i></a>
                                                @else
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart-o"></i></a>
                                                @endif
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                @if ($product->sale_price > 0)
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})"></i></a>
                                                @else
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"></i></a>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h4>
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
                                    <!-- product single grid item end -->
                                    <!-- product single list item start -->
                                    <div class="product-list-item mb-30">
                                        <div class="product-thumb">
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                                <img src="{{ asset('assets/img/product') }}/{{$product->image}}" class="img-pri" alt="">
                                                {{-- <img src="{{ asset('assets/img/product/product-img2.jpg') }}" class="img-sec" alt=""> --}}
                                            </a>
                                            @if ($witems->contains($product->id))
                                                <div class="product-label-wish">
                                                    <span><i class="fa fa-heart"></i></span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product-list-content">
                                            <h3><a href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h3>
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
                                            <div class="pricebox">
                                                <span class="regular-price">{{$product->regular_price}}</span>
                                                {{-- <span class="old-price"><del>$90.00</del></span> --}}
                                            </div>
                                            <p>{{$product->short_description}}</p>
                                            <div class="product-list-action-link">
                                                @if ($product->sale_price > 0)
                                                    <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                                @else
                                                    <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                                @endif
                                                {{-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a> --}}
                                                @if ($witems->contains($product->id))
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Remove from Wishlist" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart"></i></a>
                                                @else
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fa fa-heart-o"></i></a>
                                                @endif
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single list item end -->
                                </div> <!-- product single column end -->
                            @endforeach
                        </div>
                        <!-- product item end -->
                    </div>
                    <!-- product view wrapper area end -->
                    <!-- start pagination area -->
                    {{$products->links('pagination-links')}}
                    <!-- end pagination area -->
                </div>
                <!-- product main wrap end -->
            </div>
        </div>
    </div>
</div>
