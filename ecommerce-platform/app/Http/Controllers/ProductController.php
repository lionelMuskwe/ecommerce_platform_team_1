<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $categories = Category::all();
        $products = Product::all();

        return view('customers/multiple-products', compact('categories', 'products'));
    }

    public function detailedProduct(Request $request)
    {
        return view("customers/detailed-product");
    }

    public function showProducts()
    {
        $products = Product::all();
        return view("admins/view-products", compact('products'));
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('customers/detailed-product', ['products' => $data]);
    }

    public function filterPage($id)
    {
        $categories = Category::all();
        $products = Product::whereIn('category_id', [$id])->get();
//         dd($products);

        return view('customers/multiple-products', compact('categories', 'products'));
    }
}
