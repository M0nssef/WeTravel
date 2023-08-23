<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background-color: #f1f1f1;
        font-family: "Font Awesome 5 Free";
    }
   form{
    border: 1px solid #ccc;
    border-radius: 5px;

    box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
    0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
    padding: 2em;
   }
   h2{
    padding: 20px; 

    text-align: center;    
   }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="<?php echo e(asset('assets/images/logo.svg')); ?>" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <title>Add Flight</title>
</head>

<body>

    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">

        <div class="container d-flex justify-content-around mt-2">
            <div class="navbar-nav w-100">
                <a href="<?php echo e(route('admin.index')); ?>" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            </div>
        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex"><?php echo e(auth()->user()->name); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo e(route('profile.show', auth()->user()->passenger_id)); ?>" class="dropdown-item">My
                        Profile</a>
                    <a href="<?php echo e(route('login.edit', auth()->user()->passenger_id)); ?>" class="dropdown-item">Modifier Mon
                        Profil</a>
                    <a href="<?php echo e(route('login.logout')); ?>" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <form class="row g-3" action="<?php echo e(route('flight.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h2>Add Flight</h2>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Country</label>
                <input type="text" name="Country" class="form-control" id="inputEmail4">
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Place de Depart</label>
                    <input type="text" class="form-control" name="Depart">
                </div>

                <div class="col-md-6">

                    <label class="form-label">Place de Retour</label>
                    <input type="text" class="form-control" name="Retour">
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="Image">
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Date de Depart</label>
                    <input type="date" name="date_Aller" class="form-control">
                </div>

                <div class="col-md-6">

                    <label class="form-label">Date de Retour</label>
                    <input type="date" name="date_Retour" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="row g-2">
                <div class="col-md-6">
                    <label class="form-label">Capacity</label>
                    <input class="form-control" type="number" name="capacity" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Price</label>
                    <input class="form-control" type="number" name="price" required>
                </div>
                <div class="col-md-8">
                    <input class="form-check-input" type="checkbox" name="available" value="1">
                    <label class="form-check-label" for="gridCheck">
                        Available
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Book Flight</button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


</html>
<?php /**PATH C:\Projects\booking\resources\views/admin/add.blade.php ENDPATH**/ ?>