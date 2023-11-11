<?php

namespace App\Models;

use Illuminate\Enums\OrderStatus;
use Illuminate\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable= ['user_id', 'quantity', 'status', 'image', 'unit', 'name'];

    protected $casts = [ 'status'=> OrderStatus::class];

    protected function image(): Attribute
    {
        return Attribute::make ( get: fn($image) => asset('storage/orders/'.$image),);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
