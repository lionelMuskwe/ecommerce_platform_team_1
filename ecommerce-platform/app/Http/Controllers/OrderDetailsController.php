<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\OrderItem;

class OrderDetailsController extends Controller
{
        public function showOrderDetails()
        {
            $orderDetails = OrderDetail::all();
            return view("admins/orderList", compact('orderDetails'));
        }

        public function detail($id)
        {

            $data = OrderItem::whereIn('order_details_id', [$id])->get();
            
            return view('admins/orderItem', ['orderItems' => $data]);
        }


}
