<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function create()
    {
        return view('Ingreso');
    }

    public function store(){
        if(! auth()->attempt(request(['email','contraseña']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }
        return redirect()->to('/Principal');
    }
}
