<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Validation\ValidationException;

class RegisterUserController extends Controller
{
    public function create(){
     return view('auth.register');
    }
    public function store(){
         $validated =   request()->validate([
                    'name' => ['required' , 'min:3' , 'max:15'],
                    'email' => ['required' , 'min:3' , 'email'],
                    'password' => ['required' , RulesPassword::min(6) , 'confirmed'],
                    ]);
        $userExists = User::where('email', request()->email)->exists();
        if($userExists){
            throw ValidationException::withMessages([
                'email'  => 'This Account is Exists'
            ]);
        }
        $user =User::create($validated);
            Auth::login($user);


        return redirect('jobs');
    }

}
