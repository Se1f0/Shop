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
                                <li class="breadcrumb-item"><a href="{{route('admin.products')}}">Products</a></li>
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
                                            <h3>Add new Product</h3>
                                            <div class="account-details-form">
                                                <form wire:submit.prevent="addProduct">
                                                    <div class="single-input-item">
                                                        <label for="product-name" class="required">Product name</label>
                                                        <input class="form-control" type="text" id="product-name" placeholder="Product name" wire:model="name" wire:keyup="generateslug" required autofocus/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="product-slug" class="required">Product slug</label>
                                                        <input class="form-control" type="text" id="product-slug" placeholder="Product slug" wire:model="slug" required/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="short-description" class="required">Short Description</label>
                                                        <textarea class="form-control" name="short-description" id="short-description" cols="30" rows="3" placeholder="Short Description" wire:model="short_description"></textarea>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="description" class="required">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3" placeholder="Description" wire:model="description"></textarea>
                                                    </div>
                                                    <div class="single-input-item" class="required">
                                                        <label for="regular-price" class="required">Regular price</label>
                                                        <input class="form-control" type="text" id="regular-price" placeholder="Regular price" wire:model="regular_price" required/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="sale-price">Sale price</label>
                                                        <input class="form-control" type="text" id="sale-price" placeholder="Sale price" wire:model="sale_price"/>
                                                    </div>
                                                    <div class="single-input-item" class="required">
                                                        <label for="SKU" class="required">SKU</label>
                                                        <input class="form-control" type="text" id="SKU" placeholder="SKU" wire:model="SKU" required/>
                                                    </div>
                                                    <div class="single-input-item" class="required">
                                                        <label for="stock" class="required">Stock</label>
                                                        <select class="form-control" name="stock" id="stock" wire:model="stock_status" required>
                                                            <option value="instock">InStock</option>
                                                            <option value="outofstock">Out of Stock</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="featured" class="required">Featured</label>
                                                        <select class="form-control" name="featured" id="featured" wire:model="featured" required>
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="quantity" class="required">Quantity</label>
                                                        <input class="form-control" type="text" id="quantity" placeholder="Quantity" wire:model="quantity" required/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="product-image" class="required">Product Image</label>
                                                        <input class="form-control form-control-lg" type="file" id="product-image" wire:model="image" class="input-file" required/>
                                                        @if ($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="120"/>
                                                        @endif
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="category" class="required">Category</label>
                                                        <select class="form-control" name="category" id="category" wire:model="category_id" required>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
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
