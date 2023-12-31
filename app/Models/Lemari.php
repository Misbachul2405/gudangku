<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Lemari extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    protected function image(): Attribute
    {
        return Attribute::make ( 
            get: fn($image)=> asset('storage/lemari/' .$image),);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
