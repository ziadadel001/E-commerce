@extends('layout.app')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h1 class="page-name">Checkout</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-wrapper">
    <div class="checkout shopping">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="block billing-details">
                        <h4 class="widget-title">Billing Details</h4>
                        <form action="{{ route('Checkout.store') }}" method="POST" class="checkout-form">
                            @csrf

                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="" value="{{ old('full_name') }}">
                                @if ($errors->has('full_name'))
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="user_address">Address</label>
                                <input type="text" class="form-control" id="user_address" name="user_address" placeholder="" value="{{ old('user_address') }}">
                                @if ($errors->has('user_address'))
                                    <span class="text-danger">{{ $errors->first('user_address') }}</span>
                                @endif
                            </div>
                            <div class="checkout-country-code clearfix">
                                <div class="form-group">
                                    <label for="user_post_code">Zip Code</label>
                                    <input type="text" class="form-control" id="user_post_code" name="user_post_code" value="{{ old('user_post_code') }}">
                                    @if ($errors->has('user_post_code'))
                                        <span class="text-danger">{{ $errors->first('user_post_code') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="user_city">City</label>
                                    <input type="text" class="form-control" id="user_city" name="user_city" value="{{ old('user_city') }}">
                                    @if ($errors->has('user_city'))
                                        <span class="text-danger">{{ $errors->first('user_city') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_country">Country</label>
                                <input type="text" class="form-control" id="user_country" name="user_country" placeholder="" value="{{ old('user_country') }}">
                                @if ($errors->has('user_country'))
                                    <span class="text-danger">{{ $errors->first('user_country') }}</span>
                                @endif
                            </div>

                            <div class="block">
                                <h4 class="widget-title">Payment Method</h4>
                                <p>Credit Card Details (Secure payment)</p>
                                <div class="checkout-product-details">
                                    <div class="payment">
                                        <div class="card-details">
                                            <div class="form-group">
                                                <label for="card_number">Card Number <span class="required">*</span></label>
                                                <input id="card_number" name="card_number" class="form-control" type="tel" placeholder="•••• •••• •••• ••••" value="{{ old('card_number') }}">
                                                @if ($errors->has('card_number'))
                                                    <span class="text-danger">{{ $errors->first('card_number') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group half-width padding-right">
                                                <label for="card_expiry">Expiry (MM/YY) <span class="required">*</span></label>
                                                <input id="card_expiry" name="card_expiry" class="form-control" type="tel" placeholder="MM / YY" value="{{ old('card_expiry') }}">
                                                @if ($errors->has('card_expiry'))
                                                    <span class="text-danger">{{ $errors->first('card_expiry') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group half-width padding-left">
                                                <label for="card_cvc">Card Code <span class="required">*</span></label>
                                                <input id="card_cvc" name="card_cvc" class="form-control" type="tel" maxlength="4" placeholder="CVC" value="{{ old('card_cvc') }}">
                                                @if ($errors->has('card_cvc'))
                                                    <span class="text-danger">{{ $errors->first('card_cvc') }}</span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-main mt-20">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-checkout-details">
                        <div class="block">
                            <h4 class="widget-title">Order Summary</h4>
                            @foreach ($products as $product)
                            <div class="media product-card">
                                <a class="pull-left" href="product-single.html">
                                    <img class="media-object" src="data:image/jpeg;base64,{{ $product['photo'] }}" alt="Image" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="product-single.html">{{ $product['name'] }}</a></h4>
                                    <p class="price">${{ $product['price'] }}</p>
                                </div>
                            </div>
                            @endforeach

                            <div class="discount-code">
                                <p>Have a discount? <a data-toggle="modal" data-target="#coupon-modal" href="#!">Enter it here</a></p>
                            </div>

                            <ul class="summary-prices">
                                <li>
                                    <span>Subtotal:</span>
                                    <span class="price">${{ array_sum(array_column($products, 'price')) }}</span>
                                </li>
                                <li>
                                    <span>Shipping:</span>
                                    <span>Free</span>
                                </li>
                            </ul>
                            <div class="summary-total">
                                <span>Total</span>
                                <span>${{ array_sum(array_column($products, 'price')) }}</span>
                            </div>
                            <div class="verified-icon">
                                <img src="{{ asset('Assets/images/shop/verified.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter Coupon Code">
                    </div>
                    <button type="submit" class="btn btn-main">Apply Coupon</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
