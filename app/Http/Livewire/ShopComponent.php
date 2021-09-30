<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    public $sorting;

    public function mount() {
        $this->sorting = "default";
    }
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    use WithPagination;

    public function render()
    {
        if ($this->sorting == 'date') {
            $products = Product::orderBy('created_at','DESC')->paginate(12);
        }
        elseif ($this->sorting == "price") {
            $products = Product::orderBy('regular_price','ASC')->paginate(12);
        }
        elseif ($this->sorting == "price-desc") {
            $products = Product::orderBy('regular_price','DESC')->paginate(12);
        }
        elseif ($this->sorting == "name") {
            $products = Product::orderBy('name','ASC')->paginate(12);
        }
        elseif ($this->sorting == "name-desc") {
            $products = Product::orderBy('name','DESC')->paginate(12);
        }
        else {
            $products = Product::paginate(12);
        }
        $product_count = Product::count();
        $pages = ceil($product_count/12);

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return view('livewire.shop-component',['products' => $products,'count' => $product_count,'n_pages' => $pages,'pages' => $pages])->layout("layouts.base");
    }
}
