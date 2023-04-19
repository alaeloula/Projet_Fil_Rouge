<header class="version_1">
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="/home/img/logo.svg" alt="" width="100" height="35"></a>
                    </div>
                </div>
                <nav class="col-xl-6 col-lg-7">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.html"><img src="/home/img/logo_black.svg" alt="" width="100" height="35"></a>
                            <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul>
                            <li class="">
                                <a href="{{url('/')}}" class="show-submenu">Home</a>
                            </li>


                            <li>
                                <a href="contacts.html">contacts</a>
                            </li>
                            <li>
                                <a href="about.html">about</a>
                            </li>
                            <li>
                                <a href="help.html">Help</a>
                            </li>
                            <li>
                                <a href="{{url('order_user')}}">Order</a>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}">login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">register</a>
                            </li>
                            @endauth
                            @endif
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>

            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->

    <div class="main_nav inner">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <nav class="categories">
                        <ul class="clearfix">
                            <li><span>
                                    <a href="#">
                                        <span class="hamburger hamburger--spin">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </span>
                                        Categories
                                    </a>
                                </span>
                                <div id="menu">
                                    <ul>
                                        <li><span><a href="#0">Collections</a></span>
                                            <ul>
                                                <li><a href="listing-grid-1-full.html">Trending</a></li>
                                                <li><a href="listing-grid-2-full.html">Life style</a></li>
                                                <li><a href="listing-grid-3.html">Running</a></li>
                                                <li><a href="listing-grid-4-sidebar-left.html">Training</a></li>
                                                <li><a href="listing-grid-5-sidebar-right.html">View all Collections</a></li>
                                            </ul>
                                        </li>
                                        <li><span><a href="#">Men</a></span>
                                            <ul>
                                                <li><a href="listing-grid-6-sidebar-left.html">Offers</a></li>
                                                <li><a href="listing-grid-7-sidebar-right.html">Shoes</a></li>
                                                <li><a href="listing-row-1-sidebar-left.html">Clothing</a></li>
                                                <li><a href="listing-row-3-sidebar-left.html">Accessories</a></li>
                                                <li><a href="listing-row-4-sidebar-extended.html">Equipment</a></li>
                                            </ul>
                                        </li>
                                        <li><span><a href="#">Women</a></span>
                                            <ul>
                                                <li><a href="listing-grid-1-full.html">Best Sellers</a></li>
                                                <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                <li><a href="listing-grid-3.html">Accessories</a></li>
                                                <li><a href="listing-grid-4-sidebar-left.html">Shoes</a></li>
                                            </ul>
                                        </li>
                                        <li><span><a href="#">Boys</a></span>
                                            <ul>
                                                <li><a href="listing-grid-6-sidebar-left.html">Easy On Shoes</a></li>
                                                <li><a href="listing-grid-7-sidebar-right.html">Clothing</a></li>
                                                <li><a href="listing-row-3-sidebar-left.html">Must Have</a></li>
                                                <li><a href="listing-row-4-sidebar-extended.html">All Boys</a></li>
                                            </ul>
                                        </li>
                                        <li><span><a href="#">Girls</a></span>
                                            <ul>
                                                <li><a href="listing-grid-1-full.html">New Releases</a></li>
                                                <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                <li><a href="listing-grid-3.html">Sale</a></li>
                                                <li><a href="listing-grid-4-sidebar-left.html">Best Sellers</a></li>
                                            </ul>
                                        </li>
                                        <li><span><a href="#">Customize</a></span>
                                            <ul>
                                                <li><a href="listing-row-1-sidebar-left.html">For Men</a></li>
                                                <li><a href="listing-row-2-sidebar-right.html">For Women</a></li>
                                                <li><a href="listing-row-4-sidebar-extended.html">For Boys</a></li>
                                                <li><a href="listing-grid-1-full.html">For Girls</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                    <div class="custom-search-input">
                        <input type="text" placeholder="Search over 10.000 products">
                        <button type="submit"><i class="header-icon_search_custom"></i></button>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-3">
                    <ul class="top_tools">
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="cart.html" class="cart_bt"><strong>2</strong></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li>
                                            <a href="product-detail-1.html">
                                                <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                            </a>
                                            <a href="#0" class="action"><i class="ti-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-detail-1.html">
                                                <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                            </a>
                                            <a href="0" class="action"><i class="ti-trash"></i></a>
                                        </li>
                                    </ul>
                                    <div class="total_drop">
                                        <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                        <a href="{{url('show_cart')}}" class="btn_1 outline">View Cart</a><a href="checkout.html" class="btn_1">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown-cart-->
                        </li>
                        <li>
                            <a href="#0" class="wishlist"><span>Wishlist</span></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-access">
                                <a href="account.html" class="access_link"><span>Account</span></a>
                                <div class="dropdown-menu">
                                    <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                                    <ul>
                                        <li>
                                            <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                                        </li>
                                        <li>
                                            <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                        </li>
                                        <li>
                                            <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /dropdown-access-->
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                        </li>
                        <li>
                            <a href="#menu" class="btn_cat_mob">
                                <div class="hamburger hamburger--spin" id="hamburger">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                                Categories
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <div class="search_mob_wp">
            <input type="text" class="form-control" placeholder="Search over 10.000 products">
            <input type="submit" class="btn_1 full-width" value="Search">
        </div>
        <!-- /search_mobile -->
    </div>
    <!-- /main_nav -->
</header>
<!-- /header -->