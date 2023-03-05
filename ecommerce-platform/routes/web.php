<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Models\User;
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

//this creates a new route that maps to the 'show' method in the 'EmployeeProfileController'
Route::get('/employee/{id}', 'EmployeeProfileController@show')->name('employee.show');
Route::get('/employees/{id}', [EmployeeProfileController::class, 'show']);


// Employee view all all customer profile
Route::get('/customers/{id}', 'CustomerController@show')->name('customers.show');
Route::get('/customer-profiles', 'CustomerProfileController@index');

// Homepage Route
Route::get("/home", [HomeController::class, "home"]);

// Below is an example of how to use middleware to protect a route
// Route::get("/",[HomeController::class, "home"])->middleware('auth')->name('home'); // if they enter domain name only
Route::get("/", [HomeController::class, "home"])->name("home"); // if they enter domain name only

//Admin Homepage Route
Route::get('/admin-home', [HomeController::class, 'adminhome'])->name('admin-home');

//Admin Add-Employee route
Route::get("/admin-add-employee", [HomeController::class, "adminAddEmployeePage"])->name("admin-add-employee");

Route::post("/admin-add-employee", [HomeController::class, "adminAddEmployee"])->name("admin-add-employee-submit");

//Admin Add-Product route
Route::get("/admin-add-product", [HomeController::class, "adminAddProductPage"])->name("admin-add-product");
Route::post("/admin-add-product", [HomeController::class, "adminAddProduct"])->name("admin-add-product-submit");

//Employee Homepage Route
Route::get("/employee-home", [HomeController::class, "employeehome"])->name("employee-home");

// About-us Route
Route::get("/about-us", [HomeController::class, "about"])->name("about-us");

// Contact-us Route
Route::get("/contact-us", [HomeController::class, "contact"])->name("contact-us");

//Product Route
Route::get("/multiple-products", [ProductController::class, "product"])->name("multiple-products");

//Product added to cart Route
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->middleware('auth');

//Remove Item from cart
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name("remove-from-cart");

//Detailed Product Route
Route::get("/detailed-product", [ProductController::class, "detailedProduct"])->name("detailed-product");

//SignUp Route
Route::get("/signup", [UserController::class, "sign"])->name("signup");

//Login Route
Route::get("/login", [UserController::class, "log"])->name("login");

//Sign Out Route
Route::get("/signout", [UserController::class, "signout"])->name("signout");

Route::post("/loginRequest", [UserController::class, "loginRequest"])->name("loginRequest");

// //Basket Route
Route::get("/user-basket", [CartController::class, "showCart"])->name("basket");
Route::get('/basket', function () {
    return view('general/user-basket');
});

//Users Post request

Route::post("/signupRequest", [UserController::class, "signupRequest"])->name("signupRequest");



//Route for showing the list of users
Route::get('userspage', [UserController::class, 'show'])->name("userspage");

//Route for showing list of products
Route::get('products-page', [ProductController::class, 'showProducts'])->name("showProducts");

Route::get('details/{id}', [ProductController::class, 'detail'])->name('product.detail');
