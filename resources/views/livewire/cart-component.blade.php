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
            @if (Cart::count() > 0)
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
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img class="img-fluid" src="{{asset('assets/img/product')}}/{{$item->model->image}}"
                                                                                    alt="Product"/></a></td>
                                        <td class="pro-title"><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->name}}</a></td>
                                        <td class="pro-price"><span>${{$item->model->regular_price}}</span></td>
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
                                {{-- <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img2.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">k2 snowboard 2018</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>$295.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img3.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">Aquet Drone D 420</a></td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="2"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>$550.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img4.jpg" alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">berzerker snowboard</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" />
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>$295.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img5.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">element snowboard</a></td>
                                    <td class="pro-price"><span>$110.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="3" />
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>$110.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr> --}}
                                </tbody>
                            </table>
                        </div>

                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="sqr-btn">Apply Coupon</button>
                                </form>
                            </div>
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
                                            <td>${{Cart::subtotal()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>${{Cart::tax()}}</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">${{Cart::total()}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="checkout.html" class="sqr-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="display-5 text-center text-muted">No item in cart</h1>
            @endif
        </div>
    </div>
</div>
