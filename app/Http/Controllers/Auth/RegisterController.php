<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //Show the register form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    //Handle the registration
    public function register(Request $request)
    {
        // Validate the request
        $this->validator($request->all())->validate();

        // Create the user
        $user = $this->create($request->all());

        // Optionally, log in the user after registration
        auth()->login($user);

        // Redirect to the desired page
        return redirect()->route('home')->with('success', 'Registration successful! You are now logged in.');
    }

     // Validate the request data
     protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => ['required', 'string', 'confirmed', 'min:8'],
         ]);
     }

   // Create a new user instance
   protected function create(array $data)
   {
       return User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => Hash::make($data['password']),
       ]);
   }
}
