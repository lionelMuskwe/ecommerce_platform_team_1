<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderItemController extends Controller
{
    public function calculateTotal()
    {
        $user = auth()->user();
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        $total = 0;
        foreach ($cart as $item) {
            $product = Product::find($item->product_id);
            $price = $product->price;
            $total += $item->quantity * $price;
        }
        echo $total;
        return $total;
    }

    public function show(Request $request)
    {

        // Todo: generate random 13 digit order number

        {
            if (Auth::id()) {
                $user = auth()->user();
                $id = Auth::user()->id;
                $cart = cart::where('user_id', '=', $id)->get();

                $order = new OrderDetail();
                $order->user_id = $id;
                $order->total = $this->calculateTotal();
                $order->status = "Pending";
                $confirmationId = rand(10000000, 99999999);
                $order->confirmation_id = $confirmationId;
                $order->save();

                for ($i = 0; $i < count($cart); $i++) {
                    $orderItem = new OrderItem();
                    $orderItem->order_details_id = $order->id;
                    $orderItem->product_id = $cart[$i]->product_id;
                    $orderItem->quantity = $cart[$i]->quantity;
                    $orderItem->save();
                }

                // $total = $this->calculateTotal();

                cart::where('user_id', '=', $id)->delete();

                // Todo: assign random number to current order
                return view("customers/confirmation-page", compact('user', 'order'));
            } else {
                return redirect('login');
            }
        }
    }
}
