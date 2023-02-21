<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request){
        $products = Product::all();
        return view("customers/multiple-products", compact('products'));
    }

    public function detailedProduct(Request $request){
        return view("customers/detailed-product");
    }

}
