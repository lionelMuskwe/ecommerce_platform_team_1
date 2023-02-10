<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This controller is used to control the home page

    public function home(Request $request){
        return view("customers/homepage");
    }
}
