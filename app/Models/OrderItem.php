<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'bust_circumference',
        'waistline',
        'hip_circumference',
        'shoulder_width',
        'back_length',
        'height',
        'sleeve_length',
        'arm',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
