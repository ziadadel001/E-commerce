@extends('layout.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Shop</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <h4 class="widget-title">Short By</h4>
                        <form method="post" action="#">
                            <select class="form-control">
                                <option>Man</option>
                                <option>Women</option>
                                <option>Accessories</option>
                                <option>Shoes</option>
                            </select>
                        </form>
                    </div>
                    <div class="widget product-category">
                        <h4 class="widget-title">Categories</h4>
                        <div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Shoes
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#!">Brand & Twist</a></li>
                                            <li><a href="#!">Shoe Color</a></li>
                                            <li><a href="#!">Shoe Color</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Duty Wear
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#!">Brand & Twist</a></li>
                                            <li><a href="#!">Shoe Color</a></li>
                                            <li><a href="#!">Shoe Color</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            WorkOut Shoes
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#!">Brand & Twist</a></li>
                                            <li><a href="#!">Shoe Color</a></li>
                                            <li><a href="#!">Gladian Shoes</a></li>
                                            <li><a href="#!">Swis Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @if (session('success'))
                            <div class="alert alert-success alert-common" role="alert"><i
                                    class="tf-ion-thumbsup"></i><span>Well done!</span> {{ session('success') }}</div>
                        @endif
                        @foreach ($products as $product)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <span class="bage">
                                            @if ($product->quantity == 0)
                                                sold
                                            @else
                                                sale
                                            @endif
                                        </span>
                                        <img class="img-responsive" src="data:image/jpeg;base64,{{ $product->photo }}"
                                            alt="product-img" />
                                        <div class="preview-meta">
                                            <ul>

                                                <li>
                                                    <a href="{{ route('photos.show', $product->id) }}"><i
                                                            class="tf-ion-ios-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('cart.add', $product->id) }}"><i
                                                            class="tf-ion-android-cart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-single.html">{{ $product->name }}</a></h4>
                                        <p class="price">${{ $product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Modal -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
