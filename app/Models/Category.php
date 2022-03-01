<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

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
