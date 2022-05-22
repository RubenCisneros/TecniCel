<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Creates and login a new user
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */

     public function register(Request $request){
         $validated = $request->validate([
            'name' => 'required|string|max:50',
            'first_surname' => 'required|string|max:50',
            'second_surname' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|max:60|confirmed'
         ]);
         $validated['password'] = Hash::make($validated['password']);
         $user = User::create($validated);

         $remember_token = $request->boolean('remember_token');

        Auth::login($user, $remember_token);
        return redirect('/');
     }
}
