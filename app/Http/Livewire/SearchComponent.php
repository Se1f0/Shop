<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    public $sorting;
    public $search;

    public function mount() {
        $this->sorting = "default";
        $this->fill(request()->only('search'));
    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;

    public function render()
    {
        if ($this->sorting == 'date') {
            $products = Product::where('name','like','%'.$this->search .'%')->orderBy('created_at','DESC')->paginate(12);
        }
        elseif ($this->sorting == "price") {
            $products = Product::where('name','like','%'.$this->search .'%')->orderBy('regular_price','ASC')->paginate(12);
        }
        elseif ($this->sorting == "price-desc") {
            $products = Product::where('name','like','%'.$this->search .'%')->orderBy('regular_price','DESC')->paginate(12);
        }
        elseif ($this->sorting == "name") {
            $products = Product::where('name','like','%'.$this->search .'%')->orderBy('name','ASC')->paginate(12);
        }
        elseif ($this->sorting == "name-desc") {
            $products = Product::where('name','like','%'.$this->search .'%')->orderBy('name','DESC')->paginate(12);
        }
        else {
            $products = Product::where('name','like','%'.$this->search .'%')->paginate(12);
        }
        $product_count = Product::where('name','like','%'.$this->search .'%')->count();
        $pages = ceil($product_count/12);
        return view('livewire.search-component',['products' => $products,'count' => $product_count,'n_pages' => $pages])->layout("layouts.base");
    }
}
