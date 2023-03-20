<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {

        $user= User::paginate();
        return view('livewire.admin.user-component',compact('user'))->layout('layouts.admin');
    }
}
