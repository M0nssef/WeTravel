<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/reserver.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Reserver</title>
</head>

<body>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <script>
                <x-alert type='success'>
                    <strong>Success !</strong> {{ session('success') }};
                </x-alert> 
            </script> 
        </div>
    @endif
    

    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row">
                <div class="col-12 p-5">
                    <img src="{{ asset('storage/' . $airline->Image) }}" alt="">
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
                        <p class="text-muted">Estimated Time</p>
                        <p class="h5 m-0">3h</p>
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
        <div class="col-lg-5 p-0 ps-lg-4">
            <form action="{{route('passenger.store')}}" method="POST">
                @csrf
                <div class="row m-0 mb-2">
                    <div class="col-12 px-4 mt-4 mb-2">
                        <p class="textmuted fw-bold">Passenger Informations</p>
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <span class="me-5">
                                <input class="form-control" type="text" value="{{ $passenger->name }}"
                                    placeholder="name" >
                                <input  type="hidden" value="{{ $passenger->passenger_id }}" name="passenger_id">
                            </span>
                            <span class="me-5">
                                <input class="form-control" type="text" value="{{ $passenger->username }}"
                                    placeholder="username" >
                            </span>

                        </div>
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <span class="me-5">
                                <input class="form-control" type="text" value="{{ $passenger->email }}"
                                    placeholder="email" >
                            </span>
                            <span class="me-5">
                                <input class="form-control" type="text" value="{{ $passenger->mobile }}"
                                    placeholder="mobile" >
                            </span>

                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="textmuted fw-bold">Price</p>
                        <div class="d-flex align-text-top ">
                            <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span
                                class="h4">{{ $airline->price }}</span>
                            <input type="hidden" name="airline_id" value="{{$airline->airline_id}}">
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="row bg-light m-0">
                        <div class="col-12 px-4 my-4">
                            <p class="fw-bold">Payment detail</p>
                        </div>
                        <div class="col-12 px-4">
                            <div class="d-flex  mb-4">
                                <span class="">
                                    <p class="text-muted">Card number</p>
                                    <input class="form-control" type="text" value="4485 6888 2359 1498"
                                        placeholder="1234 5678 9012 3456">
                                </span>
                                <div class=" w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">Expires</p>
                                    <input class="form-control2" type="text" value="01/2020" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <span class="me-5">
                                    <p class="text-muted">Cardholder name</p>
                                    <input class="form-control" type="text" value="David J.Frias" placeholder="Name">
                                </span>
                                <div class="w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">CVC</p>
                                    <input class="form-control3" type="text" value="630" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12  mb-4 p-0">
                            <a href="{{route('passenger.store')}}">
                                <button type="submit" class="btn btn-primary">Purchase
                                    <span class="fas fa-arrow-right ps-2"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- </div> --}}
    {{-- </div> --}}
</body>

</html>
