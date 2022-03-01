<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'cat_id',
        'name',
        'description',
        'price',
        'img_url',
        'img_alt',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
