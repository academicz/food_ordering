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
                    <li><a href="{{ route('showCart') }}">Shopping Cart</a></li>
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
                        <li class="active"><a><span>2</span>shopping info</a></li>
                        <li><a><span>3</span>payment method</a></li>
                    </ul>
                    <div class="bor"></div>
                    <div class="tab-content">
                        <div class="tab-pane active col-md-12 col-sm-12 col-xs-12" id="tab-info">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{route('postCheckout')}}" id="checkout">
                                {{ csrf_field() }}
                                <div class="col-md-5 col-sm-5 col-xs-12 padd0">
                                    <h6>shopping address</h6>

                                    <fieldset>
                                        <div class="form-group">
                                            <input name="address" value="{{ old('address') }}" placeholder="address" id="input-address"
                                                   class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input name="city" value="{{ old('city') }}" placeholder="City" id="input-City"
                                                   class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input name="landmark" value="{{ old('landmark') }}" placeholder="Landmark"
                                                   id="input-state" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input name="pin" value="{{ old('pin') }}" placeholder="Pin code" id="input-code"
                                                   class="form-control" type="text">
                                        </div>
                                    </fieldset>

                                </div>
                                <div class="col-md-2 col-sm-2 co-xs-12"></div>
                                <div class="col-md-5 col-sm-5 col-xs-12 padd0">
                                    <h6>contact information</h6>

                                    <fieldset>
                                        <div class="form-group">
                                            <input name="name" value="{{ old('name',$user->name) }}" placeholder="Name"
                                                   id="input-firstname" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" value="{{ old('email',$user->email) }}" placeholder="email" id="input-email"
                                                   class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" value="{{ old('phone',$user->phone) }}" placeholder="phone number" id="input-phone"
                                                   class="form-control" type="text">
                                        </div>
                                    </fieldset>

                                </div>
                            </form>
                            <div class="col-md-12 col-sm-12 col-xs-12 padd0">
                                <div class="buttons pull-left">
                                    <a href="{{ route('showCart') }}">
                                        <button type="button" class="btn-primary">shopping cart</button>
                                    </a>
                                </div>
                                <div class="buttons pull-right">
                                    <button type="button" class="btn-primary" onclick="document.getElementById('checkout').submit()">payment method</button>
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