<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Product;

class EmployeeProfileController extends Controller
{
public function show($id)
{
    // Retrieve the employee with the specified ID using the Eloquent ORM
    $employee = Employee::findOrFail($id);

    // Retrieve the orders made by the employee using the Eloquent ORM
    $orders = Order::where('employee_id', $id)->get();

    // Retrieve the products that the employee has ordered using the Eloquent ORM
    $productIds = $orders->pluck('product_id');
    $products = Product::whereIn('id', $productIds)->get();

    // Pass the employee, orders, and products variables to the employee profile view
    return view('employee.profile', [
        'employee' => $employee,
        'orders' => $orders,
        'products' => $products,
    ]);
}
}