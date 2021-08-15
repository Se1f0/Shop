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
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                            <h3>All Categories</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Slug</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($categories as $category)
                                                            <tr>
                                                                <td>{{$category->id}}</td>
                                                                <td>{{$category->name}}</td>
                                                                <td>{{$category->slug}}</td>
                                                                <td>
                                                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" class="btn btn-secondary mr-10"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a href="#" onclick="confirm('Are you sure,You want to delete this category?') || event.stopImmediatePropagation()" class="btn btn-danger" wire:click.prevent="deleteCategory({{$category->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <a href="{{route('admin.addcategory')}}" class="btn btn-success mb-10" role="button">Add New</a>
                                                <div class="mb-50 mt-20">
                                                    {{$categories->links('pagination-links')}}
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
