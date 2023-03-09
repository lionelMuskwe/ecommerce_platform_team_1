<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    function index(Request $request)
    {
        $address = new Address();

        $address->address_line_1 = $request->input('street-address');
        $address->address_line_2 = $request->input('street-address2');
        $address->city = $request->input('city');
        $address->postcode = $request->input('postcode');

        $address->save();

        return redirect()->route('home');
    }
}
