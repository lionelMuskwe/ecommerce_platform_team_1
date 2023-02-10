<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        "name",
        "description",
        "size",
        "price",
        "image",
        "inventory_id",
        "category_id"
    ];
}
