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
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                                            <h3>Settings</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="saveSettings">
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Email</label>
                                                        <input class="form-control" type="email" id="email" placeholder="Email" wire:model="email" autofocus/>
                                                        @error('email')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="phone" class="required">Phone</label>
                                                        <input class="form-control" type="text" id="phone" placeholder="Phone" wire:model="phone"/>
                                                        @error('phone')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="phone2" class="required">Phone2</label>
                                                        <input class="form-control" type="text" id="phone2" placeholder="Phone2" wire:model="phone2"/>
                                                        @error('phone2')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="address" class="required">Address</label>
                                                        <input class="form-control" type="text" id="address" placeholder="Address" wire:model="address"/>
                                                        @error('address')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="map" class="required">Map</label>
                                                        <input class="form-control" type="text" id="map" placeholder="Map" wire:model="map"/>
                                                        @error('map')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="twitter" class="required">Twitter</label>
                                                        <input class="form-control" type="text" id="twitter" placeholder="Twitter" wire:model="twitter"/>
                                                        @error('twitter')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="facebook" class="required">Facebook</label>
                                                        <input class="form-control" type="text" id="facebook" placeholder="Facebook" wire:model="facebook"/>
                                                        @error('facebook')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="youtube" class="required">Youtube</label>
                                                        <input class="form-control" type="text" id="youtube" placeholder="Youtube" wire:model="youtube"/>
                                                        @error('youtube')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="instagram" class="required">Instagram</label>
                                                        <input class="form-control" type="text" id="instagram" placeholder="Instagram" wire:model="instagram"/>
                                                        @error('instagram')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn" type="submit">Save</button>
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
