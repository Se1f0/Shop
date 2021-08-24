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
                                <li class="breadcrumb-item"><a href="/shop">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper">
        <div class="container">
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Billing Details</h2>
                            <div class="billing-form-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label class="required">First Name</label>
                                            <input type="text" placeholder="First Name" autofocus wire:model="firstname"/>
                                            @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label class="required">Last Name</label>
                                            <input type="text" placeholder="Last Name" wire:model="lastname" />
                                            @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="single-input-item">
                                    <label  class="required">Email Address</label>
                                    <input type="email" placeholder="Email Address" wire:model="email" />
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="single-input-item">
                                    <label class="required">Phone</label>
                                    <input type="text" placeholder="Phone" wire:model="phone" />
                                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="single-input-item">
                                    <label  class="required pt-20">Street address</label>
                                    <input type="text" placeholder="Street address Line 1" wire:model="line1" />
                                    @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="single-input-item">
                                    <input type="text"  placeholder="Street address Line 2 (Optional)" wire:model="line2" />
                                </div>

                                <div class="single-input-item">
                                    <label class="required">Town / City</label>
                                    <input type="text" placeholder="Town / City" wire:model="city" />
                                    @error('city') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="single-input-item">
                                    <label class="required">Province</label>
                                    <input type="text" placeholder="Province" wire:model="province" />
                                    @error('province') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="single-input-item">
                                    <label class="required">Postcode / ZIP</label>
                                    <input type="text" placeholder="Postcode / ZIP" wire:model="zipcode" />
                                    @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="single-input-item">
                                    <label for="ordernote">Order Note</label>
                                    <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery." wire:model="ordernote"></textarea>
                                </div>
                                <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ship_to_different" value="1" wire:model="ship_to_different">
                                        <label class="custom-control-label" for="ship_to_different">Ship to a different address?</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($ship_to_different)
                            <div class="checkout-billing-details-wrap">
                                <h2 class="mt-5">Shipping Address</h2>
                                <div class="billing-form-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label class="required">First Name</label>
                                                <input type="text" placeholder="First Name" wire:model="s_firstname" />
                                                @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label class="required">Last Name</label>
                                                <input type="text" placeholder="Last Name" wire:model="s_lastname" />
                                                @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label  class="required">Email Address</label>
                                        <input type="email" placeholder="Email Address" wire:model="s_email" />
                                        @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>

                                    <div class="single-input-item">
                                        <label class="required">Phone</label>
                                        <input type="text" placeholder="Phone" wire:model="s_phone" />
                                        @error('s_phone') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>

                                    <div class="single-input-item">
                                        <label  class="required pt-20">Street address</label>
                                        <input type="text" placeholder="Street address Line 1" wire:model="s_line1" />
                                        @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text"  placeholder="Street address Line 2 (Optional)"  wire:model="s_line2" />
                                    </div>

                                    <div class="single-input-item">
                                        <label class="required">Town / City</label>
                                        <input type="text" placeholder="Town / City" wire:model="s_city" />
                                        @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>

                                    <div class="single-input-item">
                                        <label class="required">Province</label>
                                        <input type="text" placeholder="Province" wire:model="s_province" />
                                        @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>

                                    <div class="single-input-item">
                                        <label class="required">Postcode / ZIP</label>
                                        <input type="text" placeholder="Postcode / ZIP" wire:model="s_zipcode" />
                                        @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details mt-md-26 mt-sm-26">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content mb-sm-4">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::instance('cart')->content() as $item)
                                                <tr>
                                                    <td><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->name}}<strong> × {{$item->qty}}</strong></a></td>
                                                    <td>${{$item->subtotal}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><strong>${{Cart::instance('cart')->subtotal()}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="flatrate">Flat Rate: $70.00</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="freeshipping">Free Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                @if (Session::has('checkout'))*
                                                    <td><strong>${{Session::get('checkout')['total']}}</strong></td>
                                                @endif
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cashon" name="paymentmethod" value="cod" class="custom-control-input" checked wire:model="payementmode" />
                                            <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                        </div>
                                        @if ($payementmode == "cod")
                                            <div class="payment-method-details mb-20 mt-20 ms-20 ml-20" data-method="cod" style="background-color: #f1f1f1;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        @endif
                                        <div class="custom-control custom-radio mt-20">
                                            <input type="radio" id="paypalpayment" name="paymentmethod" value="card" class="custom-control-input" wire:model="payementmode" />
                                            <label class="custom-control-label" for="paypalpayment">Paypal</label>
                                        </div>
                                        @if ($payementmode == "card")
                                            <div class="payment-method-details mb-20 mt-20 ml-20" data-method="card" style="background-color: #f1f1f1;">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        @endif
                                    </div>
                                    @error('payementmode') <span class="text-danger">{{$message}}</span> @enderror
                                    <div class="summary-footer-area mt-20">
                                        {{-- <div class="custom-control custom-checkbox mb-14">
                                            <input type="checkbox" class="custom-control-input" id="terms"/>
                                            <label class="custom-control-label" for="terms">I have read and agree to the website <a
                                                href="index.html">terms and conditions.</a></label>
                                        </div> --}}
                                        <button type="submit" class="check-btn sqr-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- checkout main wrapper end -->
</div>
