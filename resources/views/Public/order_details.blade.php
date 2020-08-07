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
                <h2>thank you</h2>
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="#">Thank You</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- thanks start here -->
    <div class="thanks">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <img src="{{ asset('public/images/right_icon.png') }}" class="img-responsive" alt="icon"
                         title="icon"/>
                    <h2>Congratulations. Your order<br> is accepted.</h2>
                    <a href="{{ route('home') }}">
                        <button type="button" class="btn-primary">back to home</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- thanks end here -->

@endsection