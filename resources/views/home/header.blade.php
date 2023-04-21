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
                            @if (Route::has('login'))
                            @auth
                            <li>
                                <a href="{{url('order_user')}}">Order</a>
                            </li> 
                             <li>
                                <a href="{{url('show_cart')}}">Cart</a>
                            </li>
                            
                            
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

    
    <!-- /main_nav -->
</header>
<!-- /header -->