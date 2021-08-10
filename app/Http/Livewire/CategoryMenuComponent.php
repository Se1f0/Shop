<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryMenuComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-menu-component',['categories' => $categories]);
    }
}
