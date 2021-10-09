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
                                <li class="breadcrumb-item"><a href="{{route('user.profile')}}">My Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
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
                                                    <div class="col-10">
                                                        Update My Profile
                                                    </div>
                                                </div>
                                            </h3>
                                            <form wire:submit="updateProfile" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        @if($newimage)
                                                            <img src="{{$newimage->temporaryUrl()}}" alt="Profile Image" width="100%">
                                                        @elseif ($image)
                                                            <img src="{{asset('assets/img/profile')}}/{{$image}}" alt="Profile Image" width="100%">
                                                        @else
                                                            <img src="{{asset('assets/img/profile/default.png')}}" alt="Default Profile Image" width="100%">
                                                        @endif
                                                        <input type="file" class="form-control" wire:model="newimage" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single-input-item">
                                                            <label for="name" class="required">Name</label>
                                                            <input class="form-control" type="text" id="name" placeholder="Name" wire:model="name"/>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <p><b>Email: </b>{{$email}}</p>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="phone" class="required">Phone</label>
                                                            <input class="form-control" type="text" id="phone" placeholder="Phone" wire:model="mobile"/>
                                                        </div>
                                                        <hr>
                                                        <div class="single-input-item">
                                                            <label for="line1" class="required">Line1</label>
                                                            <input class="form-control" type="text" id="Line1" placeholder="Line1" wire:model="line1"/>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="line1=2" class="required">Line2</label>
                                                            <input class="form-control" type="text" id="Line2" placeholder="Line2" wire:model="line2"/>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="city" class="required">City</label>
                                                            <input class="form-control" type="text" id="city" placeholder="City" wire:model="city"/>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="province" class="required">Province</label>
                                                            <input class="form-control" type="text" id="province" placeholder="Province" wire:model="province"/>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <p><b>Country: </b>{{$country}}</p>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="zipcode" class="required">Zip Code</label>
                                                            <input class="form-control" type="text" id="zipcode" placeholder="Zip Code" wire:model="zipcode"/>
                                                        </div>

                                                        {{-- <p><b>Name: </b><input type="text" class="form-control" wire:model="name" ></p>
                                                        <p><b>Email: </b>{{$email}}</p>
                                                        <p><b>Phone: </b><input type="text" class="form-control" wire:model="mobile" ></p>
                                                        <hr>
                                                        <p><b>Line1: </b><input type="text" class="form-control" wire:model="line1" ></p>
                                                        <p><b>Line2: </b><input type="text" class="form-control" wire:model="line2" ></p>
                                                        <p><b>City: </b><input type="text" class="form-control" wire:model="city" ></p>
                                                        <p><b>Province: </b><input type="text" class="form-control" wire:model="province" ></p>
                                                        <p><b>Country: </b>Algeria</p>
                                                        <p><b>Zip Code: </b><input type="text" class="form-control" wire:model="zipcode" ></p> --}}
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <button type="submit" class="btn btn-danger">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
