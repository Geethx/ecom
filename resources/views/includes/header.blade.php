<nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(191,181,181,0.8);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center" href="{{route('home')}}">
            <img src="{{asset("assets/images/logo-white.png")}}" alt="RedStore" width="90" height="50" class="me-2" style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cart.show') ? 'active' : '' }}" href="{{route('cart.show')}}">
                        <i class="bi bi-cart3"></i> Cart
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill px-4 py-2" href="{{route('login')}}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<br>
