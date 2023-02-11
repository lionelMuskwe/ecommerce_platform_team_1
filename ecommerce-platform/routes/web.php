<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// This function is being used for testing and displaying
// the page that has links to all other pages
Route::get('/pages', function () {
    return view('general/pages');
});


// Please note we are going to let the HomeController handle
// the homepage, about-us and contact-us pages as the would
// be no need to create a controller for each of them as they
// are static pages

// Homepage Route
Route::get("/home",[HomeController::class, "home"])->name("home");
Route::get("",[HomeController::class, "home"]); // if they enter domain name only

//Admin Homepage Route
Route::get("admin-home", [HomeController::class], "adminhome")->name("admins-home");

//Employee Homepage Route
Route::get("employee-home", [HomeController::class], "employeehome")->name("employee-home");

// About-us Route
Route::get("/about-us",[HomeController::class, "about"])->name("about-us");

// Contact-us Route
Route::get("/contact-us",[HomeController::class, "contact"])->name("contact-us");

//Product Route
Route::get("/multiple-products",[ProductController::class, "product"])->name("multiple-products");

//Detailed Product Route
Route::get("/detailed-product", [ProductController::class], "detailedProduct")->name("detailed-product");

//SignUp Route
Route::get("/signup", [UserController::class, "sign"])->name("signup");

//Login Route
Route::get("/login", [UserController::class, "log"])->name("login");



