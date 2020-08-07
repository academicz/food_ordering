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
                    <li><a href="shoppingcart.html">Shopping Cart</a></li>
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
                        <li><a><span>1</span>shopping cart</a></li>
                        <li><a><span>2</span>shopping info</a></li>
                        <li class="active"><a><span>3</span>payment method</a></li>
                    </ul>
                    <div class="bor"></div>
                    <div class="tab-content">
                        <div class="tab-pane active col-md-12 col-sm-12 col-xs-12" id="tab-payment">
                            <form class="form-horizontal" method="post">
                                <fieldset>
                                    <div class="form-group ">
                                        <ul class="list-inline text-center link">
                                            <li class="active">
                                                <a href="#"><img src="{{ asset('public/images/visacard.png') }}"
                                                                 alt="visa" title="visa"
                                                                 class="img-responsive"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('public/images/master.png') }}"
                                                                 alt="master" title="master"
                                                                 class="img-responsive"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('public/images/discovers.png') }}"
                                                                 alt="discover"
                                                                 title="discover" class="img-responsive"></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{ asset('public/images/pay.png') }}" alt="paypal"
                                                                 title="paypal"
                                                                 class="img-responsive"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input class="form-control" id="input-card" placeholder="card holder name"
                                                   value="" name="email" required type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="input-expiry" placeholder="card number"
                                                   value="" name="email" required type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>end date</label>
                                        <div class="col-sm-3">
                                            <select required class="selectpicker form-control bs-select-hidden">
                                                <option selected="" value="0">mm</option>
                                                <option value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="2">March</option>
                                                <option value="2">April</option>
                                                <option value="2">May</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select required class="selectpicker form-control bs-select-hidden">
                                                <option selected="" value="0">year</option>
                                                <option value="1">2001</option>
                                                <option value="2">2002</option>
                                                <option value="2">2003</option>
                                                <option value="2">2004</option>
                                                <option value="2">2005</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" id="input-cvv" placeholder="cvv" value=""
                                                   name="email" required type="text">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="col-md-12 col-sm-12 col-xs-12 padd0">
                                <div class="buttons pull-left">
                                    <a href="{{ route('checkout') }}">
                                        <button type="button" class="btn-primary">Back</button>
                                    </a>
                                </div>
                                <div class="buttons pull-right">
                                    <a href="{{ route('placeOrder') }}">
                                        <button type="button" class="btn-primary">place your order</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart end here -->

@endsection