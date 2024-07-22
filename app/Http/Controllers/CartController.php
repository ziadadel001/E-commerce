<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    // Function to add a product to the cart
    public function addToCart($productId)
    {
        // Validate product ID
        $product = Product::find($productId);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Retrieve cart from session or create a new one if it doesn't exist
        $cart = session()->get('cart', []);

        // Check if the product already exists in the cart
        if (isset($cart[$productId])) {
            // Update the quantity
            $cart[$productId]['quantity'] += 1;
        } else {
            // Add the product to the cart
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'photo' => $product->photo,
                'id' => $product->id,
            ];
        }

        // Save the cart back to the session
        session()->put('cart', $cart);

        // Redirect to the shop page with a success message
        return redirect(route('Shop.create'))->with('success', 'Product added to cart successfully!');
    }

    // Function to remove a product from the cart
    public function removeFromCart($productId)
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Check if the product exists in the cart
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        // Redirect with an error message if the product is not in the cart
        return redirect()->back()->with('error', 'Product not found in cart.');
    }

    // Function to clear the cart
    public function clearCart()
    {
        // Clear the cart session
        session()->forget('cart');

        // Redirect with a success message
        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

    // Function to display the cart
    public function Cart()
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Display the cart page with the cart data
        return view('cart', compact('cart'));
    }
}
