<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background-color: #f1f1f1;
        font-family: "Font Awesome 5 Free";
    }

    #form-1 {
        border: 1px solid #ccc;
        border-radius: 5px;

        box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
            0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
        padding: 2em;
    }

    h2 {
        padding: 20px;

        text-align: center;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('assets/images/logo.svg')); ?>" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/reserver.css')); ?>">
    <title>Details Flight</title>
</head>

<body>

    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">

        <div class="container d-flex justify-content-around mt-2">
            <div class="navbar-nav w-100">
                <?php if($passenger->role === 1): ?>
                    <a href="<?php echo e(route('admin.index')); ?>" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('homepage')); ?>" class="nav-item nav-link">
                        Home</a>
                <?php endif; ?>

            </div>

        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex"><?php echo e(auth()->user()->name); ?></span>
                </a>
                <?php if($passenger->role === 1): ?>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="<?php echo e(route('profile.show', auth()->user()->passenger_id)); ?>" class="dropdown-item">My
                            Profile</a>
                        <a href="<?php echo e(route('login.edit', auth()->user()->passenger_id)); ?>" class="dropdown-item">Modifier
                            Mon
                            Profil</a>
                        <a href="<?php echo e(route('login.logout')); ?>" class="dropdown-item">Log Out</a>
                    </div>
                <?php else: ?>
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
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <form action="" id="form-1">

            <div class="d-flex flex-row justify-content-around text-center mt-4 mb-2">
                <div class="col-sm-4">
                    <span class="me-5">
                        <input class="form-control" type="text" value="<?php echo e($passenger->name); ?>"
                            placeholder="username">
                    </span>
                </div>
                <div class="col-sm-4">
                    <span class="me-5">
                        <input class="form-control" type="text" value="<?php echo e($passenger->username); ?>"
                            placeholder="username">
                    </span>
                </div>
                <div class="col-sm-4">
                    <span class="me-5">
                        <input class="form-control" type="text" value="<?php echo e($passenger->email); ?>"
                            placeholder="username">
                    </span>
                </div>

            </div>
            <div class="d-flex flex-row justify-content-around text-center mt-4 mb-2">
                <div class="col-sm-4">
                    <span class="me-5">
                        <input class="form-control" type="text" value="<?php echo e($passenger->mobile); ?>"
                            placeholder="username">
                    </span>
                </div>
                <div class="col-sm-4">
                    <span class="me-5">
                        <input class="form-control" type="text" value="<?php echo e($passenger->address); ?>"
                            placeholder="username">
                    </span>
                </div>
                <div class="col-sm-4">
                    <span class="me-5">
                        <?php if($passenger->role === 1): ?>
                            <input class="form-control" type="text" value="Admin" placeholder="username">
                        <?php else: ?>
                            <input class="form-control" type="text" value="Passenger" placeholder="username">
                        <?php endif; ?>


                    </span>
                </div>

        </form>
    </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
<?php /**PATH C:\Projects\booking\resources\views/admin/profile.blade.php ENDPATH**/ ?>