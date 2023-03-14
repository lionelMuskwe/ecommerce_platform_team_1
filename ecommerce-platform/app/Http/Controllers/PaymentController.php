<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

       public function showPage(Request $request){
            return view('customers/payment');
       }

       public function processPayment(Request $request){
        return redirect()->route('confirmation-page');
       }
}
