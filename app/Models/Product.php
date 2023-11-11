<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'supplier_id', 'name', 'slug', 'description', 'quantity', 'image', 'unit'
    ];

    protected function image(): Attribute 
    {
        return Attribute::make ( 
            get: fn($image) => asset('storage/product/' .$image),);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lemari()
    {
        return $this->belongsTo(Lemari::Class);
    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class);
    }
}
