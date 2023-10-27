<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarShopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'products',
        'user_id',
        'quantidade',
        'valor',
    ];
}
