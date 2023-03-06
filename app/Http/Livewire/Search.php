<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;




class Search extends Component
{
    public $search;
    public $open = false;

    public function updatedSearch($value)
    {
        $value ? $this->open = true : $this->open = false;
    }
    public function render()
    {

        $products = Product::where('name', 'LIKE', "%{$this->search}%")->get();

        return view('livewire.search', compact('products'));
    }
}
