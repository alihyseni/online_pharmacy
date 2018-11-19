<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container">
        <div class="col-md-2 float-left">
            <a href="{{ url('/') }}"> <img src="{{ asset('images')}}/pharmacy-logo.jpg" img="img-fluid" style="width:90px"></a>
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
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('partners') }}">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
