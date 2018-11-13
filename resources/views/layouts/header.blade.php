<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container">
        <div class="col-md-2 float-left">
            <p class="text-white">Pharmacy</p>
        </div>
        <div class="col-md-10">
            <ul class="navbar-nav float-right">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contacts/create') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">News</a>
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