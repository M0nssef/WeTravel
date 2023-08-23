<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <title>Flights</title>
</head>

<body>
    @if (session()->has('success'))
        <x-alert type='success'>
            {{ session('success') }}
        </x-alert>
    @endif


    {{-- <div class="container py-2 d-flex p-2 justify-content-between">

        <h3>Flights</h3>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight">My Profile</button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Hello {{ auth()->user()->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <a href="{{ route('login.logout') }}">Deconnexion</a>
            </div>
            <div class="offcanvas-body">
                <form action="{{ route('login.edit', auth()->user()->passenger_id) }}" method="get">
                    @csrf
                    <button class="btn btn-primary">
                        Modifier Mon Profile
                    </button>
                </form>
                <form action="{{ route('supprimer', auth()->user()->passenger_id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">
                        Supprimer Mon Porfile
                    </button>
                </form>
            </div>
        </div>
    </div> --}}
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <div class="container">
            <div class="navbar-nav w-100">
                <a href="{{ route('homepage') }}" class="nav-item nav-link"><i
                        class="fa fa-tachometer-alt me-2"></i>Home</a>
            </div>
        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-solid fa-user"></i>
                    <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{ route('show', auth()->user()->passenger_id) }}" class="dropdown-item">My
                        Profile</a>
                    <a href="{{ route('login.edit', auth()->user()->passenger_id) }}" class="dropdown-item">Modifier Mon
                        Profil</a>
                    <a href="{{ route('login.logout') }}" class="dropdown-item">
                        <p style="color: red"> Log Out </p>
                    </a>
                    <form action="{{ route('supprimer', auth()->user()->passenger_id) }}" method="post">
                        @method('DELETE')
                        @csrf
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
            @foreach ($allFlights as $flight)
                <ul class="package-list">

                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img width="100px" src='{{ asset('storage/' . $flight->Image) }}' loading='lazy'>
                            </figure>

                            <div class="card-content">

                                <h3 class="h3 card-title">{{ $flight->Country }} to {{ $flight->Retour }}</h3>

                                <p class="card-text">
                                    {{ $flight->description }}
                                </p>

                                <ul class="card-meta-list">

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="time"></ion-icon>

                                            <p class="text">{{ $flight->date_Aller }}</p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people"></ion-icon>

                                            <p class="text">{{ $flight->date_Retour }}</p>
                                        </div>
                                    </li>

                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location"></ion-icon>

                                            <p class="text">{{ $flight->Retour }}</p>
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
                                    ${{ $flight->price }}
                                    <span>/ per person</span>
                                </p>

                                <a href="{{ route('passenger.reserver', $flight->airline_id) }}">
                                    <button class="btn btn-secondary">Book Now
                                    </button>
                                </a>

                            </div>

                        </div>
                    </li>


                    <hr>
                </ul>
            @endforeach

            {{-- <button class="btn btn-primary">View All Packages</button> --}}

        </div>
    </section>






</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
