<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Livewire\Admin\EditProduct;
use Illuminate\Support\Facades\Route;
use App\Http\livewire\Admin\ShowProducts;
use App\Http\livewire\Admin\CreateProduct;
use App\Http\livewire\Admin\ShowCategory;
use App\Http\livewire\Admin\BrandComponent;
use App\Http\Controllers\Admin\OrderController;
use App\Http\livewire\Admin\DepartmentComponent;
use App\Http\livewire\Admin\ShowDepartment;
use App\Http\livewire\Admin\ShowCity;
use App\Http\livewire\Admin\UserComponent;





Route::get('/', ShowProducts::class)->name('admin.index');
Route::get('products/{product}/edit', EditProduct::class)->name('admin.products.edit');
Route::get('products/create', CreateProduct::class)->name('admin.products.create');
Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('categories/{category}', ShowCategory::class)->name('admin.categories.show');
Route::get('brands', BrandComponent::class)->name('admin.brands.index');
Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::get('departments', DepartmentComponent::class)->name('admin.departments.index');
Route::get('cities/{city}', ShowCity::class)->name('admin.cities.show');
Route::get('departments/{department}', ShowDepartment::class)->name('admin.departments.show');
Route::get('users', UserComponent::class)->name('admin.users.index');

Route::post('product/{product}/files', [ProductController::class, 'files'])->name('admin.products.files');
Route::post('product/{product}/images', [ProductController::class, 'images'])->name('admin.products.images');
