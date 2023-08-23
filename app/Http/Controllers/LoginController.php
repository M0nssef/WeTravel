<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassengerRequest;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('profile/login');
    }
    public function login(Request $request )
    {
        $email = $request->email;
        $password = $request->password;
        $request->validate([ 
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];
        //dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            //Connection
            $request->session()->regenerate();
            if (auth()->user()->role === 1) {
                # code...
                return redirect()->route('admin.index')->with('success', 'Voues Etes bien connectes' . ' ' . $request->email);
            } else {
                # code...
                return redirect()->route('homepage')->with('success', 'Voues Etes bien connectes' . ' ' . $request->email);
            }
            
        } else {

            return back()->withErrors(
                'email',
                'Email ou Password incorrect'
            );
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return  redirect()->route('login.show')->with('success', 'Voues etes deconecte');
    }

    public function edit(Request $request, Passenger $passenger)
    {
        //dd($passenger->passenger_id);
        return view('profile/edit', compact('passenger'));
    }

    public function update(Request $request, Passenger $passenger)
    {
        $form = $request->post();
        $form['password'] = Hash::make($request->password);
        $passenger->fill($form)->save();
        if (auth()->user()->role === 1){
            return redirect()->route('admin.index')->with('success', 'Le Profile a ete bien modifier');

        }else{
            return redirect()->route('flight')->with('success', 'Le Profile a ete bien modifier');
        }
    
    }

    public function destroy(Passenger $passenger)
    {
        //dd($passenger);
        $passenger->delete();

        return redirect()->route('homepage')->with('success' , 'Le profile a ete bien supprimer'); 
    }
}
