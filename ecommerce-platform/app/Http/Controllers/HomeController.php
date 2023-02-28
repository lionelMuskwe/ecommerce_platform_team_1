<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    // This controller is used to control the home page

    public function home(Request $request){
        $data = Product::all();
        return view("customers/homepage", ['products'=>$data]);
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

    public function adminAddEmployeePage(Request $request){
        return view ("admins/add-employee");
    }

    public function  adminAddEmployee(Request $request){
        $user = new user;
        $user->firstname = $request->input('fname');
        $user->lastname = $request->input('surname');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->telephone = $request->input('telephone');
        $user->role = 1;

        $user->save();

        return view ("admins/homepage");

    }

    public function employeehome(Request $request){
        return view("employees/homepage");
    }
}
