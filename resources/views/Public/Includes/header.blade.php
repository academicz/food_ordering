<!-- header start here-->
<header>
    <!--top start here -->
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <ul class="list-inline pull-left icon">
                        <li><a href="contact_us.html"><i class="icofont icofont-ui-message"></i> Email :
                                info@restaurant.com</a></li>
                        <li><a href="contact_us.html"><i class="icofont icofont-phone"></i> Phone : 123 456 7890</a>
                        </li>
                        <li><a href="{{ route('showCart') }}"><i class="icofont icofont-cart-alt"></i> Cart</a></li>
                    </ul>

                    <ul class="list-inline pull-right  icon">
                        @if(Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icofont icofont-ui-user"></i> {{$user->name}}</a>
                                <ul class="dropdown-menu dropdown-menu-right drophover">
                                    <li><a href="{{ route('logout') }}">Sign Out</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icofont icofont-ui-user"></i> My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right drophover">
                                    <li><a href="{{ route('login') }}">Sign in</a></li>
                                    <li><a href="{{ route('register') }}">Sign up</a></li>
                                </ul>
                            </li>
                        @endif
                        <li>
                            <ul class="list-inline social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                class="icofont icofont-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                                class="icofont icofont-social-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i
                                                class="icofont icofont-social-google-plus"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                                class="icofont icofont-social-instagram"></i></a></li>
                                <li><a href="https://in.pinterest.com/" target="_blank"><i
                                                class="icofont icofont-social-pinterest"></i></a></li>
                                <li><a href="https://www.youtube.com/" target="_blank"><i
                                                class="icofont icofont-social-youtube-play"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--top end here -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div id="logo">
                    <a href="{{ route('home') }}"><img class="img-responsive"
                                                       src="{{ asset('public/images/logo.png') }}" alt="logo"
                                                       title="logo"/></a>
                </div>
            </div>

            <div class="col-md-7 col-sm-7 col-xs-12 paddleft">
                <!-- menu start here -->
                <div id="menu">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <span class="menutext visible-xs">Menu</span>
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse"
                                    class="btn btn-navbar navbar-toggle" type="button"><i
                                        class="icofont icofont-navigation-menu"></i></button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                            <ul class="nav navbar-nav text-right">
                                <li class="dropdown"><a href="{{ route('home') }}">HOME</a>
                                </li>
                                <li><a href="{{ route('allItems') }}">Our Menu</a></li>
                                @if(Auth::check())
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My
                                            Account <i
                                                    class="icofont icofont-caret-down"></i></a>
                                        <div class="dropdown-menu repeating">
                                            <div class="dropdown-inner">
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ route('orderHistory') }}">My Orders</a></li>
                                                    <li><a href="{{ route('logout') }}">Sign out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- menu end here -->
            </div>
        </div>
    </div>
</header>
<!-- header end here -->