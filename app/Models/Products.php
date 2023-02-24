<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'subcategory_id',
        'brand_id',
        'quantity',
    ];
    //protected $guarded = ['id', 'created_at', 'updated_at'];
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
    public function brand()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Category::class)->withPivot('quantity');
    }
    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }


}
