<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\registroRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class usuarioController extends Controller

{
    public function vistaRegistro(){
        return view('Registro');
    }


    public function Registro(registroRequest $request){
    $usuario=usuario::create($request->validated());
    return redirect('/Principal')->with('Felicitaciones','su cuenta ha sido creada');
    }

    public function vistaLogin(){
        return view('Ingreso');
    }
    
    public function Ingreso(loginRequest $request){
        if(Auth::attempt(['email'=>$request->email,'contraseña'=>$request->contraseña])){
            return redirect('/Principal');
        }
        else{
            return redirect('/Ingreso')->with('Error','Usuario o contraseña incorrectos');
        }
    }
}

