<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Color;


class ColorProduct extends Component
{
    public $product, $colors;
    public $color_id, $quantity ;

    protected $rules = [
        'color_id' => 'required',
        'quantity' => 'required|numeric',
    ];
    public function mount()
    {
        $this->colors = Color::all();
    }
    public function render()
    {
        return view('livewire.admin.color-product');
    }
}
