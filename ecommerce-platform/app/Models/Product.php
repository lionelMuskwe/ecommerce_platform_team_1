<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        "ISBN",
        "title",
        "author"
        "description",
        "price",
        "image",
        "date_published",
        "publisher",
        "inventory_id",
        "category_id"
    ];
}
