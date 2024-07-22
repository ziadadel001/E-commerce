<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Validation\ValidationException;

class aviatoController extends Controller
{
    // Display the landing page with a list of products
    function landingguest()
    {
        $products = Product::take(9)->get();
        return view('index', compact('products'));
    }

    // Display the shop page with all products
    function ShowShop()
    {
        $products = Product::all();
        return view('shop-sidebar', compact('products'));
    }

    // Display a single product page
    function ShowSingleProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->color = explode(',', $product->color);
        $product->Size = explode(',', $product->Size);

        return view('product-single', compact('product'));
    }

    // Display the checkout page with products in the cart
    function ShowCheckout()
    {
        $products = session()->get('cart', []);
        return view('Checkout', compact('products'));
    }

    // Handle the checkout process and create a new order
    public function Checkout(Request $request)
    {
        $products = session()->get('cart', []);

        // Validate the request
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'user_address' => 'required|string|max:255',
            'user_post_code' => 'required|string|max:20',
            'user_city' => 'required|string|max:100',
            'user_country' => 'required|string|max:100',
            'card_number' => 'required|string|max:19',
            'card_expiry' => 'required|string|max:7',
            'card_cvc' => 'required|string|max:4',
        ]);

        // Create a new order
        $order = new Order();
        $order->name = $validatedData['full_name'];
        $order->address = $validatedData['user_address'];
        $order->zip = $validatedData['user_post_code'];
        $order->city = $validatedData['user_city'];
        $order->country = $validatedData['user_country'];
        $order->card_number = $validatedData['card_number'];
        $order->expiry = $validatedData['card_expiry'];
        $order->cvc = $validatedData['card_cvc'];
        $order->productsId = json_encode(array_column($products, 'id')); // Assuming you have a 'id' in your product array

        $order->save();

        // Clear the cart after order is placed
        session()->forget('cart');

        return redirect()->route('order.confirmation')->with('success', 'Order placed successfully!');
    }

    // Display the order confirmation page
    function confirmation()
    {
        return view('confirmation');
    }

    // Display the profile details page
    function ShowProfile()
    {
        return view('profile-details');
    }


    // Display the about page
    function ShowAbout()
    {
        return view('about');
    }

    // Display the contact page
    function ShowContact()
    {
        return view('contact');
    }
}
