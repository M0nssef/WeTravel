<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Flights</title>
</head>

<body>

    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        
        <div class="container d-flex justify-content-around mt-2">
            <div class="navbar-nav w-100">
                <a href="<?php echo e(route('admin.index')); ?>" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            </div>
            <div class="navbar-nav w-100 ">
                <button class="btn btn-primary d-flex align-items-center">
                    <a href="<?php echo e(route('admin.add')); ?>">Add Flight</a>
                </button>
            </div>
        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex"><?php echo e(auth()->user()->name); ?></span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo e(route('profile.show', auth()->user()->passenger_id)); ?>"
                        class="dropdown-item">My Profile</a>
                    <a href="<?php echo e(route('login.edit', auth()->user()->passenger_id)); ?>"
                        class="dropdown-item">Modifier Mon
                        Profil</a>
                    <a href="<?php echo e(route('login.logout')); ?>" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
  
    <div class="container py-4 ">
        <div class="d-flex">
            <table class="table table-bordered dark-table text-center rounded ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>   
                        <th scope="col">Country</th>
                        <th scope="col" colspan="2">Depart et Retour</th>
                        <th scope="col" colspan="2">Date Depart , Retour</th>
                        <th scope="col">Price</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Available</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                </thead>
    
                <tbody class="rounded">
                    <?php $__currentLoopData = $allFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td> <?php echo e($flight->airline_id); ?> </td>
                            <td class =''>
                                <img class="img-thumbnail rounded" src="<?php echo e(asset('storage/'.$flight->Image)); ?>">
                            </td>
                            <td> <?php echo e($flight->Country); ?> </td>
                            <td colspan="2"> <?php echo e($flight->Depart); ?> To
                                <?php echo e($flight->Retour); ?> </td>
                            <td colspan="2"> <?php echo e($flight->date_Aller); ?> To
                                <?php echo e($flight->date_Retour); ?>

                            </td>
                            <td> $<?php echo e($flight->price); ?> </td>
                            <td> <?php echo e($flight->capacity); ?> </td>
                            <td>
                                <?php if($flight->available === 1): ?>
                                    <p style="color:green">Available</p>
                                <?php else: ?>
                                    <p style="color:red">Not Available</p>
                                <?php endif; ?>
                            </td>
    
    
                            <td class="d-flex align-items-center justify-content-center gap-3">
    
                                <a class="btn btn-primary" href="<?php echo e(route('flight.detail', $flight->airline_id)); ?>">
                                    <i class="fa fa-solid fa-angle-right"></i> </a>
                                <form action="<?php echo e(route('admin.edit', $flight->airline_id)); ?>" method="get">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-secondary">
                                        <i class="fa fa-solid fa-pen"></i>                                </button>
                                </form>
                                <form action="<?php echo e(route('supprimer.flight', $flight->airline_id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">
                                        <i class="fa fa-sharp fa-solid fa-trash"></i> </button>
                                </form>
    
                            </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
       

    </div>

    <style>
        a {
            text-decoration: none;
            color: #fff;
        }

        a:hover {
            color: #fff;
        }
    </style>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
<?php /**PATH C:\Projects\booking\resources\views/admin/list_flight.blade.php ENDPATH**/ ?>