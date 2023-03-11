<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\Admin\ShowProducts;



Route::get('/', ShowProducts::class)->name('admin.index');
Route::get('products/{product}/edit', function () {})->name('admin.products.edit');
Route::get('products/create', function () {})->name('admin.products.create');
