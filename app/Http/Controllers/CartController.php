<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function Buy(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
    
        $product = Product::findOrFail($id);
        $user = auth()->user();
        $existingProduct = $user->products()->wherePivot('product_id', $product->id)->first();
        
        if ($existingProduct) {
            $newQuantity = $existingProduct->pivot->qty + $request->quantity;
            $user->products()->updateExistingPivot($product->id, ['qty' => $newQuantity]);
        } else {
            $user->products()->attach($product->id, ['qty' => $request->quantity]);
        }
            
        $product->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {
        $user = auth()->user();

        $cartItems = $user->products()->get();

        $total = $cartItems->sum(function ($item) {
            return $item->price * $item->pivot->qty;
        });

        return view('components.cart.index', [
            'cartItems' => $cartItems,
            'total' => $total,
        ]);
    }

    public function remove($id)
    {
        $user = auth()->user();
        $user->products()->detach($id);

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }

}
