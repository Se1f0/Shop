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
                                <li class="breadcrumb-item active" aria-current="page">Change My Password</li>
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
                                        @if (Session::has('password_succes'))
                                            <div class="alert alert-success" role="alert">{{Session::get('password_succes')}}</div>
                                        @endif
                                        @if (Session::has('password_error'))
                                            <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>Change Password</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="changePassword">
                                                    <div class="single-input-item">
                                                        <label for="current-password" class="required">Current Password</label>
                                                        <input class="form-control" type="password" id="current-password" placeholder="Current Password" autofocus wire:model="current_password" />
                                                        @error('current_password')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="new-password" class="required">New Password</label>
                                                        <input class="form-control" type="password" id="new-password" placeholder="New Password" wire:model="password" />
                                                        @error('password')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="confirm-password" class="required">Confirm Password</label>
                                                        <input class="form-control" type="password" id="confirm-password" placeholder="Confirm Password" wire:model="password_confirmation" />
                                                        @error('password_confirmation')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn" type="submit">Update</button>
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
