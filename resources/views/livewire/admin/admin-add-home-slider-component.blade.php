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
                                <li class="breadcrumb-item"><a href="{{route('admin.homeslider')}}">Sliders</a></li>
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
                                            <div class="alert alert-success" role="alert" id="up">{{Session::get('message')}}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>Add new Slide</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="addSlide">
                                                    <div class="single-input-item">
                                                        <label for="title" class="required">Title</label>
                                                        <input class="form-control" type="text" id="title" placeholder="Title" wire:model="title" required autofocus/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="subtitle" class="required">Subtitle</label>
                                                        <input class="form-control" type="text" id="subtitle" placeholder="Subtitle"  wire:model="subtitle" required/>
                                                    </div>
                                                    <div class="single-input-item" class="required">
                                                        <label for="price" class="required">Price</label>
                                                        <input class="form-control" type="text" id="price" placeholder="Price" wire:model="price" required/>
                                                    </div>
                                                    <div class="single-input-item" class="required">
                                                        <label for="link" class="required">Link</label>
                                                        <input class="form-control" type="text" id="link" placeholder="Link"  wire:model="link" required/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="image" class="required">Image</label>
                                                        <input class="form-control form-control-lg" type="file" id="image" class="input-file" wire:model="image" required/>
                                                        @if ($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="120"/>
                                                        @endif
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="status" class="required">Status</label>
                                                        <select class="form-control" name="status" id="status" wire:model="status" required>
                                                            <option value="0">Inactive</option>
                                                            <option value="1">Active</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <a href="#up">
                                                            <button class="check-btn sqr-btn" type="submit">Submit</button>
                                                        </a>
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
