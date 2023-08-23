<nav class="navbar" data-navbar>

    <div class="navbar-top">

        <a href="#" class="logo">
            <img src="<?php echo e(asset('assets/images/logo-blue.svg')); ?>" alt="WeTravel">
        </a>

        <!-- <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button> -->

    </div>

    <ul class="navbar-list">

        <?php if(auth()->user()->role === 1): ?>
            <li>
                <a href="<?php echo e(route('admin.index')); ?>" class="navbar-link" data-nav-link>Admin</a>
            </li>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>

            <li>
                <a href="<?php echo e(route('create')); ?>" class="navbar-link" data-nav-link>Register</a>
            </li>

            <li>
                <a href="<?php echo e(route('login.show')); ?>" class="navbar-link" data-nav-link>Login</a>
            </li>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
            <li>
                <a href="<?php echo e(route('homepage')); ?>" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
                <a href="<?php echo e(route('flight')); ?>" class="navbar-link" data-nav-link>flights</a>
            </li>

            <li>
                <a href="#package" class="navbar-link" data-nav-link>Bookings</a>
            </li>
            <li>
                <a href="<?php echo e(route('login.logout')); ?>" class="navbar-link" data-nav-link>Logout</a>
            </li>
            <li>
                <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>
        <?php endif; ?>

    </ul>

</nav>
<?php /**PATH C:\Projects\booking\resources\views//front/nav.blade.php ENDPATH**/ ?>