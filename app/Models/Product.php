<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'supplier_id', 'name', 'slug', 'description', 'quantity', 'image', 'unit'
    ];

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
