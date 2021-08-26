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
                                <li class="breadcrumb-item" aria-current="page"><a href="{{route('user.orders')}}">My Orders</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{route('user.orderdetails',['order_id' => $order_item_id])}}">Order Details</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>Add review for</h3>
                                            <form action="#" class="review-form" wire:submit.prevent="addReview">
                                                    <div class="cart-table table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th class="pro-thumbnail">Thumbnail</th>
                                                                <th class="pro-title">Product</th>
                                                                <th class="pro-price">Price</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pro-thumbnail"><a href="{{route('product.details',['slug'=>$orderItem->product->slug])}}"><img class="img-fluid" src="{{asset('assets/img/product')}}/{{$orderItem->product->image}}"
                                                                                                                alt="Product"/></a></td>
                                                                    <td class="pro-title">
                                                                        <a href="{{route('product.details',['slug'=>$orderItem->product->slug])}}">{{$orderItem->product->name}}</a>
                                                                    </td>
                                                                    @if ($orderItem->product->sale_price > 0)
                                                                        <td class="pro-price"><span>${{$orderItem->product->sale_price}}</span></td>
                                                                    @else
                                                                        <td class="pro-price"><span>${{$orderItem->product->regular_price}}</span></td>
                                                                    @endif
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                <div class="form-group row mt-20">
                                                    <div class="col">
                                                        <div class="comment-form-rating">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Your Rating</label>
                                                            <p class="stars">
                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating" >
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating" >
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating" >
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating" >
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating" >
                                                                @error('rating')
                                                                    <span class="text-danger ml-10">{{$message}}</span>
                                                                @enderror
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                        <textarea class="form-control" wire:model="comment" ></textarea>
                                                        @error('comment')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                        {{-- <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div> --}}
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="sqr-btn" type="submit">Submit</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</div>
