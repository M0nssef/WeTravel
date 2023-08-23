<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>All Porfiles</title>
</head>

<body>
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        
        <div class="container">
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
    <!-- Navbar End -->

    
    <div class="container pt-3 py-3 mt-5 ">
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
                            <form action="{{ route('supprimer', $person->passenger_id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fa fa-sharp fa-regular fa-user-minus"></i>
                                </button>
                            </form>
                            <a class="btn btn-primary" href="{{ route('profile.show', $person->passenger_id) }}">
                                <i class="fa fa-solid fa-angle-right"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows here if needed -->
            </tbody>
        </table>
    </div>
    <style>
        body{
            background-color: #fff;
        }
        a {
            text-decoration: none;
            color: #fff;
        }

        a:hover {
            color: #fff;
        }
    </style>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
