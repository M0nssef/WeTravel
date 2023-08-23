<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{asset('assets/images/logo.svg')}}" rel="icon">

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

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-xxl position-relative bg-white d-flex p-0">
                <!-- Spinner Start -->
                <div id="spinner"
                    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- Spinner End -->


                <!-- Sidebar Start -->
                <div class="sidebar pe-4 pb-3">
                    <nav class="navbar bg-light navbar-light">
                        <a href="index.html" class="navbar-brand mx-4 mb-3">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                        </a>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                                <div
                                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">{{ $passenger->name }}</h6>
                                <span>Admin</span>
                            </div>
                        </div>
                        <div class="navbar-nav w-100">
                            <a href="index.html" class="nav-item nav-link"><i
                                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                            <a href="{{ asset('profiles') }}" class="nav-item nav-link">
                                <i class="fa fa-solid fa-user"></i>
                                All Passengers</a>
                            <div class="nav-item dropdown">
                                <a href="{{ route('show.flight') }}" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"><i
                                        class="fa fa-solid fa-plane fa-flip-vertical"></i>Flights</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="{{ route('show.flight') }}" class="dropdown-item"><i
                                            class="fa fa-solid fa-plane fa-flip-vertical"></i> All Flights</a>
                                    <a href="{{ route('admin.add') }}" class="dropdown-item"><i
                                            class="fa fa-sharp fa-solid fa-plus"></i> Add Flight</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Sidebar End -->


                <!-- Content Start -->
                <div class="content">
                    <!-- Navbar Start -->
                    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                        </a>
                        <a href="#" class="sidebar-toggler flex-shrink-0">
                            <i class="fa fa-bars"></i>
                        </a>
                        <form class="d-none d-md-flex gap-2 ms-4">
                            <div class="card">
                                <div class="card-body text-bold">Nr Passagers : {{ $NbrPassengers }}</div>
                            </div>
                            <div class="card">
                                <div class="card-body text-bold">Total: $ {{ $Total }}</div>
                            </div>
                        </form>
                        <div class="navbar-nav align-items-center ms-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa fa-solid fa-user"></i>
                                    <span class="d-none d-lg-inline-flex">{{ $passenger->name }}</span>
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
                    <!-- Navbar End -->


                    <!-- Blank Start -->
                    <div class="container-fluid pt-4 px-4  d-flex">
                        <div class="row vh-100 bg-light rounded  justify-content-center mx-0">
                            <div class="col-md-12 mb-12">
                                <div class="container">
                                    <table class="table table-bordered dark-table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">email</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allPassengers as $person)
                                                <tr>
                                                    <td> {{ $person->passenger_id }} </td>
                                                    <td> {{ $person->username }} </td>
                                                    <td> {{ $person->email }} </td>
                                                    <td> {{ $person->mobile }} </td>
                                                    <td> {{ $person->address }} </td>
                                                    @if ($person->role === 1)
                                                        <td style="color:green ;">Admin</td>
                                                    @else
                                                        <td> Passenger </td>
                                                    @endif
                                                    <td class="d-flex align-items-center justify-content-center gap-3">
                                                        <form action="{{ route('supprimer', $person->passenger_id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-sharp fa-regular fa-user-minus"></i>
                                                            </button>
                                                        </form>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('profile.show', $person->passenger_id) }}">
                                                            <i class="fa fa-solid fa-angle-right"></i>                                                    </td>
                                                </tr>
                                            @endforeach
                                            <!-- Add more rows here if needed -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex align-items-right">
                                    <a href="{{ asset('profiles') }}">Afficher Plus...</a>
                                </div>

                            </div>

                            <div class="col-md-12 pt-8">
                                <div class="container d-flex">
                                    <table class="table table-bordered dark-table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Country</th>
                                                <th scope="col" colspan="2">Depart et Retour</th>
                                                <th scope="col" colspan="2">Date Depart , Retour</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Capacity</th>
                                                <th scope="col">Available</th>
                                                <th scope="col" colspan="2">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody class="">
                                        @foreach ($allFlights as $flight)
                                                <tr>
                                                    <td> {{ $flight->Country }} </td>
                                                    <td colspan="2"> {{ $flight->Depart }} To
                                                        {{ $flight->Retour }} </td>
                                                    <td colspan="2"> {{ $flight->date_Aller }} To
                                                        {{ $flight->date_Retour }}
                                                    </td>
                                                    <td> ${{ $flight->price }} </td>
                                                    <td> {{ $flight->capacity }} </td>
                                                    <td>
                                                        @if ($flight->available === 1)
                                                            <p style="color:green">Available</p>
                                                        @else
                                                            <p style="color:red">Not Available</p>
                                                        @endif
                                                    </td>


                                                    <td class="d-flex align-items-center justify-content-center gap-3">

                                                        <a class="btn btn-primary"
                                                            href="{{ route('flight.detail', $flight->airline_id) }}">
                                                            <i class="fa fa-solid fa-angle-right"></i>                                                        </a>
                                                        <form action="{{ route('admin.edit', $flight->airline_id) }}"
                                                            method="get">
                                                            @csrf
                                                            <button class="btn btn-secondary">
                                                                <i class="fa fa-regular fa-pen"></i>                                                            </button>
                                                        </form>
                                                        <form
                                                            action="{{ route('supprimer.flight', $flight->airline_id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-sharp fa-solid fa-trash"></i>                                                            </button>
                                                        </form>

                                                    </td>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="text-align-right">
                                    <a href="{{ route('show.flight') }}">Afficher Plus...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blank End -->


                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                        class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>



</body>

</html>
