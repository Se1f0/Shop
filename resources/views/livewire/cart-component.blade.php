<div class="wrapper box-layout">
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="\">Home</a></li>
                                <li class="breadcrumb-item"><a href="\shop">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper">
        <div class="container">
            @if (Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{Session::get('success_message')}}
                </div>
            @endif
            @if (Cart::instance('cart')->count() > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img class="img-fluid" src="{{asset('assets/img/product')}}/{{$item->model->image}}"
                                                                                    alt="Product"/></a></td>
                                        <td class="pro-title"><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->name}}</a></td>
                                        @if ($item->model->sale_price > 0)
                                            <td class="pro-price"><span>${{$item->model->sale_price}}</span></td>
                                        @else
                                            <td class="pro-price"><span>${{$item->model->regular_price}}</span></td>
                                        @endif
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</span>
                                                <input type="text" value="{{$item->qty}}">
                                                <span class="inc qtybtn" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</span>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>${{$item->subtotal}}</span></td>
                                        <td class="pro-remove"><a href="#" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            @if (!Session::has('coupon'))
                                <div class="apply-coupon-wrapper">
                                    @if (Session::has('coupon_message'))
                                        <div class="alert alert-danger" role="danger">{{Session::get('coupon_message')}}</div>
                                    @endif
                                    <form class=" d-block d-md-flex" wire:submit.prevent="applyCouponCode">
                                        <input type="text" placeholder="Enter Your Coupon Code" required wire:model="couponCode"/>
                                        <button class="sqr-btn" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            @endif
                            <div class="cart-update mt-sm-16">
                                <a href="#" class="sqr-btn" wire:click.prevent="destroyAll()">Clear Shopping Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>${{Cart::instance('cart')->subtotal()}}</td>
                                        </tr>
                                        @if (Session::has('coupon'))
                                            <tr>
                                                <td>Discount({{Session::get('coupon')['code']}})<a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger"></i></a></td>
                                                <td>- ${{number_format($discount,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal with Discount</td>
                                                <td>${{number_format($subtotalAfterDiscount,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tax({{config('cart.tax')}}%)</td>
                                                <td>${{number_format($taxAfterDiscount,2)}}</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">${{number_format($totalAfterDiscount,2)}}</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>Tax</td>
                                                <td>${{Cart::instance('cart')->tax()}}</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">${{Cart::instance('cart')->total()}}</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <a href="#" class="sqr-btn d-block" wire:click.prevent="checkout">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="display-5 text-center text-muted">Cart is empty!</h1>
                <div class="row justify-content-center  mt-10 ml-10">
                    <div class="col-2">
                        <a href="/shop" class="btn btn-danger">Check the Shop</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
