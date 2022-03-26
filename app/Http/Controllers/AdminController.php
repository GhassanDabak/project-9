<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();
        $orders = Order::all();
        return view('admin.index', compact('users','categories','products','orders'));
    }
}
