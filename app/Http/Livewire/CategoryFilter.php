<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category,$subcategoria,$marca;

    public $view = 'grid';
    public $queryString = ['subcategoria', 'marca'];
    public function limpiar()
    {
        $this->reset(['subcategoria', 'marca','page']);
    }
    public function updatedSubcategoria()
    {
        $this->resetPage();
    }
    public function updatedMarca()
    {
        $this->resetPage();
    }

    public function render()
    {
        /*$products = $this->category
            ->products()
            ->where('status', 2)
            ->paginate(20);*/
        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query){
            $query->where('id', $this->category->id);
        });

        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('slug', $this->subcategoria);
            });
        }

        if ($this->marca) {
            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query){
                $query->where('name', $this->marca);
            });
        }


        $products=$productsQuery->paginate(20);





        return view('livewire.category-filter', compact('products'));
    }

}
