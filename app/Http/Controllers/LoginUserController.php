<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function create(){
        return view('auth.login');
       }
       public function store(){
        $validated = request()->validate([
            'email'     =>[ 'required','email' , 'min:3' , 'max:254'],
            'password'  => ['required' , Password::min(3)]
        ]);
        $user      = Auth::attempt($validated);
        if(!$user){
            throw ValidationException::withMessages([
                'email' => 'Sorry , The Email is Not Match',
            ]);
        }

        request()->session()->regenerate();
       return redirect('/jobs');
       }
       public function destory(){
            Auth::logout();
            return redirect('/');
       }
}
