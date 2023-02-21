<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(Request $request){
        $data = Product::all();
        return view("customers/multiple-products", ['products'=>$data]);
    }

    public function detailedProduct(Request $request){
        return view("customers/detailed-product");
    }
}
