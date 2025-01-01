<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $category = new Category();
        $category->name = $request->name;


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public'); 
            $category->image = $imagePath;
        }

        $category->save();

        return redirect()->back()->with('success', 'Category created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
            $category->image = $path;
        }

        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

}
