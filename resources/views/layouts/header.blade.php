
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo">
                            <a href="{{ url('/') }}"> <img src="{{ asset('images/pharmacy-logo.png')}}" img="img-fluid"
                                                           class="navbar-logo"></a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <form action="#" class="search-wrap">
                            <div class="form-group">
                                <input type="search" class="form-control search" placeholder="Search">
                                <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('products.index') }}">Products</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="{{ route('contacts') }}">Contact</a></li>
                            <li class="cart"><a href="{{ route('cart.index') }}"><i class="icon-shopping-cart"></i> Cart [<span><?= \App\Carts::cartCount();?></span>]</a></li>
                            <!-- Authentication Links -->
                            @guest
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        @endguest
                        <!-- End of authentications link --->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="owl-carousel2">
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">25% off (Almost) Everything! Use Code: Winter Sale</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">Our biggest sale yet 50% off</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>