<div class="header-mini-cart">
    <div class="mini-cart-btn">
        <i class="fa fa-shopping-cart"></i>
        <span class="cart-notification">{{Cart::instance('cart')->count()}}</span>
    </div>
    <div class="cart-total-price">
        <span>total</span>
        ${{Cart::instance('cart')->total()}}
    </div>
    <ul class="cart-list">
        @if (Cart::instance('cart')->count() > 0)
            @foreach (Cart::instance('cart')->content() as $item)
                <li>
                    <div class="cart-img">
                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img src="{{ asset('assets/img/product') }}/{{$item->model->image}}" alt=""></a>
                    </div>
                    <div class="cart-info">
                        <h4><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->name}}<strong> × {{$item->qty}}</strong></a></h4>
                        <span>${{$item->subtotal}}</span>
                    </div>
                    {{-- <div class="del-icon">
                        <i class="fa fa-times"></i>
                    </div> --}}
                </li>
            @endforeach
            <li class="mini-cart-price">
                <span class="subtotal">subtotal : </span>
                <span class="subtotal-price">${{Cart::instance('cart')->total()}}</span>
            </li>
            <li class="checkout-btn">
                <a href="\cart">Go to cart</a>
            </li>
        @else
            <p>No item in cart</p>
        @endif
    </ul>
</div>
