<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table ='product';
    protected $fillable = [
        "name",
        "description",
        "price",
        "quantity",
        "front_image",
        "inventory_id",
        "category_id"
    ];


}
