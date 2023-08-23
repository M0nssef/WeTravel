
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
        <a href="<?php echo e(route('register')); ?>" class="navbar-link" data-nav-link>Register</a>
      </li>

      <li>
        <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
      </li>

    </ul>

  </nav><?php /**PATH C:\Projects\booking\resources\views/front/nav.blade.php ENDPATH**/ ?>