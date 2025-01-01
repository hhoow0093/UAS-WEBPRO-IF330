<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->query('product_name'); 

        if ($searchTerm) {
         
            $categories = Category::with(['products' => function ($query) use ($searchTerm) {
                $query->where('nama', 'LIKE', "%{$searchTerm}%");
            }])->get();

            $isSearch = true;
        } else {
            $categories = Category::with('products')->get();
            $isSearch = false;
        }

        return view('components.product-page', [
            'categories' => $categories,
            'title' => "Products",
            'searchTerm' => $searchTerm,
            'isSearch' => $isSearch,
        ]);
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
            'price' => 'integer',
            'featured' => 'required|boolean',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $path = $request->file('gambar')->storePublicly('gambars', 'public');
        $category_id = Category::where('name', $request->kategori)->first();

        $product = new Product();
        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->price = $request->price;
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
            'price' => 'integer',
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
        $product->price = $request->price;
        $product->featured = $request->featured;
        $product->save();

        return redirect(route('admin.products'))->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product, string $id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete($product->gambar);
        $product->delete();

        return redirect(route('admin.products'))->with('success', 'Product deleted successfully!');
    }

    public function destroyCategory(Product $product, string $id)
    {
        $product = Category::findOrFail($id);
        Storage::disk('public')->delete($product->image);
        $product->delete();

        return redirect(route('admin.products'))->with('success', 'Category deleted successfully!');
    }


}

