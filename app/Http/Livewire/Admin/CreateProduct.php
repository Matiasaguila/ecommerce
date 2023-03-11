<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Container\Container;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Subcategory;

class CreateProduct extends Component
{
    public $name, $slug, $description, $price, $stock, $status;
    public $categories, $subcategories=[],$brands=[];

    public $category_id = '', $subcategory_id = '', $brand_id = '';
    public function mount()
    {
        $this->categories=Category::all();
    }
    public function updatedCategoryId($value)
    {
        $this->subcategories = Subcategory::where('category_id', $value)->get();
        $this->brands = Brand::whereHas('categories', function(Builder $query) use ($value) {
            $query->where('category_id', $value);
        })->get();
        $this->reset('subcategory_id', 'brand_id');
    }
    public function updatedName($value){
        $this->slug = Str::slug($value);
    }

    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
