@extends('Public.Layouts.Master')
@section('title')
    {{ $user->name }}
@endsection
@section('body')
    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{ asset('public/images/banner_top.jpg') }}" class="img-responsive" alt="banner-top"
             title="banner-top">
        <div class="container">
            <div class="matter">
                <h2>My Account</h2>
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- thanks start here -->
    <div class="thanks">
        <div class="container">
            <div class="row">
                <table></table>
            </div>
        </div>
    </div>
    <!-- thanks end here -->

@endsection