<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('product_show', ['product' => $product]);
    }

    //funkciją, kuri pridėtų produktą į pirkinių krepšelį:
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        Cart::add($product->id, $product->name, 1, $product->price);
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

}
