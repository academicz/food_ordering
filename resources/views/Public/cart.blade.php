@extends('Public.Layouts.Master')
@section('title')
    Home
@endsection
@section('body')

    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{ asset('public/images/banner_top.jpg') }}" class="img-responsive" alt="banner-top"
             title="banner-top">
        <div class="container">
            <div class="matter">
                <h2>Shopping Cart</h2>
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- cart start here -->
    <div class="mycart">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a><span>1</span>shopping cart</a></li>
                        <li><a><span>2</span>shopping info</a></li>
                        <li><a><span>3</span>payment method</a></li>
                    </ul>
                    <div class="bor"></div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-cart">
                            <form method="post" enctype="multipart/form-data">
                                <h2>You have {{ $user->cart->count() }} items in your order.</h2>
                                <div class="table-responsive">
                                    <table class="table  table-bordered">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Name</td>
                                            <td class="text-center">Price</td>
                                            <td class="text-center">Qty.</td>
                                            <td class="text-center">Total</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $total = 0; ?>
                                        @if($user->cart->count())
                                            @foreach($user->cart as $cart)
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="{{ asset($cart->food->image_path) }}"
                                                                 class="img-responsive"
                                                                 alt="thumb" title="thumb"/>
                                                        </a>
                                                        <div class="name">
                                                            <h4>{{ $cart->food->name }}</h4>
                                                            <p>{{ $cart->food->category->category_name }}</p>
                                                            {{--<div class="rating">--}}
                                                            {{--<i class="icofont icofont-star"></i>--}}
                                                            {{--<i class="icofont icofont-star"></i>--}}
                                                            {{--<i class="icofont icofont-star"></i>--}}
                                                            {{--<i class="icofont icofont-star"></i>--}}
                                                            {{--<i class="icofont icofont-star"></i>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Rs {{ $cart->food->unit_price }}</td>
                                                    <td class="text-center">
                                                        <p class="qtypara">
                                                        <span id="minus1" data-value="-1" class="minus"><i
                                                                    class="icofont icofont-minus"></i></span>
                                                            <input type="text" name="quantity"
                                                                   value="{{ $cart->quantity }}"
                                                                   size="2"
                                                                   id="input-quantity1" class="form-control qty"/>
                                                            <span id="add1" data-value="1" class="add"><i
                                                                        class="icofont icofont-plus"></i></span>
                                                            <input type="hidden" name="product_id" value="1"/>
                                                        </p>
                                                    </td>
                                                    <td class="text-center">
                                                        Rs {{ $cart->quantity * $cart->food->unit_price }}</td>
                                                    <?php $total += $cart->quantity * $cart->food->unit_price;?>
                                                    <td class="text-center">
                                                        <button type="button"><i class="icofont icofont-close-line"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5">
                                                    <h3 class="text-right">SUBTOTAL - Rs {{ $total }}</h3>
                                                    <div class="buttons pull-left">
                                                        <a href="{{ route('home') }}" class="btn btn-primary">Continue
                                                            Shopping</a>
                                                    </div>
                                                    <div class="buttons pull-right">
                                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center"><h2>Your Cart is Empty</h2></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart end here -->

@endsection