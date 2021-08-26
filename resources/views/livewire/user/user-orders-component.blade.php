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
                                <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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
                                            <h3>All Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
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
                                                                    <a href="{{route('user.orderdetails',['order_id' => $order->id])}}" class="btn btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{-- <a href="{{route('admin.addcategory')}}" class="btn btn-success mb-10" role="button">Add New</a> --}}
                                                <div class="mb-50 mt-20">
                                                    {{$orders->links('pagination-links')}}
                                                </div>
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
