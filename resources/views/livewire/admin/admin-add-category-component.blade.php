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
                                <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">Categories</a></li>
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
                                            <h3>Add new Category</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="storeCategory">
                                                    <div class="single-input-item">
                                                        <label for="category-name" class="required">Category name</label>
                                                        <input class="form-control" type="text" id="category-name" placeholder="Category name" wire:model="name" wire:keyup="generateslug" autofocus/>
                                                        @error('name')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="category-slug" class="required">Category slug</label>
                                                        <input class="form-control" type="text" id="category-slug" placeholder="Category slug" wire:model="slug"/>
                                                        @error('slug')
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
