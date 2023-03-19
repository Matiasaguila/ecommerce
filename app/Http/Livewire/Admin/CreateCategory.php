<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;

class CreateCategory extends Component
{
    public $brands;
    public function mount()
    {
        $this->getBrands();
    }
    public function getBrands()
    {
        $this->brands = Brand::all();
    }
    public function save()
    {

    }
    public function render()
    {
        return view('livewire.admin.create-category');
    }
}
