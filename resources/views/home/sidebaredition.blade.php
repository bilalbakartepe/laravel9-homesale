<div class="col-lg-9">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
        <a href="" class="text-decoration-none d-block d-lg-none">
            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/references" class="nav-item nav-link">References</a>
                <a href="/about" class="nav-item nav-link">About Us</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/faq" class="nav-item nav-link">FAQ</a>
            </div>
            <div class="navbar-nav ml-auto py-0">
                @auth
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/logoutuser" class="nav-item nav-link">My Account</a>
                        <a href="/logoutuser" class="nav-item nav-link">My Adverts</a>
                        <a href="/logoutuser" class="nav-item nav-link">My Reviews</a>
                        <a href="/logoutuser" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
                @else
                <a href="/loginuser" class="nav-item nav-link">Login</a>
                <a href="/registeruser" class="nav-item nav-link">Register</a>
                @endauth
            </div>
        </div>
    </nav>