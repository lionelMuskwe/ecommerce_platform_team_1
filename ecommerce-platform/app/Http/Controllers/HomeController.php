<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    // This controller is used to control the home page

    public function home(Request $request)
    {
        $data = Product::all();
        return view("customers/homepage", ['products' => $data]);
    }

    public function about(Request $request)
    {
        return view("customers/about-us");
    }

    public function contact(Request $request)
    {
        return view("customers/contact-us");
    }

    public function adminhome(Request $request)
    {
        $user = $request->user();
        if ($user->role != 2) {
            abort(403);
        }
        return view("admins/homepage", compact('user'));
    }

    public function adminAddEmployeePage(Request $request)
    {
        return view("admins/add-employee");
    }

    public function  adminAddEmployee(Request $request)
    {
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

        return view("admins/homepage");
    }

    public function adminAddProductPage(Request $request)
    {
        return view("admins/add-product");
    }

    public function adminAddProduct(Request $request)
    {
        $product = new Product;
        $product->ISBN = $request->input('ISBN');
        $product->title = $request->input('title');
        $product->author = $request->input('author');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $request->input('image');
        $product->date_published = $request->input('date-published');
        $product->publisher = $request->input('publisher');
        $product->inventory_id = $request->input('inventory-id');
        $product->category_id = $request->input('category-id');

        $product->save();

        return redirect()->route('admin-home');
    }


    public function employeehome(Request $request)
    {
        return view("employees/homepage");
    }
}
