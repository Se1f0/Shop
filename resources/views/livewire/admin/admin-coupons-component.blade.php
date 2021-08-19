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
                                <li class="breadcrumb-item active" aria-current="page">All Coupons</li>
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
                                    <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>All Coupons</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                @if ($coupons->count() > 0)
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Coupon Code</th>
                                                                <th>Coupon Type</th>
                                                                <th>Coupon Value</th>
                                                                <th>Cart Value</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($coupons as $coupon)
                                                                <tr>
                                                                    <td>{{$coupon->id}}</td>
                                                                    <td>{{$coupon->code}}</td>
                                                                    <td>{{$coupon->type}}</td>
                                                                    @if ($coupon->type =='fixed')
                                                                        <td>{{$coupon->value}}$</td>
                                                                    @else
                                                                        <td>{{$coupon->value}}%</td>
                                                                    @endif
                                                                    <td>{{$coupon->cart_value}}</td>
                                                                    <td>
                                                                        <a href="{{route('admin.editcoupon',['coupon_id' => $coupon->id])}}" class="btn btn-secondary mr-10"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                        <a href="#" onclick="confirm('Are you sure,You want to delete this coupon?') || event.stopImmediatePropagation()" class="btn btn-danger" wire:click.prevent="deleteCoupon({{$coupon->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <h1 class="display-5 text-center text-muted mb-20">No Coupons</h1>
                                                @endif
                                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success mb-10" role="button">Add New</a>
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
        </div>
    </div>
</div>
