<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'img_alt'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }

     /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(50)
            ->create();
    }
}
