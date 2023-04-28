<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <div class="d-flex" >
                <ul class="navbar-nav ">
                    @auth
                        <li class="nav-item mx-2">
                            <span class="nav-link">
                                {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
                        </li>
                        <li class="nav-item mx-2">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-info text-white">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </div>
</nav>