<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Carga la tienda
    public function index() {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    // Carga la vista del carrito
    public function cart() {
        return view('cart');
    }

    // Lógica para añadir productos
    public function addToCart($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', '¡Producto añadido!');
    }
}