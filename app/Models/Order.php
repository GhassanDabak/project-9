<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'total',
        'city',
        'country',
        'street',
        'firstname',
        'lastname',
        'mobile',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
