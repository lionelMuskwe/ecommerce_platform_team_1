<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(Request $request){
<<<<<<< HEAD
        $products = Product::all();
        return view("customers/multiple-products", compact('products'));
=======
        $data = Product::all();
        return view("customers/multiple-products", ['products'=>$data]);
>>>>>>> c9c6258b7c0d8396c04a54921649fcf58f1d37aa
    }

    public function detailedProduct(Request $request){
        return view("customers/detailed-product");
    }

<<<<<<< HEAD
=======
    public function detail($id){
        $data = Product::find($id);
        return view('customers/detailed-product', ['products'=>$data]);
    }
>>>>>>> c9c6258b7c0d8396c04a54921649fcf58f1d37aa
}
