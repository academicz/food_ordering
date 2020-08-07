<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-success pull-right">New</span>
                                <img class="img-circle img-sm img-border"
                                     src="{{ asset('images/admin/profile-photos/1.png') }}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                <p class="mnp-name">Admin</p>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a href="{{ route('logout') }}" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut">
                        <ul class="list-unstyled">

                            <!--                                        <li class="col-xs-2" data-content="Button 1">
                                                                        <a class="shortcut-grid" href="#" >
                                                                            <i class="demo-psi-home"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-xs-2" data-content="Button 2">
                                                                        <a href="#" class="shortcut-grid">
                                                                            <i class="demo-psi-heart-2"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-xs-2" data-content="Button 3">
                                                                        <a href="#" class="shortcut-grid">
                                                                            <i class="demo-psi-speech-bubble-3"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-xs-2" data-content="Button 4">
                                                                        <a href="#" class="shortcut-grid">
                                                                            <i class="demo-psi-star"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-xs-2" data-content="Button 5">
                                                                        <a href="#" class="shortcut-grid">
                                                                            <i class="demo-psi-male"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="col-xs-2" data-content="Button 6">
                                                                        <a href="#" class="shortcut-grid">
                                                                            <i class="demo-psi-lock-2"></i>
                                                                        </a>
                                                                    </li>-->


                            <!--                                        <li class="col-xs-4" data-content="Like">
                                                                        <div class="shortcut-grid">
                                                                            <i class="hide-sm demo-psi-facebook"></i>
                                                                            <span class="text-lg">152</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-xs-4" data-content="2,343 Mail">
                                                                        <div class="shortcut-grid">
                                                                            <i class="demo-psi-mail"></i>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-xs-4" data-content="Followers">
                                                                        <div class="shortcut-grid">
                                                                            <i class="hide-sm demo-psi-twitter"></i>
                                                                            <span class="text-lg">2K</span>
                                                                        </div>
                                                                    </li>-->


                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-male"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-speech-bubble-3"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-thunder"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-lock-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="{{ route('adminHome') }}">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>
                                <span class="menu-title">
                                    <strong>Manage Kitchen</strong>
                                </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{ route('addFoodCategory') }}">Add Food Category</a></li>
                                <li><a href="{{ route('addFood') }}">Add Food</a></li>
                                <li><a href="{{ route('todaysOrders') }}">View Todays Orders</a></li>
                                <li><a href="{{ route('allOrders') }}">All Orders</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>