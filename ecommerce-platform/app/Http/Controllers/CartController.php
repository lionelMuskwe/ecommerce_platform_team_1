<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    function addToCart (Request $request, $id){
        $user = Auth::user();
        if ($user) {
            $product = product::find($id);
            $cart = new cart;
            $cart->product_id=$product->id;
            $cart->user_id = $user->id;
            $cart->quantity = $request->quantity;
            //$cart->price = $product->price;
            $cart->save();
        
            return redirect()->back()->with('status', 'Product added to Cart!');
        } else {
            echo("user not authenticated");
                return redirect('login');
        }
        

    }
}
