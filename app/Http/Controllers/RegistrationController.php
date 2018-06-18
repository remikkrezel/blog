<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate the form
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);
        //create and save the user

        $user = User::create([

            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('request'))
        ]);

        //sign them in

        auth()->login($user);

        //redirect

        return redirect('/');
    }
}
