<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Size;

class SizeProduct extends Component
{
    public $product,$name,$size;
    public $name_edit;

    public $open = false;
    protected $listeners = ['delete'];
    protected $rules = [
        'name' => 'required'
    ];
    public function save()
    {
        $this->validate();

        $this->product->sizes()->create([
            'name' => $this->name,
        ]);
        $this->product = $this->product->fresh();
        $this->reset();
    }
    public function edit(Size $size)
    {
        $this->open = true;
        $this->size = $size;
        $this->name_edit = $size->name;
    }
    public function render()
    {
        $sizes = $this->product->sizes;
        return view('livewire.admin.size-product',compact('sizes'));
    }
    public function delete(Size $size)
    {
        $size->delete();
        $this->product = $this->product->fresh();
    }
    public function update()
    {
        $this->validate([
            'name_edit' => 'required'
        ]);
        $this->size->name = $this->name_edit;
        $this->size->save();
        $this->product = $this->product->fresh();
        $this->open = false;
    }
}
