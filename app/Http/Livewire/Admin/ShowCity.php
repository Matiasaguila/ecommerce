<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\City;

class ShowCity extends Component
{
    public $city;
    public function mount(City $city)
    {
        $this->city = $city;
    }
    public function render()
    {
        return view('livewire.admin.show-city')->layout('layouts.admin');
    }
}
