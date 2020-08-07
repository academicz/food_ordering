@extends('Public.Layouts.Master')
@section('title')
    Home
@endsection
@section('body')
    <div class="bread-crumb">
        <img src="{{ asset('public/images/banner_top.jpg') }}" class="img-responsive" alt="banner-top"
             title="banner-top">
        <div class="container">
            <div class="matter">
                <h2>our menu</h2>
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li><a>our menu</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- menu start here -->
    <div class="menu mar-b">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>our menu</h4>
                    <hr>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($items as $item)
                            <a href="{{ route('showItem',['id'=>$item->id,'name'=>$item->name]) }}">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <diV class="box single-item">
                                        <div class="image">
                                            <img src="{{ asset($item->image_path)}}" alt="image"
                                                 title="image"
                                                 class="img-responsive"/>
                                        </div>
                                        <div class="caption">
                                            <h4>{{ $item->name }}</h4>
                                            <p class="des">{{ $item->category->category_name }}</p>
                                            <div class="price">Rs {{ $item->unit_price }}
                                                <small class="quantity"> for {{$item->quantity_per_order}} </small>
                                            </div>
                                            <div class="icon text-right">
                                                <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                                                <a href="#"><i class="icofont icofont-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="text-center">
                        {{$items->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end here -->

@endsection