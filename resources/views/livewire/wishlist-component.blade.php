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
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- wishlist main wrapper start -->
    <div class="wishlist-main-wrapper">
        <div class="container">
            @if (Cart::instance('wishlist')->content()->count() > 0)
                <!-- Wishlist Page Content Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Wishlist Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Thumbnail</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Stock Status</th>
                                        <th class="pro-subtotal">Add to Cart</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('wishlist')->content() as $item)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{route('product.details',['slug' => $item->model->slug])}}"><img class="img-fluid" src="{{asset('assets/img/product')}}/{{$item->model->image}}" alt="{{$item->model->name}}"/></a></td>
                                            <td class="pro-title"><a href="{{route('product.details',['slug' => $item->model->slug])}}">{{$item->model->name}}</a></td>
                                            <td class="pro-price"><span>${{$item->model->regular_price}}</span></td>
                                            <td class="pro-quantity"><span class="text-success">{{$item->model->stock_status}}</span></td>
                                            <td class="pro-subtotal"><a href="cart.html" class="sqr-btn text-white">Add to Cart</a></td>
                                            <td class="pro-remove"><a href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Wishlist Page Content End -->
            @else
                <h1 class="display-5 text-center text-muted">No item in the wishlist</h1>
            @endif
        </div>
    </div>
    <!-- wishlist main wrapper end -->
</div>
