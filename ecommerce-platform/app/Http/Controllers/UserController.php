<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function sign(Request $request)
    {
        return view("general/signup");
    }

    public function log(Request $request)
    {
        return view("general/login");
    }


    public function signupRequest(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 0,
        ]);
        Auth()->attempt($request->only('email', 'password'));
        return redirect("/");
    }

    public function loginRequest(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            "password" => 'required',
        ]);


        if (!Auth::attempt($request->only('username', 'password'))) {
            return back()->with('status', 'Username or password incorrect');
        }

        $user = Auth::user();

        if ($user->role == 2) {
            $request->session()->regenerate();
            return redirect()->route('admin-home', compact('user'));
        }

        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function show()
    {
        $data = User::all();
        return view('admins/userspage', ['users' => $data]);
    }
}
