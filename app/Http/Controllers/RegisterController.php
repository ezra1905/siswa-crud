<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');

    }

    public function post(Request $request)
    {


        $user = new \App\Models\User;
        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        $user->password = \Hash::make($request->get('password'));
        $user->save();

        return redirect()->route('login');


    }
}
