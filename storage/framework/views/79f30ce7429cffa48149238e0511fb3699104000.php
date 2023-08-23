<link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
<?php echo $__env->make('flight/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="package" id="package">
    <div class="container">

        <h2 class="h2 section-title">Checkout Our Flights</h2>
        <?php $__currentLoopData = $allFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="package-list">


                <li>
                    <div class="package-card">
                        <figure class="card-banner">
                          <img width="100px" src='<?php echo e(asset('storage/'.$flight->Image)); ?>' loading='lazy'> 
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

                            <button class="btn btn-secondary">Book Now</button>

                        </div>

                    </div>
                </li>


                <hr>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        

    </div>
</section>
<?php /**PATH C:\Projects\booking\resources\views/flight/flight-card.blade.php ENDPATH**/ ?>