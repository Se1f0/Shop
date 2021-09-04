<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            File::delete(public_path('assets/img/product'.'/'.$product->image));
            // unlink(public_path('assets/img/product'.'/'.$product->image));
        }
        if ($product->images) {
            $images = explode(",",$product->images);
            foreach ($images as $image) {
                if ($image) {
                    File::delete(public_path('assets/img/product'.'/'.$image));
                    // unlink(public_path('assets/img/product'.'/'.$image));
                }
            }
        }
        $product->delete();
        session()->flash('message','Product "'.$product->name.'" has been deleted successfully!');
    }

    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products' => $products])->layout('layouts.base');
    }
}
