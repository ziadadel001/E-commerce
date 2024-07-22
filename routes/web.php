<?php

use App\Http\Controllers\aviatoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Landing page route
Route::get('/', [aviatoController::class, 'landingguest'])->name('landing.index');

// Shop page route
Route::get('/AVIATO/shop', [aviatoController::class, 'ShowShop'])->name('Shop.create');

// About page route
Route::get('/AVIATO/about', [aviatoController::class, 'ShowAbout'])->name('About.create');

// Cart page route
Route::get('/AVIATO/Cart', [CartController::class, 'Cart'])->name('Cart.create');

// Add product to cart route
Route::get('/cart/add/{product_id}', [CartController::class, 'addToCart'])->name('cart.add');

// Remove product from cart route
Route::get('/cart/remove/{product_id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Clear cart route
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Checkout page route (requires authentication)
Route::get('/AVIATO/Checkout', [aviatoController::class, 'ShowCheckout'])->middleware('auth')->name('Checkout.create');

// Process checkout route (requires authentication)
Route::post('/AVIATO/Checkout/process', [aviatoController::class, 'Checkout'])->middleware('auth')->name('Checkout.store');

// Order confirmation page route
Route::get('/AVIATO/Confirmation', [aviatoController::class, 'confirmation'])->name('order.confirmation');

// Contact page route
Route::get('/AVIATO/contact', [aviatoController::class, 'ShowContact'])->name('Contact.create');

// Single product page route
Route::get('/AVIATO/SingleProduct/{id}', [aviatoController::class, 'ShowSingleProduct'])->name('photos.show');

// Profile page route
Route::get('/AVIATO/Profile', [aviatoController::class, 'ShowProfile'])->name('Profile.create');

// Signup page route
Route::get('/AVIATO/signup', [AuthController::class, 'Showsignup'])->name('signup.create');

// Process signup route
Route::post('/AVIATO/signup/process', [AuthController::class, 'signup'])->name('signup.store');

// Login page route
Route::get('/AVIATO/login', [AuthController::class, 'Showlogin'])->name('login');

// Process login route
Route::post('/AVIATO/login/process', [AuthController::class, 'Login'])->name('login.store');

// Logout route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
