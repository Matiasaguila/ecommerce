<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;

class CreateOrder extends Component
{
    public $envio_type = 1 ;
    public $districts =[], $cities=[];
    public $departments, $address,$reference ;
    public $department_id = '', $city_id = '', $district_id = '';

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}