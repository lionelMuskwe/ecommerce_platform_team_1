<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [

        "user_id",
        "order_items_id",
        "total",
        "status",
        "confirmation_id",
        "payment_id"
    ];
}
