<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This controller is used to control the home page

    public function home(Request $request){
        return view("customers/homepage");
    }

    public function about(Request $request){
        return view("customers/about-us");
    }

    public function contact(Request $request){
        return view("customers/contact-us");
    }

    public function adminhome(Request $request){
        return view("admins/homepage");
    }

    public function employeehome(Request $request){
        return view("employees/homepage");
    }
}
