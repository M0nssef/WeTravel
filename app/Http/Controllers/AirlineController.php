<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Passenger;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    //
    public function index(Airline $airline)
    {
        $allFlights = Airline::all();
        return view('flight/index', compact('allFlights'));
        //return view('flight/flight-card' , compact('allFlights'));
    }

    public function reserver(Airline $airline , Request $request , Passenger $passengers){
        $passenger = auth()->user();
        return view('reservation/flight_passenger',compact('airline' , 'passenger'))->with('success' , 'Vous etes bien reserve cet flight');
    }
    
    public function store(Request $request)
    {
        $passenger_id = $request->passenger_id;
        $airline_id = $request->airline_id;
        $form = [
            'reservation_passenger_id' => $passenger_id,
            'reservation_airline_id' => $airline_id,
        ];
        //dd($form);
        Reservation::create($form);
        return redirect()->route('flight')->with('success' , 'Vous etes bien reserver cet flight');

    }

   
}
