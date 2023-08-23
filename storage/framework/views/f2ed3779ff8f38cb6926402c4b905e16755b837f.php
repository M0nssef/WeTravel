<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">

    <title>Flights</title>
</head>

<body>
    <?php if(session()->has('success')): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
            <?php echo e(session('success')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>


    
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <div class="container">
            <div class="navbar-nav w-100">
                <a href="<?php echo e(route('homepage')); ?>" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Home</a>
            </div>
        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex"><?php echo e(auth()->user()->name); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo e(route('show', auth()->user()->passenger_id)); ?>" class="dropdown-item">My
                        Profile</a>
                    <a href="<?php echo e(route('login.edit', auth()->user()->passenger_id)); ?>" class="dropdown-item">Modifier Mon
                        Profil</a>
                    <a href="<?php echo e(route('login.logout')); ?>" class="dropdown-item">
                        <p style="color: red"> Log Out </p>
                    </a>
                    <form action="<?php echo e(route('supprimer', auth()->user()->passenger_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="dropdown-item">
                            <p style="color: red">  Supprimer Mon Porfile </p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <section class="package" id="package">
        <div class="container">

            <h2 class="h2 section-title">Checkout Our Flights</h2>
            <?php $__currentLoopData = $allFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="package-list">

                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img width="100px" src='<?php echo e(asset('storage/' . $flight->Image)); ?>' loading='lazy'>
                            </figure>

                            <div class="card-content">

                                <h3 class="h3 card-title"><?php echo e($flight->Country); ?> to <?php echo e($flight->Retour); ?></h3>

                                <p class="card-text">
                                    <?php echo e($flight->description); ?>

                                </p>

                                <ul class="card-meta-list">

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="time"></ion-icon>

                                            <p class="text"><?php echo e($flight->date_Aller); ?></p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people"></ion-icon>

                                            <p class="text"><?php echo e($flight->date_Retour); ?></p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location"></ion-icon>

                                            <p class="text"><?php echo e($flight->Retour); ?></p>
                                        </div>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-price">

                                <div class="wrapper">

                                    <p class="reviews">(25 reviews)</p>

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                </div>

                                <p class="price">
                                    $<?php echo e($flight->price); ?>

                                    <span>/ per person</span>
                                </p>

                                <a href="<?php echo e(route('passenger.reserver', $flight->airline_id)); ?>">
                                    <button class="btn btn-secondary">Book Now
                                    </button>
                                </a>

                            </div>

                        </div>
                    </li>


                    <hr>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            

        </div>
    </section>






</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
<?php /**PATH C:\Projects\booking\resources\views/flight/index.blade.php ENDPATH**/ ?>