<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{

    public function calculateTotal()
    {
        $user = auth()->user();
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->quantity * $item->price;
        }
        return $total;
    }


    function addToCart(Request $request, $id)
    {

        $user = Auth::user();
        if ($user) {
            $cartItems = Cart::where('user_id', $user->id)
                ->where('product_id', $id)
                ->get();

            if ($cartItems->count() > 0) {
                // If the cart item already exists, update the quantity.
                $cartItem = $cartItems->first();
                $cartItem->quantity += $request->quantity;
                $cartItem->save();
            } else {
                // If the cart item does not exist, create a new cart item.
                $product = Product::find($id);
                $cartItem = new Cart;
                $cartItem->product_id = $product->id;
                $cartItem->user_id = $user->id;
                $cartItem->quantity = $request->quantity;
                //$cartItem->price = $product->price;
                $cartItem->save();
            }

            $total = $this->calculateTotal();

            return redirect()->back()
                ->with('message', 'Product added to Cart!')
                ->with('alert-class', 'alert-success');
        } else {
            echo ("user not authenticated");
            return redirect('login');
        }
    }



    public function showCart()
    {
        if (Auth::id()) {
            $user = auth()->user();
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
            return view('general/user-basket', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    function removeFromCart($id)
    {
        //find the cart with the same user and the same product
        $cart = cart::where('user_id', '=', Auth::user()->id)
            ->where('product_id', '=', $id)
            ->first();
        

        if($cart->quantity >1){
            // decrease the quantity of the product
            $cart->quantity = $cart->quantity - 1;
            $cart->save();
        } else {
            // delete the product from the cart
            $cart->delete();
        }

        return redirect()->back();
    }
}
