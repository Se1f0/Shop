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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                    <div class="myaccount-content">
                        <h3>Summary</h3>
                        <div class="content">
                            <style>
                                .content {
                                padding-top: 40px;
                                padding-bottom: 40px;
                                }
                                .icon-stat {
                                    display: block;
                                    overflow: hidden;
                                    position: relative;
                                    padding: 15px;
                                    margin-bottom: 1em;
                                    background-color: #fff;
                                    border-radius: 4px;
                                    border: 1px solid #ddd;
                                }
                                .icon-stat-label {
                                    display: block;
                                    color: #999;
                                    font-size: 13px;
                                }
                                .icon-stat-value {
                                    display: block;
                                    font-size: 28px;
                                    font-weight: 600;
                                }
                                .icon-stat-visual {
                                    position: relative;
                                    top: 22px;
                                    display: inline-block;
                                    width: 32px;
                                    height: 32px;
                                    border-radius: 4px;
                                    text-align: center;
                                    font-size: 16px;
                                    line-height: 30px;
                                }
                                .bg-primary {
                                    color: #fff;
                                    background: #d74b4b;
                                }
                                .bg-secondary {
                                    color: #fff;
                                    background: #6685a4;
                                }

                                .icon-stat-footer {
                                    padding: 10px 0 0;
                                    margin-top: 10px;
                                    color: #aaa;
                                    font-size: 12px;
                                    border-top: 1px solid #eee;
                                }
                            </style>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                        <div class="col-xs-8 text-left">
                                            <span class="icon-stat-label ml-3 mb-3">Total Cost</span>
                                            <span class="icon-stat-value ml-3 mt-3">${{$totalCost}}</span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <i class="fa fa-dollar icon-stat-visual bg-primary ml-3 mt-3"></i>
                                        </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                        <div class="col-xs-8 text-left">
                                            <span class="icon-stat-label ml-3 mb-3">Total Purchase</span>
                                            <span class="icon-stat-value ml-3 mt-3">{{$totalPurchase}}</span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <i class="fa fa-gift icon-stat-visual bg-secondary ml-3 mt-3"></i>
                                        </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                        <div class="col-xs-8 text-left">
                                            <span class="icon-stat-label ml-3 mb-3">Total Delivered</span>
                                            <span class="icon-stat-value ml-3 mt-3">{{$totalDeliverd}}</span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <i class="fa fa-gift icon-stat-visual bg-primary ml-3 mt-3"></i>
                                        </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                        <div class="col-xs-8 text-left">
                                            <span class="icon-stat-label ml-3 mb-3">Total Canceled</span>
                                            <span class="icon-stat-value ml-3 mt-3">{{$totalCanceled}}</span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <i class="fa fa-gift icon-stat-visual bg-secondary ml-3 mt-3"></i>
                                        </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <div class="myaccount-content">
                                            <h3>Latest Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                @if ($orders->count() > 0)
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Subtotal</th>
                                                                <th>Discount</th>
                                                                <th>Tax</th>
                                                                <th>Total</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                {{-- <th>Zipcode</th> --}}
                                                                <th>Status</th>
                                                                <th>Order Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($orders as $order)
                                                                <tr>
                                                                    <td>{{$order->id}}</td>
                                                                    <td>${{$order->subtotal}}</td>
                                                                    <td>${{$order->discount}}</td>
                                                                    <td>${{$order->tax}}</td>
                                                                    <td>${{$order->total}}</td>
                                                                    <td>{{$order->firstname}}</td>
                                                                    <td>{{$order->lastname}}</td>
                                                                    <td>{{$order->phone}}</td>
                                                                    <td>{{$order->email}}</td>
                                                                    {{-- <td>{{$order->zipcode}}</td> --}}
                                                                    <td>{{$order->status}}</td>
                                                                    <td>{{$order->created_at}}</td>
                                                                    <td>
                                                                        <a href="{{route('user.orderdetails',['order_id' => $order->id])}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <h1 class="display-5 text-center text-muted mb-20">No Orders</h1>
                                                    <a href="{{route('shop')}}" class="btn btn-success mb-10" role="button">Go To Shop</a>
                                                @endif
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
