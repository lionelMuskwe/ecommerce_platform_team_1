<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function sign(Request $request){
        return view("general/signup");
    }

    public function log(Request $request){
        return view("general/login");
    }

    public function loginRequest(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = \DB::table('users')->where(['username'=>$username, 'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
            echo "Login Successfull";
        }
        else
        {
            echo "Login Failed!";
        }
    }

    public function show(){
        $data= User::all();
        return view('admins/userspage', ['users'=>$data]);
    }
}
