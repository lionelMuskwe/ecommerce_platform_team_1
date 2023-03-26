<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\OrderDetail;

class OrderItemController extends Controller
{
    //
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
                $order->total = 0;
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

                cart::where('user_id', '=', $id)->delete();

                // Todo: assign random number to current order
                return view("customers/confirmation-page", compact('user', 'order'));
            } else {
                return redirect('login');
            }
        }
    }
}