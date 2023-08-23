<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassengerRequest;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PassengerController extends Controller
{
    //
    
    public function create(){
        return view('profile/register');
    }


    public function store(PassengerRequest $request){
        
        $name = $request->name ;
        $username = $request->username ;
        $mobile = $request->mobile ;
        $email = $request->email ;
        $password = $request->password ;
        $address = $request->address ;
        $role = $request->role ;

        //Validation
        $Form = $request->validated();

        //Hash
        $Form['password'] = Hash::make($request->password);
        //Insertion
        /*Passenger::create([
            'name' => $name ,
            'mobile' => $mobile ,
            'email' => $email ,
            'username' => $username ,
            'password' => $password ,
            'address' => $address ,
            'role' => false
            
        ]);*/
        Passenger::create($Form);
        


        return redirect()->route('homepage')->with('success' , 'Vous etes bien connecte');
    }
    public function show(Passenger $passenger , Request $request){
        //$passenger = Passenger::findOrFail($id);
       return view('admin/profile' , compact('passenger'));
    }
    public function destroy(Request $request , Passenger $passenger)
    {
        dd($passenger->passenger_id);
        //$passenger->delete();
        return redirect()->route('homepage')->with('success' , 'Le profile a ete bien supprimer');
    }
    
    
}
