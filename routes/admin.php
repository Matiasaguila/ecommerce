<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Livewire\Admin\EditProduct;
use Illuminate\Support\Facades\Route;
use App\Http\livewire\Admin\ShowProducts;
use App\Http\livewire\Admin\CreateProduct;




Route::get('/', ShowProducts::class)->name('admin.index');
Route::get('products/{product}/edit', EditProduct::class)->name('admin.products.edit');
Route::get('products/create', CreateProduct::class)->name('admin.products.create');
Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');


Route::post('product/{product}/files', [ProductController::class, 'files'])->name('admin.products.files');
