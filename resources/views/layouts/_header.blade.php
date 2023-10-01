<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>My Blogging Platform</h1>
                            <span class="subheading">By Jan Alquero</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('home') }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('home') }}">Home</a></li>

                @guest
                    <!-- Display "Login" and "Register" links for guests -->
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('register') }}">Register</a></li>
                @else
                    <!-- Display "Create Post," user's name, and "Logout" link for authenticated users -->
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#" id="openCreatePostModal">Create Post</a></li>
                    <li class="nav-item"><span class="nav-link px-lg-3 py-3 py-lg-4">Welcome, {{ auth()->user()->name }}</span></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('auth_logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link px-lg-3 py-3 py-lg-4">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

        
