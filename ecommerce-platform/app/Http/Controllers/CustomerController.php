<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer-profiles', compact('customers'));
    }
}

