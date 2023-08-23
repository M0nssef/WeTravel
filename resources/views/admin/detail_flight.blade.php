<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Details Flight</title>
</head>

<body>

    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        
        <div class="container d-flex justify-content-around mt-2">
            <div class="navbar-nav w-100">
                <a href="{{route('admin.index')}}" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            </div>

        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{ route('profile.show', auth()->user()->passenger_id) }}"
                        class="dropdown-item">My Profile</a>
                    <a href="{{ route('login.edit', auth()->user()->passenger_id) }}"
                        class="dropdown-item">Modifier Mon
                        Profil</a>
                    <a href="{{ route('login.logout') }}" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container py-4 text-center">
        <div class="row">
            <div class="col-12 p-5">
                <img src="{{ asset('storage/' . $airline->Image) }}" width="70%" alt="">
            </div>
            <div class="row m-0 bg-light">
                <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                    <p class="text-muted">Depart</p>
                    <p class="h5">{{ $airline->Depart }}<span class="ps-1"></span></p>
                </div>
                <div class="col-md-4 col-6  ps-30 my-4">
                    <p class="text-muted">Retour</p>
                    <p class="h5 m-0">{{ $airline->Depart }}</p>
                </div>
                <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Price</p>
                    <p class="h5 m-0">${{ $airline->price }}</p>
                </div>
                <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Date Aller</p>
                    <p class="h5 m-0">{{ $airline->date_Aller }}</p>
                </div>
                <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Date Retour</p>
                    <p class="h5 m-0">{{ $airline->date_Retour }}</p>
                </div>
                <div class="col-md-4 col-6 ps-30 my-4">
                    <p class="text-muted">Nbr Seats</p>
                    <p class="h5 m-0">{{ $airline->capacity }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
