<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Category;

class CreateCategory extends Component
{
    use WithFileUploads;
    public $brands,$categories, $image;
    public $category, $editImage;
    protected $listeners = ['delete'];

    public $createForm = [
        'name' => null,
        'slug' => null,
        'icon' => null,
        'image' => null,
        'brands' => [],
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
        'slug' => null,
        'icon' => null,
        'image' => null,
        'brands' => [],
    ];
    protected $rules = [
        'createForm.name' => 'required',
        'createForm.slug' => 'required|unique:categories,slug',
        'createForm.icon' => 'required',
        'createForm.image' => 'required|image|max:1024',
        'createForm.brands' => 'required',
    ];
    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
        'createForm.icon' => 'icono',
        'createForm.image' => 'imagen',
        'createForm.brands' => 'marcas',
    ];
    public function updatedCreateFormName($value)
    {
        $this->createForm['slug'] = Str::slug($value);
    }
    public function mount()
    {
        $this->getBrands();
        $this->getCategories();
        $this->image=1;
    }
    public function getCategories()
    {
        $this->categories = Category::all();
    }
    public function getBrands()
    {
        $this->brands = Brand::all();
    }
    public function save()
    {
            $this->validate();
        $image = $this->createForm['image']->store('categories', 'public');
        $category = Category::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'icon' => $this->createForm['icon'],
            'image' => $image
        ]);
        $category->brands()->attach($this->createForm['brands']);
        $this->reset('createForm');
        $this->image = 2;
        $this->reset('createForm');
$this->getCategories();
$this->emit('saved');

    }

    public function delete(Category $category)
    {
        $category->brands()->detach();
        $category->delete();
        $this->getCategories();
    }

    public function edit(Category $category)
    {
        $this->image = rand();
        $this->reset('editImage');
        $this->category = $category;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $category->name;
        $this->editForm['slug'] = $category->slug;
        $this->editForm['icon'] = $category->icon;
        $this->editForm['image'] = $category->image;
        $this->editForm['brands'] = $category->brands->pluck('id');
    }


    public function render()
    {
        return view('livewire.admin.create-category');
    }
}
