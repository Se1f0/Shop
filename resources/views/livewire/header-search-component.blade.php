<div class="header-middle-searchbox">
    <form action="{{route('product.search')}}" id="form-search-top" name="form-search-top">
        <input type="text" placeholder="Search..." name="search" value="{{$search}}">
        <button class="search-btn" form="form-search-top" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
