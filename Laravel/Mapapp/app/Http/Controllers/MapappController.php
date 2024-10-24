<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapapp;


class MapappController extends Controller
{
    public function viewForm() {
        return view('mapapp');
    }

    public function login(Request $request) {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Assuming you're checking for user credentials, you would typically do something like this:
        $user = Mapapp::where('email', $validatedData['email'])->first();
    
        if ($user && Hash::check($validatedData['password'], $user->password)) {
            // Login the user
            Auth::login($user);
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
}
