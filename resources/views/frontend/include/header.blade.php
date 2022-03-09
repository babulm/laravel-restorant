<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/*') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->is('service*') ? 'active' : '' }}">Service</a>
                        <a href="{{ route('menu') }}" class="nav-item nav-link {{ request()->is('food-menu*') ? 'active' : '' }}">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ request()->is('pages/booking','pages/our-team','pages/testimonial') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('booking') }}" class="dropdown-item {{ request()->is('pages/booking') ? 'active' : '' }}">Booking</a>
                                <a href="{{ route('team') }}" class="dropdown-item {{ request()->is('pages/our-team') ? 'active' : '' }}">Our Team</a>
                                <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->is('pages/testimonial') ? 'active' : '' }}">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link  {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <a href="{{ route('booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>
