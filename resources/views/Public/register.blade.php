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
                <h2>Sign Up</h2>
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li><a>Sign Up</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- main container start here -->
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="col-sm-5 padd0">
                        <div class="leftside"></div>
                        <div class="loginto">
                            <div class="commontop text-center">
                                <h4>sign up</h4>
                                <hr>
                            </div>
                            <p>If you have an account already? So <a href="#">Login Now</a> And start ad posting less
                                than a mintue</p>
                            <h5>Login via social accounts</h5>
                            <ul class="list-unstyled text-center">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                class="icofont icofont-social-facebook"></i> Login with Facebook</a>
                                </li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                                class="icofont icofont-social-twitter"></i> Login with Twitter</a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i
                                                class="icofont icofont-social-google-plus"></i> Login with Google+</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 padd0">
                        <div class="loginnow" style="padding: 30px 100px;">
                            @include('Includes.messageBox')
                            <form action="{{route('postRegister')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <i class="icofont icofont-ui-user"></i>
                                    <input type="text" name="name" id="name"
                                           value="{{old('name')}}"
                                           placeholder="name"
                                           class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                                <div class="form-group">
                                    <i class="icofont icofont-ui-message"></i>
                                    <input type="text" name="email" value="{{old('email')}}"
                                           placeholder="email" id="email"
                                           class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                                <div class="form-group">
                                    <i class="icofont icofont-phone"></i>
                                    <input type="text"
                                           placeholder="Phone"
                                           value="{{old('phone')}}"  name="phone"
                                           class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                                </div>
                                <div class="form-group">
                                    <i class="icofont icofont-home"></i>
                                    <input type="text"
                                           placeholder="Home Town"
                                           value="{{old('homeTown')}}" name="homeTown"
                                           class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('homeTown') }}</small>
                                </div>
                                <div class="form-group">
                                    <i class="icofont icofont-lock"></i>
                                    <input type="password" name="password" value="{{old('password')}}"
                                           placeholder="password"
                                           class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                </div>
                                <div class="form-group">
                                    <i class="icofont icofont-lock"></i>
                                    <input type="password" name="confirmPassword" value="{{old('confirmPassword')}}"
                                           placeholder="repeat password"
                                           id="input-confirm" class="form-control"/>
                                    <small class="text-danger">{{ $errors->first('confirmPassword') }}</small>
                                </div>
                                <input type="submit" value="SIGN UP" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main container end here -->

@endsection