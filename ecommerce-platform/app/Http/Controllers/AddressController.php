<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    function index(Request $request)
    {
        if (Auth::id()) {
            $user = auth()->user();
            return view('customers.delivery-details');
        } else {
            return redirect()->route('login');
        }
    }

    function addAddress(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            $address = new Address();

            $address->address_line_1 = $request->input('street-address');
            $address->address_line_2 = $request->input('street-address2');
            $address->city = $request->input('city');
            $address->postcode = $request->input('postcode');
            $address->delivery_instructions = $request->input('delivery-instructions');
            $address->user_id = $user->id;

            $address->save();

            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }
}
