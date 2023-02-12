<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sign(Request $request){
        return view("general/signup");
    }

    public function log(Request $request){
        return view("general/login");
    }
}
