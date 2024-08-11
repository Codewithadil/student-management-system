<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       try{
          if(Auth::attempt($request->only('email', 'password'))){
              $user = Auth::user();
              return redirect()->route('studentsList')->with('success', 'You are successfully logged in!');
          }
       }
       catch(\Exception $e){
        return redirect()->back()->with('error', 'Internal error, please try again later.');
       }

       return redirect()->back()->with('error', 'Invalid Email or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
