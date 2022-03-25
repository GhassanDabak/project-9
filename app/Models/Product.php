<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'name',
        'description',
        'price',
        'image',
        'img_alt',
        'discount',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(50)
            ->create();
    }
}
