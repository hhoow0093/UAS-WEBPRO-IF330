<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('components.product-page', ['categories' => $categories, 'title' => "Products"]);
    }

    /**
     * Show the form for creating a new resource.
     * Accepts the category parameter from the route.
     */
    public function create($categories)
    {
        return view('products.create', ['category' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'deskripsi' => 'required|max:200',
            'kategori' => 'required|max:30',
            'featured' => 'required|boolean',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $path = $request->file('gambar')->storePublicly('gambars', 'public');
        $category_id = Category::where('name', $request->kategori)->first();

        $product = new Product();
        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->category_id = $category_id->id;
        $product->featured = $request->featured;
        $product->gambar = $path;
        $product->save();

        return redirect(route('admin.products'))->with('success', 'Product created successfully!');
    }

    // public function show(Product $product, string $id)
    // {
    //     $product = Product::findOrFail($id);
    //     $gambar = Storage::url($product->gambar);

    //     return view('products.show', ['product' => $product, 'gambar' => $gambar]);
    // }

    public function edit(Product $product, string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product, string $id)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'deskripsi' => 'required|max:200',
            'featured' => 'required|boolean',
            'gambar' => 'image|mimes:jpeg,png,jpg',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->storePublicly('gambars', 'public');
            $product->gambar = $path;
        }

        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->featured = $request->featured;
        $product->save();

        return redirect(route('admin.products'))->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product, string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(route('admin.products'))->with('success', 'Product deleted successfully!');
    }

    public function destroyCategory(Product $product, string $id)
    {
        $product = Category::findOrFail($id);
        $product->delete();

        return redirect(route('admin.products'))->with('success', 'Category deleted successfully!');
    }

    public function toggleInterest(Product $product)
{
    $user = auth()->user();

    if ($user->products->contains($product->id)) {
        $user->products()->detach($product->id); // Remove the relation
    } else {
        $user->products()->attach($product->id); // Add the relation
    }

    return back()->with('success', 'Product interest updated!');
}

}

