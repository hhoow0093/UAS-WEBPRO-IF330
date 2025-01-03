<nav class="navbar navbar-expand-lg py-4 py-lg-0" >
    <div class="container-fluid px-4" style="background-color:white; min-height:10vh; position: relative; z-index:5;">
        <img src="/img/color-seadex.webp" alt="seadex" height="50" width="170">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#top-navbar"
            aria-controls="top-navbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="top-navbar" aria-labelledby="top-navbar">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#top-navbar" aria-controls="top-navbar">
                <div class="d-flex justify-content-between p-3">
                    <img src="/img/color-seadex.webp" alt="seadex" height="50" width="170">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </div>
            </button>
            <ul class="navbar-nav ms-lg-auto p-4 p-lg-1">
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a class="nav-link navbar2 active fw-bold"  href="/seadex/home">Home</a>
                </li>
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a class="nav-link navbar2  active fw-bold"  href="/seadex/services">Services</a>
                </li>
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a class="nav-link navbar2  active fw-bold"  href="/seadex/products">Products</a>
                </li>
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a class="nav-link navbar2  active fw-bold" href="/seadex/aboutus">About us</a>
                </li>
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a class="nav-link navbar2  active fw-bold"  href="/seadex/contactus">Contact us</a>
                </li>
                @guest
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a href="{{ route('login') }}" class="nav-link navbar2 active fw-bold text-black">Login</a>
                </li>
                <li class="nav-item px-3 px-lg-0 py-1 py-lg-4">
                    <a href="{{ route('register') }}" class="nav-link navbar2 active fw-bold text-black">Register</a>
                </li>
            @endguest
            @auth
            <li class="nav-item dropdown px-3 px-lg-0 py-1 py-lg-4">
                <a class="nav-link dropdown-toggle navbar1 active fw-bold" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black !important;">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </li>
            @endauth
            </ul>
        </div>
    </div>
</nav>

