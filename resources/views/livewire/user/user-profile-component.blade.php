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
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
                                            <h3>
                                                <div class="row">
                                                    <div class="col-10">My Profile</div>
                                                    <div class="col"><a href="{{route('user.editprofile')}}" class="btn btn-danger" role="button">Update Profile</a></h3></div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @if ($user->profile->image)
                                                        <img src="{{asset('assets/img/profile')}}/{{$user->profile->image}}" alt="Profile Image" width="100%">
                                                    @else
                                                        <img src="{{asset('assets/img/profile/default.png')}}" alt="Default Profile Image" width="100%">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <p><b>Name: </b>{{$user->name}}</p>
                                                    <br>
                                                    <p><b>Email: </b>{{$user->email}}</p>
                                                    <br>
                                                    <p><b>Phone: </b>{{$user->profile->mobile}}</p>
                                                    <hr>
                                                    <p><b>Line1: </b>{{$user->profile->line1}}</p>
                                                    <p><b>Line2: </b>{{$user->profile->line2}}</p>
                                                    <br>
                                                    <p><b>City: </b>{{$user->profile->city}}</p>
                                                    <p><b>Province: </b>{{$user->profile->province}}</p>
                                                    <p><b>Zip Code: </b>{{$user->profile->zipcode}}</p>
                                                    <br>
                                                    <p><b>Country: </b>Algeria</p>
                                                    <br>
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

    {{-- <div>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profile
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            @if ($user->profile->image)
                                <img src="{{asset('assets/img/profile')}}/{{$user->profile->image}}" alt="Profile Image" width="100%">
                            @else
                                <img src="{{asset('assets/img/profile/default.png')}}" alt="Default Profile Image" width="100%">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b>{{$user->name}}</p>
                            <p><b>Email: </b>{{$user->email}}</p>
                            <p><b>Phone: </b>{{$user->profile->mobile}}</p>
                            <hr>
                            <p><b>Line1: </b>{{$user->profile->line1}}</p>
                            <p><b>Line2: </b>{{$user->profile->line2}}</p>
                            <p><b>City: </b>{{$user->profile->city}}</p>
                            <p><b>Province: </b>{{$user->profile->province}}</p>
                            <p><b>Country: </b>Algeria</p>
                            <p><b>Zip Code: </b>{{$user->profile->zipcode}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
