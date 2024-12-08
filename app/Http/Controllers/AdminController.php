<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('components.admin.admin-products', ['categories' => $categories, 'title' => "Products"]); 
    }

    public function adminIntUser()
    {   
        $users = User::with('products')->where('role', '!=', 'admin')->get();
        return view('components.admin.interested-user', compact('users'));
    }
}
