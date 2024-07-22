@extends('layout.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Cart</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                @if (count($cart) > 0)
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="block">
                                <div class="product-list">
                                    <form method="post">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="">Item Name</th>
                                                    <th class="">Item Price</th>
                                                    <th class="">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $p)
                                                    <tr class="">
                                                        <td class="">
                                                            <div class="product-info">
                                                                <img width="80"
                                                                    src="data:image/jpeg;base64,{{ $p['photo'] }}"
                                                                    alt="" />
                                                                <a href="#!">{{ $p['name'] }}</a>
                                                            </div>
                                                        </td>
                                                        <td class="">${{ $p['price'] }}</td>
                                                        <td class="">
                                                            <a class="product-remove"
                                                                href="{{ route('cart.remove', $p['id']) }}">Remove</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('Checkout.create') }}"
                                            class="btn btn-main pull-right">Checkout</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <section class="empty-cart page-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="block text-center">
                                        <i class="tf-ion-ios-cart-outline"></i>
                                        <h2 class="text-center">Your cart is currently empty.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, sed.</p>
                                        <a href="{{ route('Shop.create') }}" class="btn btn-main mt-20">Return to shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </div>
@endsection
