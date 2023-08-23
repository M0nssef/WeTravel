<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirlineRequest;
use App\Models\Airline;
use App\Models\Passenger;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class AdminController extends Controller
{

    //Passenger Section
    public function showAdmin(Passenger $passenger , Airline $airline)
    {
        $passenger = auth()->user() ;
        $NbrPassengers = Passenger::count();
        $allPassengers = Passenger::limit(2)->get();
        $allFlights = Airline::limit(2)->get();
        $Total = 0 ;
        $Total =  Airline::sum('price');
        return view('admin/dashbord/index' , compact('passenger' , 'allPassengers', 'airline' , 'NbrPassengers' , 'Total' ,'allFlights'));
    }
    public function index()
    { 
        $allPassengers = Passenger::all();
        return view('admin/profiles', compact('allPassengers'));
    }
    public function show(Request $request, Passenger $passenger)
    {
        //dd($id);

        //$id = (int) $request->id;
        //$passenger = Passenger::findOrFail($id);
        return view('admin/profile', compact('passenger'));
    }
    public function destroy(Passenger $passenger)
    {
        if (auth()->user()->role === 1) {
            # code...
            $passenger->delete();
            return redirect()->route('admin.index')->with('success', 'Le profile a ete bien supprimer');
        } else {
            # code...
            $passenger->delete();
            return redirect()->route('login.login')->with('success', 'Le profile a ete bien supprimer');
        }
    }


    //Flights Section

    public function showflight(Airline $airline)
    {
        $allFlights = Airline::all();
        return view('admin/list_flight', compact('allFlights'));
    }


    public function add()
    {
        return view('admin/add');
    }

    public function store(Request $request)
    {
        //dd($request);
        /*$form = $request->validate([
            'Image' => 'required|image|mimes:png,jpg',
        ]);*/
        $form = $request->all();
        
        //dd($form);
        $form['Image'] = $request->file('Image')->store('flight', 'public');
        
        Airline::create($form);


        return redirect()->route('show.flight')->with('success', 'Le Flight a ete bien ajouter');
    }

    public function deleteflight(Request $request, Airline $airline)
    {
        $airline->delete();
        //dd($airline);
        return redirect()->route('show.flight')->with('success', 'Le flight a ete bien supprimer');
    }

    public function flightdetail(Airline $airline)
    {
        return view('admin/detail_flight', compact('airline'));
    }

    public function edit(Airline $airline)
    {
        return view('admin/edit_flight', compact('airline'));
    }
    public function update(Request $request , Airline $airline)
    {
        $form = $request->post();
        if($request->hasFile('Image')){
            $form['Image'] = $request->file('Image')->store('flight', 'public');
        }
        $airline->fill($form)->save();
        return redirect()->route('show.flight')->with('success', 'Le Flight a ete bien modifier');
    }
}
