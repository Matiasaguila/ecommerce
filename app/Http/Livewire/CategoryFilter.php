<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category,$subcategoria,$marca;

    public function render()
    {
        $products = $this->category
            ->products()
            ->where('status', 2)
            ->paginate(20);
        return view('livewire.category-filter', compact('products'));
    }
    public function limpiar()
    {
        $this->reset(['subcategoria', 'marca']);
    }
}
