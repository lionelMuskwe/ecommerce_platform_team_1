<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    //
    public function show(Request $request)
    {
        $user = $request->user();
        // Todo: generate random 13 digit order number
        // Todo: assign random number to current order
        return view("customers/confirmation-page", compact('user'));
    }
}