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
                                <li class="breadcrumb-item"><a href="{{route('admin.coupons')}}">All Coupons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>Add new Coupon</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="storeCoupon">
                                                    <div class="single-input-item">
                                                        <label for="coupon-code" class="required">Coupon Code</label>
                                                        <input class="form-control" type="text" id="coupon-code" placeholder="Coupon Code" wire:model="code" autofocus/>
                                                        @error('code')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="coupon-type" class="required">Coupon Type</label>
                                                        <select class="form-control" name="coupon-type" id="coupon-type" wire:model="type" >
                                                            <option value="">Select</option>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="percent">Percent</option>
                                                        </select>
                                                        @error('type')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="coupon-value" class="required">Coupon Value</label>
                                                        <input class="form-control" type="text" id="coupon-value" placeholder="Coupon Value" wire:model="value"/>
                                                        @error('value')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="cart-value" class="required">Cart Value</label>
                                                        <input class="form-control" type="text" id="cart-value" placeholder="Cart Value" wire:model="cart_value"/>
                                                        @error('cart_value')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</div>
