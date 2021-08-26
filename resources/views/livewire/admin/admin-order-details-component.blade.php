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
                                <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.orders')}}">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="my-account-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row justify-content-center">
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-12 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                        @if (Session::has('order_message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>Order Details</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Order Date</th>
                                                            <th>Status</th>
                                                            @if ($order->status == "delivered")
                                                                <th>Delivery Date</th>
                                                            @elseif ($order->status == "canceled")
                                                                <th>Cancellation Date</th>
                                                            @endif
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$order->id}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td>{{$order->status}}</td>
                                                            @if ($order->status == "delivered")
                                                                <td>{{$order->delivered_date}}</td>
                                                            @elseif ($order->status == "canceled")
                                                                <td>{{$order->canceled_date}}</td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-content">
                        <h3>Ordered Items</h3>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{route('product.details',['slug'=>$item->product->slug])}}"><img class="img-fluid" src="{{asset('assets/img/product')}}/{{$item->product->image}}"
                                                                                    alt="Product"/></a></td>
                                        <td class="pro-title"><a href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></td>
                                        @if ($item->product->sale_price > 0)
                                            <td class="pro-price"><span>${{$item->product->sale_price}}</span></td>
                                        @else
                                            <td class="pro-price"><span>${{$item->product->regular_price}}</span></td>
                                        @endif
                                        <td>
                                            <span>{{$item->quantity}}</span>
                                        </td>
                                        <td class="pro-subtotal"><span>${{$item->product->regular_price * $item->quantity}}</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td><strong>${{$order->subtotal}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td><strong>${{$order->tax}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td><strong>Free Shipping</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><strong>${{$order->total}}</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-10">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-content">
                        <h3>Billing Details</h3>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>First Name</th>
                                    <td>{{$order->firstname}}</td>
                                    <th>Last Name</th>
                                    <td>{{$order->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$order->phone}}</td>
                                    <th>Email</th>
                                    <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <th>Line1</th>
                                    <td>{{$order->line1}}</td>
                                    <th>Line2</th>
                                    <td>{{$order->line2}}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{$order->city}}</td>
                                    <th>Province</th>
                                    <td>{{$order->province}}</td>
                                </tr>
                                <tr>
                                    <th>Zipcode</th>
                                    <td>{{$order->zipcode}}</td>
                                    <th>Order Note</th>
                                    <td>{{$order->ordernote}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @if ($order->is_shipping_different)
                <div class="row mt-10">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-content">
                            <h3>Shipping Details</h3>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>First Name</th>
                                        <td>{{$order->shipping->firstname}}</td>
                                        <th>Last Name</th>
                                        <td>{{$order->shipping->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$order->shipping->phone}}</td>
                                        <th>Email</th>
                                        <td>{{$order->shipping->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Line1</th>
                                        <td>{{$order->shipping->line1}}</td>
                                        <th>Line2</th>
                                        <td>{{$order->shipping->line2}}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{$order->shipping->city}}</td>
                                        <th>Province</th>
                                        <td>{{$order->shipping->province}}</td>
                                    </tr>
                                    <tr>
                                        <th>Zipcode</th>
                                        <td>{{$order->shipping->zipcode}}</td>
                                        <th>Country</th>
                                        <td>Algeria</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row mt-10">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-content">
                        <h3>Transaction</h3>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>Transaction Mode</th>
                                    <td>{{$order->transaction->mode}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$order->transaction->status}}</td>
                                </tr>
                                <tr>
                                    <th>Transaction Date</th>
                                    <td>{{$order->transaction->created_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
