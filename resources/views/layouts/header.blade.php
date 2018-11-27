<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container">
        <div class="col-md-2 float-left">
<<<<<<< HEAD
            <a href="{{ url('/') }}"> <img src="{{ asset('images')}}/pharmacy-logo.jpg" img="img-fluid" style="width:90px"></a>
=======
            <a href="{{ url('/') }}"> <img src="{{ asset('images/pharmacy-logo.png')}}" img="img-fluid" class="navbar-logo"></a>
>>>>>>> afca62506bc236b337f08acd52664a11f8d40f73
        </div>
        <div class="col-md-10">
            <ul class="navbar-nav float-right">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create-product.index') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('partners') }}">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Contact</a>
                </li>
<<<<<<< HEAD
=======
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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
>>>>>>> afca62506bc236b337f08acd52664a11f8d40f73
            </ul>
        </div>
    </div>
</nav>
<<<<<<< HEAD
=======



>>>>>>> afca62506bc236b337f08acd52664a11f8d40f73
