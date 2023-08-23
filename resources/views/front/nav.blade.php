<nav class="navbar" data-navbar>

    <div class="navbar-top">

        <a href="#" class="logo">
            <img src="{{ asset('assets/images/logo-blue.svg') }}" alt="WeTravel">
        </a>

        <!-- <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button> -->

    </div>

    <ul class="navbar-list">

        @if (auth()->user()->role === 1)
            <li>
                <a href="{{ route('admin.index') }}" class="navbar-link" data-nav-link>Admin</a>
            </li>
        @endif
        @guest

            <li>
                <a href="{{ route('create') }}" class="navbar-link" data-nav-link>Register</a>
            </li>

            <li>
                <a href="{{ route('login.show') }}" class="navbar-link" data-nav-link>Login</a>
            </li>
        @endguest

        @auth
            <li>
                <a href="{{ route('homepage') }}" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
                <a href="{{ route('flight') }}" class="navbar-link" data-nav-link>flights</a>
            </li>

            <li>
                <a href="#package" class="navbar-link" data-nav-link>Bookings</a>
            </li>
            <li>
                <a href="{{ route('login.logout') }}" class="navbar-link" data-nav-link>Logout</a>
            </li>
            <li>
                <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>
        @endauth

    </ul>

</nav>
