<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\Admin\ShowProducts;



Route::get('/', ShowProducts::class)->name('admin.index');